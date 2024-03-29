@extends('panel.layout.app')
@section('title', 'Frontend Settings')

@section('content')
    <div class="page-header">
        <div class="container-xl">
            <div class="row g-2 items-center">
                <div class="col">
                    <a href="{{ LaravelLocalization::localizeUrl( route('dashboard.index') ) }}" class="page-pretitle flex items-center">
                        <svg class="!me-2 rtl:-scale-x-100" width="8" height="10" viewBox="0 0 6 10" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.45536 9.45539C4.52679 9.45539 4.60714 9.41968 4.66071 9.36611L5.10714 8.91968C5.16071 8.86611 5.19643 8.78575 5.19643 8.71432C5.19643 8.64289 5.16071 8.56254 5.10714 8.50896L1.59821 5.00004L5.10714 1.49111C5.16071 1.43753 5.19643 1.35718 5.19643 1.28575C5.19643 1.20539 5.16071 1.13396 5.10714 1.08039L4.66071 0.633963C4.60714 0.580392 4.52679 0.544678 4.45536 0.544678C4.38393 0.544678 4.30357 0.580392 4.25 0.633963L0.0892856 4.79468C0.0357141 4.84825 0 4.92861 0 5.00004C0 5.07146 0.0357141 5.15182 0.0892856 5.20539L4.25 9.36611C4.30357 9.41968 4.38393 9.45539 4.45536 9.45539Z"/>
                        </svg>
                        {{__('Back to dashboard')}}
                    </a>
                    <h2 class="page-title mb-2">
                        {{__('Frontend Settings')}}
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body pt-6">
        <div class="container-xl">
            <div class="row col-md-5 mx-auto">
                <form class="@if(view()->exists('panel.admin.custom.layout.panel.header-top-bar')) bg-[--tblr-bg-surface] px-8 py-10 rounded-[--tblr-border-radius] @endif" id="settings_form" onsubmit="return frontendSettingsSave();" enctype="multipart/form-data">
                    <div class="alert alert-info alert-deprecated" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-info-octagon" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M9.103 2h5.794a3 3 0 0 1 2.122 .879l4.101 4.1a3 3 0 0 1 .88 2.125v5.794a3 3 0 0 1 -.879 2.122l-4.1 4.101a3 3 0 0 1 -2.123 .88h-5.795a3 3 0 0 1 -2.122 -.88l-4.101 -4.1a3 3 0 0 1 -.88 -2.124v-5.794a3 3 0 0 1 .879 -2.122l4.1 -4.101a3 3 0 0 1 2.125 -.88z"></path>
                            <path d="M12 9h.01"></path>
                            <path d="M11 12h1v4h1"></path>
                         </svg>
                        <span class="cursor-pointer" onclick="return showDeprecated();">{{__('Some of the inputs were deprecated. Show them and edit.')}}</span>
                    </div>
                    <h3 class="mb-[25px] text-[20px]">{{__('General Settings')}}</h3>
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">{{__('Site Name')}}</label>
                                <input type="text" class="form-control" id="site_name" name="site_name" value="{{$setting->site_name}}">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">{{__('Site URL')}}</label>
                                <input type="text" class="form-control" id="site_url" name="site_url" value="{{$setting->site_url}}">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">{{__('Site Email')}}</label>
                                <input type="text" class="form-control" id="site_email" name="site_email" value="{{$setting->site_email}}">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">{{__('Registration Active')}}</label>
                                <select class="form-select" name="register_active" id="register_active">
                                    <option value="1" {{$setting->register_active == 1 ? 'selected' : ''}}>{{__('Active')}}</option>
                                    <option value="0" {{$setting->register_active == 0 ? 'selected' : ''}}>{{__('Passive')}}</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row mb-4">
                        <h3 class="mb-[25px] text-[20px]">{{__('Frontend Settings')}}</h3>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">{{__('PreHeader Section')}}</label>
                                <select class="form-select" name="preheader_active" id="preheader_active">
                                    <option value="1" {{$fSectSettings->preheader_active == 1 ? 'selected' : ''}}>{{__('Active')}}</option>
                                    <option value="0" {{$fSectSettings->preheader_active == 0 ? 'selected' : ''}}>{{__('Passive')}}</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12 deprecated hidden">
                            <div class="mb-3">
                                <label class="form-label">{{__('PreHeader Title')}}</label>
                                <input type="text" class="form-control" id="header_title" name="header_title" value="{{$fSetting->header_title}}">
                            </div>
                        </div>

                        <div class="col-md-12 deprecated hidden">
                            <div class="mb-3">
                                <label class="form-label">{{__('PreHeader Text')}}</label>
                                <input type="text" class="form-control" id="header_text" name="header_text" value="{{$fSetting->header_text}}">
                            </div>
                        </div>

                        <div class="col-md-12 deprecated hidden">
                            <div class="mb-3">
                                <label class="form-label">{{__('Sign In Text')}}</label>
                                <input type="text" class="form-control" id="sign_in" name="sign_in" value="{{$fSetting->sign_in}}">
                            </div>
                        </div>

                        <div class="col-md-12 deprecated hidden">
                            <div class="mb-3">
                                <label class="form-label">{{__('Sign Up Text')}}</label>
                                <input type="text" class="form-control" id="join_hub" name="join_hub" value="{{$fSetting->join_hub}}">
                            </div>
                        </div>

                        <div class="col-md-12 deprecated hidden">
                            <div class="mb-3">
                                <label class="form-label">{{__('Hero Subtitle')}}</label>
                                <input type="text" class="form-control" id="hero_subtitle" name="hero_subtitle" value="{{$fSetting->hero_subtitle}}">
                            </div>
                        </div>

                        <div class="col-md-12 deprecated hidden">
                            <div class="mb-3">
                                <label class="form-label">{{__('Hero Title')}}</label>
                                <input type="text" class="form-control" id="hero_title" name="hero_title" value="{{$fSetting->hero_title}}">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">{{__('Hero Title Text Rotator')}}</label>
                                <input type="text" class="form-control" id="hero_title_text_rotator" name="hero_title_text_rotator" value="{{$fSetting->hero_title_text_rotator}}">
                                <div class="bg-blue-100 text-blue-600 rounded-xl !p-3 !mt-2 dark:bg-blue-600/20 dark:text-blue-200">
                                    <svg class="inline !me-1" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path> <path d="M12 9h.01"></path> <path d="M11 12h1v4h1"></path> </svg>
                                    {{__('Please use comma seperated like; Generator,Chatbot,Assistant')}}
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12 deprecated hidden">
                            <div class="mb-3">
                                <label class="form-label">{{__('Hero Description')}}</label>
                                <input type="text" class="form-control" id="hero_description" name="hero_description" value="{{$fSetting->hero_description}}">
                            </div>
                        </div>
                        <div class="col-md-12 deprecated hidden">
                            <div class="mb-3">
                                <label class="form-label">{{__('Hero Scroll Text')}}</label>
                                <input type="text" class="form-control" id="hero_scroll_text" name="hero_scroll_text" value="{{$fSetting->hero_scroll_text}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">{{__('Hero Button')}}</label>
                                <input type="text" class="form-control" id="hero_button" name="hero_button" value="{{$fSetting->hero_button}}">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">{{__('Hero Button Type')}}<x-info-tooltip text="{{__('This will affect the button style')}}" /></label>
                                
                                <select class="form-select" name="hero_button_type" id="hero_button_type">
                                    <option value="1" {{$fSetting->hero_button_type == 1 ? 'selected' : ''}}>{{__('Website')}}</option>
                                    <option value="0" {{$fSetting->hero_button_type == 0 ? 'selected' : ''}}>{{__('Video')}}</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">{{__('Hero Button URL')}}</label>
                                <input type="text" class="form-control" id="hero_button_url" name="hero_button_url" value="{{$fSetting->hero_button_url}}">
                            </div>
                        </div>
                        

                        <div class="col-md-12 deprecated hidden">
                            <div class="mb-3">
                                <label class="form-label">{{__('Footer Header')}}</label>
                                <input type="text" class="form-control" id="footer_header" name="footer_header" value="{{$fSetting->footer_header}}">
                            </div>
                        </div>

                        <div class="col-md-12 deprecated hidden">
                            <div class="mb-3">
                                <label class="form-label">{{__('Footer Header Small Text')}}</label>
                                <input type="text" class="form-control" id="footer_text_small" name="footer_text_small" value="{{$fSetting->footer_text_small}}">
                            </div>
                        </div>
                        <div class="col-md-12 deprecated hidden">
                            <div class="mb-3">
                                <label class="form-label">{{__('Footer Text')}}</label>
                                <input type="text" class="form-control" id="footer_text" name="footer_text" value="{{$fSetting->footer_text}}">
                            </div>
                        </div>

                        <div class="col-md-12 deprecated hidden">
                            <div class="mb-3">
                                <label class="form-label">{{__('Footer Button Text')}}</label>
                                <input type="text" class="form-control" id="footer_button_text" name="footer_button_text" value="{{$fSetting->footer_button_text}}">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">{{__('Footer Button URL (Please enter full url)')}}</label>
                                <input type="text" class="form-control" id="footer_button_url" name="footer_button_url" value="{{$fSetting->footer_button_url}}">
                            </div>
                        </div>

                        <div class="col-md-12 deprecated hidden">
                            <div class="mb-3">
                                <label class="form-label">{{__('Footer Copyright')}}</label>
                                <input type="text" class="form-control" id="footer_copyright" name="footer_copyright" value="{{$fSetting->footer_copyright}}">
                            </div>
                        </div>



                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">{{__('Pricing Section')}}</label>
                                <select class="form-select" name="frontend_pricing_section" id="frontend_pricing_section">
                                    <option value="1" {{$setting->frontend_pricing_section == 1 ? 'selected' : ''}}>{{__('Active')}}</option>
                                    <option value="0" {{$setting->frontend_pricing_section == 0 ? 'selected' : ''}}>{{__('Passive')}}</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">{{__('Custom Templates Section')}}</label>
                                <select class="form-select" name="frontend_custom_templates_section" id="frontend_custom_templates_section">
                                    <option value="1" {{$setting->frontend_custom_templates_section == 1 ? 'selected' : ''}}>{{__('Active')}}</option>
                                    <option value="0" {{$setting->frontend_custom_templates_section == 0 ? 'selected' : ''}}>{{__('Passive')}}</option>
                                </select>
                            </div>
                        </div>


                        

                        

                    </div>

                    <div class="row mb-4">
                        <h3 class="mb-[25px] text-[20px]">{{__('Floating Button')}}</h3>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <select class="form-select" name="floating_button_active" id="floating_button_active">
                                    <option value="1" {{$fSetting->floating_button_active == 1 ? 'selected' : ''}}>{{__('Active')}}</option>
                                    <option value="0" {{$fSetting->floating_button_active == 0 ? 'selected' : ''}}>{{__('Passive')}}</option>
                                </select>
                            </div> 
                        </div>
                        <div class="col-md-12 floating-button-input">
                            <div class="mb-3">
                                <label class="form-label">{{__('Floating Button Small Text')}}</label>
                                <input type="text" class="form-control" id="floating_button_small_text" name="floating_button_small_text" value="{{$fSetting->floating_button_small_text}}">
                            </div>
                        </div>
                        <div class="col-md-12 floating-button-input">
                            <div class="mb-3">
                                <label class="form-label">{{__('Floating Button Bold Text')}}</label>
                                <input type="text" class="form-control" id="floating_button_bold_text" name="floating_button_bold_text" value="{{$fSetting->floating_button_bold_text}}">
                            </div>
                        </div>
                        <div class="col-md-12 floating-button-input">
                            <div class="mb-3">
                                <label class="form-label">{{__('Floating Button URL')}}</label>
                                <input type="text" class="form-control" id="floating_button_link" name="floating_button_link" value="{{$fSetting->floating_button_link}}">
                            </div>
                        </div>

                        <div class="flex justify-center items-center mt-2 floating-button-input">
                            <a id="floating_button_preview" data-fancybox="video-show" href="{{!empty($fSetting->floating_button_link) ? $fSetting->floating_button_link : '#'}}"  class="hover:no-underline flex max-w-max gap-3 text-sm text-[#002A40] text-opacity-60 items-center bg-white py-2 px-3 rounded-xl shadow-lg transition-all duration-300 hover:shadow-md hover:scale-110 hover:-translate-y-1">
                                <span class="inline-flex items-center justify-center shrink-0 rounded-full bg-gradient-to-br from-[#3655df] via-[#A068FA] via-70% to-[#327BD1] lqd-is-in-view">
                                    <svg style="padding: 16px;" xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M6 4v16a1 1 0 0 0 1.524 .852l13 -8a1 1 0 0 0 0 -1.704l-13 -8a1 1 0 0 0 -1.524 .852z" stroke-width="0" fill="#fff"></path>
                                    </svg>
                                </span>
                                <p class="[&amp;_strong]:block pt-2">{!! __($fSetting->floating_button_small_text?? "See it in action") !!}<strong class="text-black text-[0.9rem]">{!! __($fSetting->floating_button_bold_text?? "How it Works?") !!} &nbsp;</strong></p>
                            </a>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <h3 class="mb-[25px] text-[20px]">{{__('Footer Social Media Settings')}}</h3>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Facebook {{__('Address')}}</label>
                                <input type="text" class="form-control" id="frontend_footer_facebook" name="frontend_footer_facebook" value="{{$setting->frontend_footer_facebook}}">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Twitter {{__('Address')}}</label>
                                <input type="text" class="form-control" id="frontend_footer_twitter" name="frontend_footer_twitter" value="{{$setting->frontend_footer_twitter}}">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Instagram {{__('Address')}}</label>
                                <input type="text" class="form-control" id="frontend_footer_instagram" name="frontend_footer_instagram" value="{{$setting->frontend_footer_instagram}}">
                            </div>
                        </div>



                    </div>

                    <div class="row mb-4">
                        <h3 class="mb-[25px] text-[20px]">{{__('Advanced Settings')}}</h3>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">{{__('Custom Landing Page URL')}}</label>
                                <input type="text" class="form-control" id="frontend_additional_url" name="frontend_additional_url" value="{{$setting->frontend_additional_url}}">
								<div class="bg-blue-100 text-blue-600 rounded-xl !p-3 !mt-2 dark:bg-blue-600/20 dark:text-blue-200">
									<svg class="inline !me-1" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path> <path d="M12 9h.01"></path> <path d="M11 12h1v4h1"></path> </svg>
									{{__('Please provide full URL with http:// or https://')}}
								</div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">{{__('Custom CSS URL')}}</label>
                                <input type="text" class="form-control" id="frontend_custom_css" name="frontend_custom_css" value="{{$setting->frontend_custom_css}}">
								<div class="bg-blue-100 text-blue-600 rounded-xl !p-3 !mt-2 dark:bg-blue-600/20 dark:text-blue-200">
									<svg class="inline !me-1" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path> <path d="M12 9h.01"></path> <path d="M11 12h1v4h1"></path> </svg>
									{{__('Please provide full URL with http:// or https://')}}
								</div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">{{__('Custom JS URL')}}</label>
                                <input type="text" class="form-control" id="frontend_custom_js" name="frontend_custom_js" value="{{$setting->frontend_custom_js}}">
                                <div class="bg-blue-100 text-blue-600 rounded-xl !p-3 !mt-2 dark:bg-blue-600/20 dark:text-blue-200">
									<svg class="inline !me-1" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path> <path d="M12 9h.01"></path> <path d="M11 12h1v4h1"></path> </svg>
									{{__('Please provide full URL with http:// or https://')}}
								</div>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">
                                    {{__('Code before </head>')}}
                                    <x-info-tooltip text="{{__('Only accepts javascript code wrapped with <script> tags and HTML markup that is valid inside the </head> tag.')}}" />
                                </label>
                                <textarea class="form-control" id="frontend_code_before_head" name="frontend_code_before_head">{{$setting->frontend_code_before_head}}</textarea>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">
                                    {{__('Code before </body>')}}
                                    <x-info-tooltip text="{{__('Only accepts javascript code wrapped with <script> tags and HTML markup that is valid inside the </body> tag.')}}" />
                                </label>
                                <textarea class="form-control" id="frontend_code_before_body" name="frontend_code_before_body">{{$setting->frontend_code_before_body}}</textarea>
                            </div>
                        </div>

                    </div>

                    <button form="settings_form" id="settings_button" class="btn btn-primary w-100">
                        {{__('Save')}}
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="/assets/js/panel/settings.js"></script>
    <script src="/assets/libs/ace/src-min-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
	<style type="text/css" media="screen">
		.ace_editor{
			min-height: 200px;
		}
	</style>
	<script>
        var frontend_code_before_head = ace.edit("frontend_code_before_head");
        frontend_code_before_head.session.setMode("ace/mode/html");
        
        var frontend_code_before_body = ace.edit("frontend_code_before_body");
        frontend_code_before_body.session.setMode("ace/mode/html");
	</script>
    <script>
        function showDeprecated() {
            $('.deprecated').css({'display':'block'});
            toastr.success(@json(__('Deprecated inputs are editable now.')))
        }
    </script>
    <script>
        $(document).ready(function () {
            'use strict';

            if ($('#floating_button_active').val() == '0') {
                $('.floating-button-input').hide();
            }
    
            $('#floating_button_active').change(function () {
                var selectedValue = $(this).val();
                if (selectedValue == '1') {
                    $('.floating-button-input').show();
                } else {
                    $('.floating-button-input').hide();
                }
            });

            var smallTextInput = $('#floating_button_small_text');
            var boldTextInput = $('#floating_button_bold_text');
            var previewLink = $('#floating_button_preview');
            
            smallTextInput.on('input', function () {
                var smallText = smallTextInput.val() || "See it in action";
                var boldText = boldTextInput.val() || "How it Works?";
                updatePreview(smallText, boldText);
            });

            boldTextInput.on('input', function () {
                var smallText = smallTextInput.val() || "See it in action";
                var boldText = boldTextInput.val() || "How it Works?";
                updatePreview(smallText, boldText);
            });

            // Function to update the preview <a> tag
            function updatePreview(smallText, boldText) {
                var updatedContent = smallText + '<strong class="text-black text-[0.9rem]">' + boldText + '</strong> &nbsp;';
                previewLink.find('p').html(updatedContent).addClass('pt-4');
            }

        });
    </script>
    
@endsection
