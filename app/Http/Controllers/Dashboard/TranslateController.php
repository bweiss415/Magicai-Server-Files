<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Datlechin\GoogleTranslate\Facades\GoogleTranslate;

class TranslateController extends Controller
{
    public function autoTranslate($lang)
    {
        // Load the English (en) and target language JSON files
        $enJsonFilePath = base_path('lang/en.json');
        $targetJsonFilePath = base_path("lang/$lang.json");

        // Get all keys from en.json file
        $enJsonContents = file_get_contents($enJsonFilePath);
        $enDataToTranslate = json_decode($enJsonContents, true);

        if (!file_exists($targetJsonFilePath)) {
            // If the target language file doesn't exist, create a copy from en.json with null values
            $nullValuesArray = array_fill_keys(array_keys($enDataToTranslate), null);
            $newJsonF = json_encode($nullValuesArray, JSON_PRETTY_PRINT);
            file_put_contents($targetJsonFilePath, $newJsonF);
        }

        // Get all keys from the target language JSON file
        $targetJsonContents = file_get_contents($targetJsonFilePath);
        $targetDataToTranslate = json_decode($targetJsonContents, true);
        // Identify missing keys in the target language file
        $missingKeys = array_diff_key($enDataToTranslate, $targetDataToTranslate);
        // Check if there are keys to translate
        if (!empty($missingKeys)) {
            foreach ($missingKeys as $key) {
                if (!isset($targetDataToTranslate[$key])) {    
                    // Update the target language JSON file based on the translation
                    $targetDataToTranslate[$key] = null;
                }
            }
            // Update the target language JSON file
            $newJson = json_encode($targetDataToTranslate, JSON_PRETTY_PRINT);
            file_put_contents($targetJsonFilePath, $newJson);
        }



        // Translate 40 untranslated keys or all if less than 40
        $untranslatedKeys = array_filter($targetDataToTranslate, function ($value) {
            return $value === null;
        });
        $keysToTranslate = array_slice(array_keys($untranslatedKeys), 0, 100);

        // Check if there are keys to translate
        if (!empty($keysToTranslate)) {
            foreach ($keysToTranslate as $key) {
                // Translate the string using Google Translate API
                $result = GoogleTranslate::withSource('en')
                    ->withTarget($lang)
                    ->translate($enDataToTranslate[$key]);
    
                $translatedText = $result->getTranslatedText();
    
                // Update the target language JSON file based on the translation
                $targetDataToTranslate[$key] = $translatedText;

                // Update the Strings model based on the translation
                $column_name = $lang;
                $query = \Elseyyid\LaravelJsonLocationsManager\Models\Strings::query();

                if ($column_name == 'edit') {
                    // Logic for handling 'edit' column
                    $query->update([$column_name => $translatedText]);
                } else {
                    // Logic for other columns
                    $query->where('en', '=', $key)->update([$column_name => $translatedText]);
                }
            }
    
            // Update the target language JSON file
            $newJson = json_encode($targetDataToTranslate, JSON_PRETTY_PRINT);
            file_put_contents($targetJsonFilePath, $newJson);
    
            return back()->with(['message' => 'Translations have been updated successfully.', 'type' => 'success']);
        } else {
            // All keys have been translated
            return back()->with(['message' => 'All translations have been completed.', 'type' => 'info']);
        }

    }
}