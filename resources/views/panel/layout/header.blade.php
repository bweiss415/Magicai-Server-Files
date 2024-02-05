<span
    class="navbar-expander inline-flex items-center justify-center w-6 h-6 fixed top-[calc(var(--lqd-header-height)/2)] !start-[--navbar-width] p-0 border-0 bg-[--lqd-header-search-bg] rounded-2xl z-50 transition-all cursor-pointer -translate-x-1/2 -translate-y-1/2 max-lg:hidden hover:bg-[--lqd-faded-out] group-[.navbar-shrinked]/body:!start-[80px]">
    <svg class="transition-transform translate-x-0 translate-y-0 group-[.navbar-shrinked]/body:-scale-x-100 group-hover:-translate-x-[2px] group-[.navbar-shrinked]/body:group-hover:translate-x-[2px] rtl:-scale-x-100 rtl:group-[.navbar-shrinked]/body:scale-x-100"
        xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5"
        stroke="var(--lqd-heading-color)" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path d="M15 6l-6 6l6 6"></path>
    </svg>
</span>
<aside
    class="navbar navbar-vertical navbar-expand-lg navbar-transparent !overflow-hidden max-lg:absolute max-lg:top-[65px] max-lg:left-0 max-lg:w-full max-lg:z-50 max-lg:!bg-white max-lg:!shadow-xl max-lg:min-h-0 max-lg:p-0 max-lg:max-h-[calc(85vh-2rem)] max-lg:overflow-y-auto max-lg:dark:!bg-[--tblr-body-bg] max-lg:rounded-b-[20px] group-[.navbar-shrinked]/body:!overflow-visible">
    <div class="navbar-inner h-full overflow-x-hidden overflow-y-auto max-h-[inherit] max-lg:w-full">
        <div class="p-0 container-fluid max-lg:w-full">
            <h1
                class="flex items-center ps-[1.25rem] pe-9 min-h-[--lqd-header-height] max-w-full relative max-lg:hidden group-[.navbar-shrinked]/body:w-full group-[.navbar-shrinked]/body:px-0 group-[.navbar-shrinked]/body:text-center group-[.navbar-shrinked]/body:justify-center">
                <a class="block px-0" href="{{ LaravelLocalization::localizeUrl(route('dashboard.index')) }}">

                    @if (isset($setting->logo_dashboard))
                        <img src="/{{ $setting->logo_dashboard_path }}"
                            @if (isset($setting->logo_dashboard_2x_path)) srcset="/{{ $setting->logo_dashboard_2x_path }} 2x" @endif
                            alt="{{ $setting->site_name }}"
                            class="w-full h-auto group-[.navbar-shrinked]/body:hidden dark:hidden">
                        <img src="/{{ $setting->logo_dashboard_dark_path }}"
                            @if (isset($setting->logo_dashboard_dark_2x_path)) srcset="/{{ $setting->logo_dashboard_dark_2x_path }} 2x" @endif
                            alt="{{ $setting->site_name }}"
                            class="w-full h-auto hidden group-[.navbar-shrinked]/body:hidden dark:block">
                    @else
                        <img src="/{{ $setting->logo_path }}"
                            @if (isset($setting->logo_2x_path)) srcset="/{{ $setting->logo_2x_path }} 2x" @endif
                            alt="{{ $setting->site_name }}"
                            class="w-full h-auto group-[.navbar-shrinked]/body:hidden dark:hidden">
                        <img src="/{{ $setting->logo_dark_path }}"
                            @if (isset($setting->logo_dark_2x_path)) srcset="/{{ $setting->logo_dark_2x_path }} 2x" @endif
                            alt="{{ $setting->site_name }}"
                            class="w-full h-auto hidden group-[.navbar-shrinked]/body:hidden dark:block">
                    @endif

                    <!-- collapsed -->
                    <img src="/{{ $setting->logo_collapsed_path }}"
                        @if (isset($setting->logo_collapsed_2x_path)) srcset="/{{ $setting->logo_collapsed_2x_path }} 2x" @endif
                        alt="{{ $setting->site_name }}"
                        class="w-full h-auto hidden max-w-[40px] mx-auto group-[.navbar-shrinked]/body:block dark:!hidden">
                    <img src="/{{ $setting->logo_collapsed_dark_path }}"
                        @if (isset($setting->logo_collapsed_dark_2x_path)) srcset="/{{ $setting->logo_collapsed_dark_2x_path }} 2x" @endif
                        alt="{{ $setting->site_name }}"
                        class="w-full h-auto hidden max-w-[40px] mx-auto group-[.theme-dark.navbar-shrinked]/body:block">

                </a>
            </h1>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="primary-nav navbar-nav max-lg:py-4 max-lg:px-3">
                    <li>
                        <div class="transition-all nav-link-label">
                            <span
                                class="inline-block text-[10px] font-medium uppercase tracking-widest px-[0.5em] py-[0.35em] rounded-[3px]">
                                {{ __('User') }}
                            </span>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ activeRoute('dashboard.user.index') }}"
                            href="{{ route('dashboard.user.index') }}">
                            <span class="nav-link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M4 4h6v6h-6z"></path>
                                    <path d="M14 4h6v6h-6z"></path>
                                    <path d="M4 14h6v6h-6z"></path>
                                    <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                </svg>
                            </span>
                            <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                {{ __('Dashboard') }}
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ activeRoute('dashboard.user.openai.documents.all') }}"
                            href="{{ route('dashboard.user.openai.documents.all') }}">
                            <span class="nav-link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z">
                                    </path>
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10"></path>
                                    <path d="M10 12l4 0"></path>
                                </svg>
                            </span>
                            <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                {{ __('Documents') }}
                            </span>
                        </a>
                    </li>

                    @if ($setting->feature_ai_writer)
                        <li class="nav-item">
                            <a class="nav-link {{ activeRoute('dashboard.user.openai.list') }}"
                                href="{{ route('dashboard.user.openai.list') }}">
                                <span class="nav-link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M5 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z">
                                        </path>
                                        <path d="M9 7l6 0"></path>
                                        <path d="M9 11l6 0"></path>
                                        <path d="M9 15l4 0"></path>
                                    </svg>
                                </span>
                                <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                    {{ __('AI Writer') }}
                                </span>
                            </a>
                        </li>
                    @endif

                    @if ($setting->feature_ai_image)
                        <li class="nav-item">
                            <a class="nav-link {{ route('dashboard.user.openai.generator', 'ai_image_generator') == url()->current() ? 'active' : '' }}"
                                href="{{ route('dashboard.user.openai.generator', 'ai_image_generator') }}">
                                <span class="nav-link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M15 8h.01"></path>
                                        <path
                                            d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z">
                                        </path>
                                        <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5"></path>
                                        <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3"></path>
                                    </svg>
                                </span>
                                <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                    {{ __('AI Image') }}
                                </span>
                            </a>
                        </li>
                    @endif
                    @if ($setting->feature_ai_article_wizard)
                        <li class="nav-item">
                            <a class="nav-link {{ route('dashboard.user.openai.articlewizard.new') == url()->current() ? 'active' : '' }}"
                                href="{{ route('dashboard.user.openai.articlewizard.new') }}">
                                <span class="nav-link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M11.933,5H5V21H18V13" />
                                        <path d="M14,17H9" />
                                        <path d="M9,13h5V9H9Z" />
                                        <path d="M15,5V3" />
                                        <path d="M18,6l2-2" />
                                        <path d="M19,9h2" />
                                    </svg>
                                </span>
                                <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                    {{ __('AI Article Wizard') }}
                                </span>
                                @if (env('APP_STATUS') == 'Demo')
                                    <span
                                        class="inline-flex items-center px-2 py-1 text-[0.75em] font-medium text-black rounded-md bg-[--lqd-pink]">{{ __('New') }}</span>
                                @endif
                            </a>
                        </li>
                    @endif
                    @if ($setting->feature_ai_pdf)
                        <li class="nav-item">
                            <a class="nav-link {{ route('dashboard.user.openai.generator.workbook', 'ai_pdf') == url()->current() ? 'active' : '' }}"
                                href="{{ route('dashboard.user.openai.generator.workbook', 'ai_pdf') }}">
                                <span class="nav-link-icon">
                                    <svg width="24" height="24" viewBox="0 0 22 22" fill="none"
                                        class="mr-1" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_3251_180)">
                                            <path
                                                d="M12.833 2.75V6.41667C12.833 6.65978 12.9296 6.89294 13.1015 7.06485C13.2734 7.23676 13.5066 7.33333 13.7497 7.33333H17.4163"
                                                stroke="#6F7A8F" stroke-width="1.35" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M4.58301 11V4.58333C4.58301 4.0971 4.77616 3.63079 5.11998 3.28697C5.4638 2.94315 5.93011 2.75 6.41634 2.75H12.833L17.4163 7.33333V11"
                                                stroke="#6F7A8F" stroke-width="1.35" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M4.58301 16.5H5.95801C6.32268 16.5 6.67242 16.3551 6.93028 16.0973C7.18814 15.8394 7.33301 15.4897 7.33301 15.125C7.33301 14.7603 7.18814 14.4106 6.93028 14.1527C6.67242 13.8949 6.32268 13.75 5.95801 13.75H4.58301V19.25"
                                                stroke="#6F7A8F" stroke-width="1.35" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M15.583 16.5H17.4163" stroke="#6F7A8F" stroke-width="1.35"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M18.333 13.75H15.583V19.25" stroke="#6F7A8F" stroke-width="1.35"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M10.083 13.75V19.25H10.9997C11.4859 19.25 11.9522 19.0568 12.296 18.713C12.6399 18.3692 12.833 17.9029 12.833 17.4167V15.5833C12.833 15.0971 12.6399 14.6308 12.296 14.287C11.9522 13.9432 11.4859 13.75 10.9997 13.75H10.083Z"
                                                stroke="#6F7A8F" stroke-width="1.35" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_3251_180">
                                                <rect width="22" height="22" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                    {{ __('AI Chat PDF') }}
                                </span>
                                @if (env('APP_STATUS') == 'Demo')
                                    <span
                                        class="inline-flex items-center px-2 py-1 text-[0.75em] font-medium text-black rounded-md bg-[--lqd-pink]">{{ __('New') }}</span>
                                @endif
                            </a>
                        </li>
                    @endif
                    @if ($setting->feature_ai_vision)
                        <li class="nav-item">
                            <a class="nav-link {{ route('dashboard.user.openai.generator.workbook', 'ai_vision') == url()->current() ? 'active' : '' }}"
                                href="{{ route('dashboard.user.openai.generator.workbook', 'ai_vision') }}">
                                <span class="nav-link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 8v-2a2 2 0 0 1 2 -2h2" />
                                        <path d="M4 16v2a2 2 0 0 0 2 2h2" />
                                        <path d="M16 4h2a2 2 0 0 1 2 2v2" />
                                        <path d="M16 20h2a2 2 0 0 0 2 -2v-2" />
                                        <path d="M7 12c3.333 -4.667 6.667 -4.667 10 0" />
                                        <path d="M7 12c3.333 4.667 6.667 4.667 10 0" />
                                        <path d="M12 12h-.01" />
                                    </svg>
                                </span>

                                <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                    {{ __('AI Vision') }}
                                </span>
                                @if (env('APP_STATUS') == 'Demo')
                                    <span
                                        class="inline-flex items-center px-2 py-1 text-[0.75em] font-medium text-black rounded-md bg-[--lqd-pink]">{{ __('New') }}</span>
                                @endif
                            </a>
                        </li>
                    @endif

                    @if ($setting->feature_ai_rewriter)
                        <li class="nav-item">
                            <a class="nav-link {{ route('dashboard.user.openai.rewriter', 'ai_rewriter') == url()->current() ? 'active' : '' }}"
                                href="{{ route('dashboard.user.openai.rewriter', 'ai_rewriter') }}">
                                <span class="nav-link-icon">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_3749_192)">
                                            <path d="M12.8335 5.5L19.2502 11.9167L15.5835 15.5833" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M5.34256 16.6576C5.58329 16.8984 5.8691 17.0894 6.18367 17.2198C6.49824 17.3501 6.8354 17.4172 7.1759 17.4172C7.51639 17.4172 7.85355 17.3501 8.16812 17.2198C8.48269 17.0894 8.7685 16.8984 9.00923 16.6576L18.7131 6.95378C18.8834 6.78353 19.0185 6.58139 19.1107 6.35891C19.2029 6.13643 19.2503 5.89797 19.2503 5.65715C19.2503 5.41633 19.2029 5.17787 19.1107 4.9554C19.0185 4.73292 18.8834 4.53078 18.7131 4.36053L17.6396 3.28711C17.4694 3.11679 17.2673 2.98168 17.0448 2.8895C16.8223 2.79732 16.5838 2.74988 16.343 2.74988C16.1022 2.74988 15.8637 2.79732 15.6413 2.8895C15.4188 2.98168 15.2166 3.11679 15.0464 3.28711L5.34256 12.9909C5.10176 13.2317 4.91074 13.5175 4.78041 13.8321C4.65009 14.1466 4.58301 14.4838 4.58301 14.8243C4.58301 15.1648 4.65009 15.5019 4.78041 15.8165C4.91074 16.1311 5.10176 16.4169 5.34256 16.6576Z"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M3.6665 18.3333L5.28717 16.7126" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_3749_192">
                                                <rect width="22" height="22" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>


                                </span>
                                <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                    {{ __('AI ReWriter') }}
                                </span>
                                @if (env('APP_STATUS') == 'Demo')
                                    <span
                                        class="inline-flex items-center px-2 py-1 text-[0.75em] font-medium text-black rounded-md bg-[--lqd-pink]">{{ __('New') }}</span>
                                @endif
                            </a>
                        </li>
                    @endif

                    @if ($setting->feature_ai_chat_image)
                        <li class="nav-item">
                            <a class="nav-link {{ route('dashboard.user.openai.generator.workbook', 'ai_chat_image') == url()->current() ? 'active' : '' }}"
                                href="{{ route('dashboard.user.openai.generator.workbook', 'ai_chat_image') }}">
                                <span class="nav-link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M15 8h.01"></path>
                                        <path
                                            d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z">
                                        </path>
                                        <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5"></path>
                                        <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3"></path>
                                    </svg>
                                </span>

                                <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                    {{ __('AI Chat Image') }}
                                </span>
                                @if (env('APP_STATUS') == 'Demo')
                                    <span
                                        class="inline-flex items-center px-2 py-1 text-[0.75em] font-medium text-black rounded-md bg-[--lqd-pink]">{{ __('New') }}</span>
                                @endif
                            </a>
                        </li>
                    @endif
                    @if ($setting->feature_ai_chat)
                        <li class="nav-item">
                            <a class="nav-link {{ route('dashboard.user.openai.chat.list') == url()->current() ? 'active' : '' }}"
                                href="{{ route('dashboard.user.openai.chat.list') }}">
                                <span class="nav-link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1"></path>
                                        <path d="M12 12l0 .01"></path>
                                        <path d="M8 12l0 .01"></path>
                                        <path d="M16 12l0 .01"></path>
                                    </svg>
                                </span>
                                <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                    {{ __('AI Chat') }}
                                </span>
                            </a>
                        </li>
                    @endif
                    @if ($setting->feature_ai_code)
                        <li class="nav-item">
                            <a class="nav-link {{ route('dashboard.user.openai.generator.workbook', 'ai_code_generator') == url()->current() ? 'active' : '' }}"
                                href="{{ route('dashboard.user.openai.generator.workbook', 'ai_code_generator') }}">
                                <span class="nav-link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M8 9l3 3l-3 3"></path>
                                        <path d="M13 15l3 0"></path>
                                        <path
                                            d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                    {{ __('AI Code') }}
                                </span>
                            </a>
                        </li>
                    @endif
                    @if ($setting->feature_ai_youtube ) 
                        <li class="nav-item">
                            <a class="nav-link {{ route('dashboard.user.openai.generator.workbook', 'ai_youtube') == url()->current() ? 'active' : '' }}"
                                href="{{ route('dashboard.user.openai.generator.workbook', 'ai_youtube') }}">
                                <span class="nav-link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" 
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z" />
                                        <path d="M10 9l5 3l-5 3z" />
                                    </svg>
                                </span>
                                <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                    {{ __('AI YouTube') }}
                                </span>
                                @if (env('APP_STATUS') == 'Demo')
                                    <span
                                        class="inline-flex items-center px-2 py-1 text-[0.75em] font-medium text-black rounded-md bg-[--lqd-pink]">{{ __('New') }}</span>
                                @endif
                            </a>
                        </li>
                    @endif

                    @if ($setting->feature_ai_rss ) 
                        <li class="nav-item">
                            <a class="nav-link {{ route('dashboard.user.openai.generator.workbook', 'ai_rss') == url()->current() ? 'active' : '' }}"
                                href="{{ route('dashboard.user.openai.generator.workbook', 'ai_rss') }}">
                                <span class="nav-link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" 
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M5 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M4 4a16 16 0 0 1 16 16" />
                                        <path d="M4 11a9 9 0 0 1 9 9" />
                                    </svg>
                                </span>
                                <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                    {{ __('AI RSS') }}
                                </span>
                                @if (env('APP_STATUS') == 'Demo')
                                    <span
                                        class="inline-flex items-center px-2 py-1 text-[0.75em] font-medium text-black rounded-md bg-[--lqd-pink]">{{ __('New') }}</span>
                                @endif
                            </a>
                        </li>
                    @endif

                    @includeWhen(view()->exists('panel.admin.custom.user.header-menu'),
                        'panel.admin.custom.user.header-menu')

                    @if ($setting->feature_ai_speech_to_text)
                        <li class="nav-item">
                            <a class="nav-link {{ route('dashboard.user.openai.generator', 'ai_speech_to_text') == url()->current() ? 'active' : '' }}"
                                href="{{ route('dashboard.user.openai.generator', 'ai_speech_to_text') }}">
                                <span class="nav-link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M9 2m0 3a3 3 0 0 1 3 -3h0a3 3 0 0 1 3 3v5a3 3 0 0 1 -3 3h0a3 3 0 0 1 -3 -3z">
                                        </path>
                                        <path d="M5 10a7 7 0 0 0 14 0"></path>
                                        <path d="M8 21l8 0"></path>
                                        <path d="M12 17l0 4"></path>
                                    </svg>
                                </span>
                                <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                    {{ __('AI Speech to Text') }}
                                </span>
                            </a>
                        </li>
                    @endif
                    @if ($setting->feature_ai_voiceover)
                        <li class="nav-item">
                            <a class="nav-link {{ route('dashboard.user.openai.generator', 'ai_voiceover') == url()->current() ? 'active' : '' }}"
                                href="{{ route('dashboard.user.openai.generator', 'ai_voiceover') }}">
                                <span class="nav-link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M15 8a5 5 0 0 1 0 8"></path>
                                        <path d="M17.7 5a9 9 0 0 1 0 14"></path>
                                        <path
                                            d="M6 15h-2a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h2l3.5 -4.5a.8 .8 0 0 1 1.5 .5v14a.8 .8 0 0 1 -1.5 .5l-3.5 -4.5">
                                        </path>
                                    </svg>
                                </span>
                                <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                    {{ __('AI Voiceover') }}
                                </span>
                            </a>
                        </li>
                    @endif

                    @if ($setting->feature_affilates)
                        <li class="nav-item">
                            <a class="nav-link {{ activeRoute('dashboard.user.affiliates.index') }}"
                                href="{{ route('dashboard.user.affiliates.index') }}">
                                <span class="nav-link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2">
                                        </path>
                                        <path d="M12 3v3m0 12v3"></path>
                                    </svg>
                                </span>
                                <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                    {{ __('Affiliates') }}
                                </span>
                            </a>
                        </li>
                    @endif

                    <li class="nav-item">
                        <a class="nav-link {{ activeRoute('dashboard.support.list') }}"
                            href="{{ route('dashboard.support.list') }}">
                            <span class="nav-link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                    <path d="M15 15l3.35 3.35"></path>
                                    <path d="M9 15l-3.35 3.35"></path>
                                    <path d="M5.65 5.65l3.35 3.35"></path>
                                    <path d="M18.35 5.65l-3.35 3.35"></path>
                                </svg>
                            </span>
                            <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                {{ __('Support') }}
                            </span>
                        </a>
                    </li>


                    {{-- <li class="nav-item">
                        <a class="nav-link {{activeRoute('dashboard.admin.advertis.index')}}" href="{{route('dashboard.admin.advertis.index')}}" >
						<span class="nav-link-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path> <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path> <path d="M15 15l3.35 3.35"></path> <path d="M9 15l-3.35 3.35"></path> <path d="M5.65 5.65l3.35 3.35"></path> <path d="M18.35 5.65l-3.35 3.35"></path> </svg>
						</span>
                            <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
							{{__('Advertis')}}
						</span>
                        </a>
                    </li> --}}

                    <li>
                        <hr>
                    </li>

                    <li>
                        <div class="transition-all nav-link-label">
                            <span
                                class="inline-block text-[10px] font-medium uppercase tracking-widest px-[0.5em] py-[0.35em] rounded-[3px]">
                                {{ __('Links') }}
                            </span>
                        </div>
                    </li>

                    <li>
                        <a class="nav-link {{ activeRoute('dashboard.user.openai.list.favorites') }}"
                            href="{{ route('dashboard.user.openai.list.favorites') }}">
                            <span
                                class="nav-link-icon inline-flex items-center justify-center w-[24px] h-[24px] shrink-0 rounded-[6px] bg-[#7A8193] text-white text-[10px] font-normal">
                                {{ mb_substr(__('Favorites'), 0, 1) }}
                            </span>
                            <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                {{ __('Favorites') }}
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link {{ activeRoute('dashboard.user.openai.documents.all') }}"
                            href="{{ route('dashboard.user.openai.documents.all') }}">
                            <span
                                class="nav-link-icon inline-flex items-center justify-center w-[24px] h-[24px] shrink-0 rounded-[6px] bg-[#658C8E] text-white text-[10px] font-normal">
                                {{ mb_substr(__('Workbook'), 0, 1) }}
                            </span>
                            <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                {{ __('Workbook') }}
                            </span>
                        </a>
                    </li>

                    @if (Auth::user()->type == 'admin')
                        <!-- Admin sidebar -->
                        <li>
                            <hr>
                        </li>
                        <li>
                            <div class="transition-all nav-link-label">
                                <span
                                    class="inline-block text-[10px] font-medium uppercase tracking-widest px-[0.5em] py-[0.35em] rounded-[3px]">
                                    {{ __('Admin') }}
                                </span>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ activeRoute('dashboard.admin.index') }}"
                                href="{{ route('dashboard.admin.index') }}">
                                <span class="nav-link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M4 4h6v6h-6z"></path>
                                        <path d="M14 4h6v6h-6z"></path>
                                        <path d="M4 14h6v6h-6z"></path>
                                        <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                    </svg>
                                </span>
                                <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                    {{ __('Dashboard') }}
                                </span>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link {{activeRoute('dashboard.admin.marketplace.index')}}" href="{{route('dashboard.admin.marketplace.index')}}" >
								<span class="nav-link-icon">
									 <svg xmlns="http://www.w3.org/2000/svg"   width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
										<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
										<path d="M3 21l18 0"></path>
										<path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4"></path>
										<path d="M5 21l0 -10.15"></path>
										<path d="M19 21l0 -10.15"></path>
										<path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4"></path>
									 </svg>
								</span>
                                <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
									{{__('Merketplace')}}
								</span>
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link {{ activeRoute('dashboard.admin.users.index') }}"
                                href="{{ route('dashboard.admin.users.index') }}">
                                <span class="nav-link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                        <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                                    </svg>
                                </span>
                                <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                    {{ __('User Management') }}
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ activeRoute('dashboard.admin.ads.index') }}"
                                href="{{ route('dashboard.admin.ads.index') }}">
                                <span class="nav-link-icon">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M10.8099 11.2264H15.2032C15.2032 13.6527 13.2363 15.6196 10.8099 15.6196C8.3836 15.6196 6.41669 13.6527 6.41669 11.2264C6.41669 8.8001 8.3836 6.83318 10.8099 6.83318C12.0231 6.83318 13.1213 7.32482 13.9163 8.1199M20.4141 11C20.4141 16.1993 16.1993 20.4141 11 20.4141C5.80074 20.4141 1.58594 16.1993 1.58594 11C1.58594 5.8007 5.80074 1.58594 11 1.58594C16.1993 1.58594 20.4141 5.8007 20.4141 11Z" />
                                    </svg>
                                </span>
                                <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                    {{ __('Google Adsense') }}
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ activeRoute('dashboard.support.list') }}"
                                href="{{ route('dashboard.support.list') }}">
                                <span class="nav-link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                        <path d="M15 15l3.35 3.35"></path>
                                        <path d="M9 15l-3.35 3.35"></path>
                                        <path d="M5.65 5.65l3.35 3.35"></path>
                                        <path d="M18.35 5.65l-3.35 3.35"></path>
                                    </svg>
                                </span>
                                <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                    {{ __('Support Requests') }}
                                </span>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ activeRouteBulk(['dashboard.admin.openai.list', 'dashboard.admin.openai.custom.list', 'dashboard.admin.openai.chat.list', 'dashboard.admin.openai.categories.list']) }}"
                                href="#navbar-help" data-bs-toggle="dropdown" data-bs-auto-close="false"
                                role="button" aria-expanded="false">
                                <span class="nav-link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M13 5h8"></path>
                                        <path d="M13 9h5"></path>
                                        <path d="M13 15h8"></path>
                                        <path d="M13 19h5"></path>
                                        <path
                                            d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                        </path>
                                        <path
                                            d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                    {{ __('Templates') }}
                                </span>
                            </a>
                            <div
                                class="dropdown-menu {{ activeRouteBulkShow(['dashboard.admin.openai.list', 'dashboard.admin.openai.custom.list', 'dashboard.admin.openai.chat.list', 'dashboard.admin.openai.categories.list', 'dashboard.email-templates.list']) }}">
                                <a class="dropdown-item {{ activeRoute('dashboard.admin.openai.list') }}"
                                    href="{{ route('dashboard.admin.openai.list') }}">
                                    {{ __('Built-in Templates') }}
                                </a>
                                <a class="dropdown-item {{ activeRoute('dashboard.admin.openai.custom.list') }}"
                                    href="{{ route('dashboard.admin.openai.custom.list') }}">
                                    {{ __('Custom Templates') }}
                                </a>
                                <a class="dropdown-item {{ activeRoute('dashboard.admin.openai.categories.list') }}"
                                    href="{{ route('dashboard.admin.openai.categories.list') }}">
                                    {{ __('AI Writer Categories') }}
                                </a>
                                <a class="dropdown-item {{ activeRoute('dashboard.admin.openai.chat.category') }}"
                                    href="{{ route('dashboard.admin.openai.chat.category') }}">
                                    {{ __('Chat Categories') }}
                                </a>
                                <a class="dropdown-item {{ activeRoute('dashboard.admin.openai.chat.list') }}"
                                    href="{{ route('dashboard.admin.openai.chat.list') }}">
                                    {{ __('Chat Templates') }}
                                </a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ activeRouteBulk(['dashboard.admin.frontend.settings', 'dashboard.admin.frontend.faq.index', 'dashboard.admin.frontend.tools.index', 'dashboard.admin.frontend.whois.index', 'dashboard.admin.frontend.generatorlist.index', 'dashboard.admin.clients.index', 'dashboard.admin.howitWorks.index', 'dashboard.admin.frontend.sectionsettings']) }}"
                                href="#navbar-help" data-bs-toggle="dropdown" data-bs-auto-close="false"
                                role="button" aria-expanded="false">
                                <span class="nav-link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M3 19l18 0"></path>
                                        <path
                                            d="M5 6m0 1a1 1 0 0 1 1 -1h12a1 1 0 0 1 1 1v8a1 1 0 0 1 -1 1h-12a1 1 0 0 1 -1 -1z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                    {{ __('Frontend') }}
                                </span>
                            </a>
                            <div
                                class="dropdown-menu {{ activeRouteBulkShow(['dashboard.admin.frontend.settings', 'dashboard.admin.frontend.faq.index', 'dashboard.admin.frontend.tools.index', 'dashboard.admin.testimonials.index', 'dashboard.admin.frontend.future.index', 'dashboard.admin.frontend.whois.index', 'dashboard.admin.frontend.generatorlist.index', 'dashboard.admin.clients.index', 'dashboard.admin.howitWorks.index', 'dashboard.admin.frontend.sectionsettings', 'dashboard.admin.frontend.menusettings']) }}">
                                <a class="dropdown-item {{ activeRoute('dashboard.admin.frontend.settings') }}"
                                    href="{{ route('dashboard.admin.frontend.settings') }}">
                                    {{ __('Frontend Settings') }}
                                </a>
                                <a class="dropdown-item {{ activeRoute('dashboard.admin.frontend.sectionsettings') }}"
                                    href="{{ route('dashboard.admin.frontend.sectionsettings') }}">
                                    {{ __('Frontend Section Settings') }}
                                </a>
                                <a class="dropdown-item {{ activeRoute('dashboard.admin.frontend.menusettings') }}"
                                    href="{{ route('dashboard.admin.frontend.menusettings') }}">
                                    {{ __('Menu') }}
                                </a>
                                <a class="dropdown-item {{ activeRoute('dashboard.admin.frontend.faq.index') }}"
                                    href="{{ route('dashboard.admin.frontend.faq.index') }}">
                                    {{ __('F.A.Q') }}
                                </a>
                                <a class="dropdown-item {{ activeRoute('dashboard.admin.frontend.tools.index') }}"
                                    href="{{ route('dashboard.admin.frontend.tools.index') }}">
                                    {{ __('Tools Section') }}
                                </a>
                                <a class="dropdown-item {{ activeRoute('dashboard.admin.frontend.future.index') }}"
                                    href="{{ route('dashboard.admin.frontend.future.index') }}">
                                    {{ __('Features Section') }}
                                </a>
                                <a class="dropdown-item {{ activeRoute('dashboard.admin.testimonials.index') }}"
                                    href="{{ route('dashboard.admin.testimonials.index') }}">
                                    {{ __('Testimonials Section') }}
                                </a>
                                <a class="dropdown-item {{ activeRoute('dashboard.admin.clients.index') }}"
                                    href="{{ route('dashboard.admin.clients.index') }}">
                                    {{ __('Clients Section') }}
                                </a>
                                <a class="dropdown-item {{ activeRoute('dashboard.admin.howitWorks.index') }}"
                                    href="{{ route('dashboard.admin.howitWorks.index') }}">
                                    {{ __('How it Works Section') }}
                                </a>
                                <a class="dropdown-item {{ activeRoute('dashboard.admin.frontend.whois.index') }}"
                                    href="{{ route('dashboard.admin.frontend.whois.index') }}">
                                    {{ __('Who Can Use Section') }}
                                </a>

                                <a class="dropdown-item {{ activeRoute('dashboard.admin.frontend.generatorlist.index') }}"
                                    href="{{ route('dashboard.admin.frontend.generatorlist.index') }}">
                                    {{ __('Generators List Section') }}
                                </a>

                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ activeRouteBulk(['dashboard.admin.finance.plans.index']) }}"
                                href="#navbar-help" data-bs-toggle="dropdown" data-bs-auto-close="false"
                                role="button" aria-expanded="false">
                                <span class="nav-link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12">
                                        </path>
                                        <path d="M20 12v4h-4a2 2 0 0 1 0 -4h4"></path>
                                    </svg>
                                </span>
                                <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                    {{ __('Finance') }}
                                </span>
                            </a>
                            <div
                                class="dropdown-menu {{ activeRouteBulkShow(['dashboard.admin.finance.plans.index', 'dashboard.admin.finance.paymentGateways.index']) }}">
                                <a class="dropdown-item {{ activeRoute('dashboard.admin.finance.plans.index') }}"
                                    href="{{ route('dashboard.admin.finance.plans.index') }}">
                                    {{ __('Membership Plans') }}
                                </a>
                                <a class="dropdown-item {{ activeRoute('dashboard.admin.finance.paymentGateways.index') }}"
                                    href="{{ route('dashboard.admin.finance.paymentGateways.index') }}">
                                    {{ __('Payment Gateways') }}
                                </a>
                                @if ($setting->mobile_payment_active)
                                    <a class="dropdown-item {{ activeRoute('dashboard.admin.finance.mobile.index') }}"
                                        href="{{ route('dashboard.admin.finance.mobile.index') }}">
                                        {{ __('Mobile Payment') }}
                                    </a>
                                @endif

                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ activeRoute('dashboard.page.list') }}"
                                href="{{ route('dashboard.page.list') }}">
                                <span class="nav-link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                        <path
                                            d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z">
                                        </path>
                                        <path d="M9 17h6"></path>
                                        <path d="M9 13h6"></path>
                                    </svg>
                                </span>
                                <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                    {{ __('Pages') }}
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ activeRoute('dashboard.blog.list') }}"
                                href="{{ route('dashboard.blog.list') }}">
                                <span class="nav-link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"></path>
                                        <path d="M13.5 6.5l4 4"></path>
                                    </svg>
                                </span>
                                <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                    {{ __('Blog') }}
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ activeRoute('dashboard.admin.affiliates.index') }}"
                                href="{{ route('dashboard.admin.affiliates.index') }}">
                                <span class="nav-link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M14 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                        <path d="M12 9.765a3 3 0 1 0 0 4.47"></path>
                                        <path
                                            d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                    {{ __('Affiliates') }}
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ activeRoute('dashboard.admin.coupons.index') }}"
                                href="{{ route('dashboard.admin.coupons.index') }}">
                                <span class="nav-link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M15 5l0 2" />
                                        <path d="M15 11l0 2" />
                                        <path d="M15 17l0 2" />
                                        <path
                                            d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2" />
                                    </svg>
                                </span>
                                <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                    {{ __('Coupons') }}
                                </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ activeRoute('dashboard.email-templates.list') }}"
                                href="{{ route('dashboard.email-templates.list') }}">
                                <span class="nav-link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                        <path d="M3 7l9 6l9 -6" />
                                    </svg>
                                </span>
                                <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                    {{ __('Email Templates') }}
                                </span>
                            </a>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ activeRouteBulk(['dashboard.admin.settings.general', 'dashboard.admin.settings.invoice', 'dashboard.admin.settings.payment', 'dashboard.admin.settings.openai', 'dashboard.admin.settings.affiliate']) }}"
                                href="#navbar-help" data-bs-toggle="dropdown" data-bs-auto-close="false"
                                role="button" aria-expanded="false">
                                <span class="nav-link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M4 8h4v4h-4z"></path>
                                        <path d="M6 4l0 4"></path>
                                        <path d="M6 12l0 8"></path>
                                        <path d="M10 14h4v4h-4z"></path>
                                        <path d="M12 4l0 10"></path>
                                        <path d="M12 18l0 2"></path>
                                        <path d="M16 5h4v4h-4z"></path>
                                        <path d="M18 4l0 1"></path>
                                        <path d="M18 9l0 11"></path>
                                    </svg>
                                </span>
                                <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                    {{ __('Settings') }}
                                </span>
                            </a>
                            <div
                                class="dropdown-menu {{ activeRouteBulkShow(['dashboard.admin.settings.general', 'dashboard.admin.settings.invoice', 'dashboard.admin.settings.payment', 'dashboard.admin.settings.openai', 'dashboard.admin.settings.affiliate', 'dashboard.admin.settings.smtp', 'elseyyid.translations.home', 'elseyyid.translations.lang', 'dashboard.admin.settings.gdpr', 'dashboard.admin.settings.privacy', 'dashboard.admin.settings.tts', 'dashboard.admin.settings.storage']) }}">
                                <a class="dropdown-item {{ activeRoute('dashboard.admin.settings.general') }}"
                                    href="{{ route('dashboard.admin.settings.general') }}">
                                    {{ __('General') }}
                                </a>
                                <a class="dropdown-item {{ activeRoute('dashboard.admin.settings.invoice') }}"
                                    href="{{ route('dashboard.admin.settings.invoice') }}">
                                    {{ __('Invoice') }}
                                </a>
                                <!-- <a class="dropdown-item {{ activeRoute('dashboard.admin.settings.payment') }}" href="{{ route('dashboard.admin.settings.payment') }}">
                                    {{ __('Payment Stripe Settings') }}
                                </a> -->
                                <a class="dropdown-item {{ activeRoute('dashboard.admin.settings.openai') }}"
                                    href="{{ route('dashboard.admin.settings.openai') }}">
                                    {{ __('OpenAI') }}
                                </a>
                                <a class="dropdown-item {{ activeRoute('dashboard.admin.settings.stablediffusion') }}"
                                    href="{{ route('dashboard.admin.settings.stablediffusion') }}">
                                    {{ __('StableDiffusion') }}
                                </a>
                                <a class="dropdown-item {{ activeRoute('dashboard.admin.settings.unsplashapi') }}"
                                    href="{{ route('dashboard.admin.settings.unsplashapi') }}">
                                    {{ __('Unsplash API') }}
                                </a>
                                <a class="dropdown-item {{ activeRoute('dashboard.admin.settings.serperapi') }}"
                                    href="{{ route('dashboard.admin.settings.serperapi') }}">
                                    {{ __('Serper API') }}
                                </a>
                                <a class="dropdown-item {{ activeRoute('dashboard.admin.settings.tts') }}"
                                    href="{{ route('dashboard.admin.settings.tts') }}">
                                    {{ __('TTS') }}
                                </a>
                                <a class="dropdown-item {{ activeRoute('dashboard.admin.settings.affiliate') }}"
                                    href="{{ route('dashboard.admin.settings.affiliate') }}">
                                    {{ __('Affiliate') }}
                                </a>
                                <a class="dropdown-item {{ activeRoute('dashboard.admin.settings.smtp') }}"
                                    href="{{ route('dashboard.admin.settings.smtp') }}">
                                    {{ __('SMTP') }}
                                </a>
                                <a class="dropdown-item {{ activeRoute('dashboard.admin.settings.gdpr') }}"
                                    href="{{ route('dashboard.admin.settings.gdpr') }}">
                                    {{ __('GDPR') }}
                                </a>
                                <a class="dropdown-item {{ activeRoute('dashboard.admin.settings.privacy') }}"
                                    href="{{ route('dashboard.admin.settings.privacy') }}">
                                    {{ __('Privacy Policy and Terms') }}
                                </a>
                                <a class="dropdown-item {{ activeRoute('elseyyid.translations.home') }} {{ activeRoute('elseyyid.translations.lang') }}"
                                    href="{{ LaravelLocalization::localizeUrl(route('elseyyid.translations.home')) }}">
                                    {{ __('Languages') }}
                                </a>
                                <a class="dropdown-item {{ activeRoute('dashboard.admin.settings.storage') }}"
                                    href="{{ route('dashboard.admin.settings.storage') }}">
                                    {{ __('Storage') }}
                                </a>
                            </div>
                        </li>

                        @includeWhen(view()->exists('panel.admin.custom.header-menu'),
                            'panel.admin.custom.header-menu')

                        <li class="nav-item">
                            <a class="nav-link !pe-2 {{ activeRoute('dashboard.admin.health.index') }}"
                                href="{{ route('dashboard.admin.health.index') }}">
                                <span class="nav-link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M3 12h4l3 8l4 -16l3 8h4"></path>
                                    </svg>
                                </span>
                                <span class="flex items-center transition-[opacity,transform] nav-link-title grow">
                                    {{ __('Site Health') }}
                                </span>
                            </a>
                        </li>
                        @if (!view()->exists('panel.admin.custom.user.header-menu'))
                            <li class="nav-item">
                                <a class="nav-link {{ activeRoute('dashboard.admin.license.index') }}"
                                    href="{{ route('dashboard.admin.license.index') }}">
                                    <span class="nav-link-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#2C3E50" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M9.615 20h-2.615a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8" />
                                            <path d="M14 19l2 2l4 -4" />
                                            <path d="M9 8h4" />
                                            <path d="M9 12h2" />
                                        </svg>
                                    </span>
                                    <span
                                        class="flex items-center justify-between transition-[opacity,transform] nav-link-title grow">
                                        {{ __('License') }}
                                    </span>
                                </a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link nav-link--update !pe-2 {{ activeRoute('dashboard.admin.update.index') }}"
                                href="{{ route('dashboard.admin.update.index') }}">
                                <span class="nav-link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4"></path>
                                        <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4"></path>
                                    </svg>
                                </span>
                                <span
                                    class="flex items-center justify-between transition-[opacity,transform] nav-link-title grow">
                                    {{ __('Update') }}
                                </span>
                            </a>
                        </li>
                    @endif
                    <li
                        class="nav-item h-[auto] transition-all group-[.navbar-shrinked]/body:opacity-0 group-[.navbar-shrinked]/body:translate-x-3 group-[.navbar-shrinked]/body:h-0 group-[.navbar-shrinked]/body:overflow-hidden">
                        <hr>
                        <div class="mb-2 transition-all nav-link-label">
                            <span
                                class="inline-block text-[10px] font-medium uppercase tracking-widest px-[0.5em] py-[0.35em] rounded-[3px]">
                                {{ __('Credits') }}
                            </span>
                        </div>
                        <div class="px-[1.428rem]">
                            <div class="flex flex-col mb-2">
                                <div class="d-flex align-items-center">
                                    <span class="legend !me-2 rounded-full bg-primary"></span>
                                    <span>{{ __('Word') }}</span>
                                    <span class="ms-2">
                                        @if (Auth::user()->remaining_words == -1)
                                            Unlimited
                                        @else
                                            {{ number_format((int) Auth::user()->remaining_words) }}
                                        @endif
                                    </span>
                                </div>
                                @if ($setting->feature_ai_image)
                                    <div class="d-flex align-items-center">
                                        <span class="legend !me-2 rounded-full bg-[#9E9EFF]"></span>
                                        <span>{{ __('Image') }}</span>
                                        <span class="ms-2">
                                            @if (Auth::user()->remaining_images == -1)
                                                Unlimited
                                            @else
                                                {{ number_format((int) Auth::user()->remaining_images) }}
                                            @endif
                                        </span>
                                    </div>
                                @endif
                            </div>
                            <div class="mb-2 progress progress-separated">
                                @if ((int) Auth::user()->remaining_words + (int) Auth::user()->remaining_images != 0)
                                    <div class="progress-bar grow-0 shrink-0 basis-auto bg-primary" role="progressbar"
                                        style="width: {{ ((int) Auth::user()->remaining_words / ((int) Auth::user()->remaining_words + (int) Auth::user()->remaining_images)) * 100 }}%"
                                        aria-label="{{ __('Text') }}"></div>
                                @endif
                                @if ($setting->feature_ai_image)
                                    @if ((int) Auth::user()->remaining_words + (int) Auth::user()->remaining_images != 0)
                                        <div class="progress-bar grow-0 shrink-0 basis-auto bg-[#9E9EFF]"
                                            role="progressbar"
                                            style="width: {{ ((int) Auth::user()->remaining_images / ((int) Auth::user()->remaining_words + (int) Auth::user()->remaining_images)) * 100 }}%"
                                            aria-label="{{ __('Images') }}"></div>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </li>
                    <li
                        class="w-64 nav-item h-[auto] transition-all group-[.navbar-shrinked]/body:opacity-0 group-[.navbar-shrinked]/body:translate-x-3 group-[.navbar-shrinked]/body:h-0 group-[.navbar-shrinked]/body:overflow-hidden">
                        <hr>
                        @if ($setting->feature_affilates)
                            <div class="transition-all nav-link-label">
                                <span
                                    class="inline-block text-[10px] font-medium uppercase tracking-widest px-[0.5em] py-[0.35em] rounded-[3px]">
                                    {{ __('Affiliation') }}
                                </span>
                            </div>
                            <div class="transition-all nav-link-label">
                                <div
                                    class="inline-block text-center text-[13px] leading-none text-muted border-solid border-[var(--tblr-border-color)] rounded-[var(--tblr-border-radius)] p-[1rem_2rem]">
                                    <p class="not-italic text-[20px] m-0 mb-2">🎁</p>
                                    <span class="hidden group-[.navbar-shrinked]/body:inline">
                                        <. class="not-italic text-[20px] m-0 mb-2"substr(>🎁</, 0, 1)p>
                                    </span>
                                    <p class="mb-[0.75em]">{{ __('Invite your friend and get') }}
                                        {{ $setting->affiliate_commission_percentage }}%
                                        {{ __('on all their purchases.') }}</p>
                                    <p class="m-0">
                                        <a href="{{ route('dashboard.user.affiliates.index') }}"
                                            class="btn btn-sm text-[11px]">{{ __('Invite') }}</a>
                                    </p>
                                </div>
                            </div>
                        @endif
                    </li>
                </ul>

            </div>
        </div>
    </div>
</aside>

@if (view()->exists('panel.admin.custom.layout.panel.header-top-bar'))
@else
    <!-- Navbar -->
    <header class="relative navbar navbar-expand-md navbar-light flex max-lg:h-[65px]">
        <div class="container-xl flex-nowrap !items-stretch">
            <div class="items-center hidden max-lg:flex max-lg:gap-3">
                <button class="navbar-toggler collapsed max-lg:!block" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="hidden max-lg:flex items-center justify-center shrink-0 lg:px-2 max-md:max-w-[120px]"
                    href="{{ LaravelLocalization::localizeUrl(route('dashboard.index')) }}">
                    <img src="/{{ $setting->logo_path }}" alt="MagicAI" class="">
                </a>
            </div>
            <div class="navbar-nav flex-row justify-end max-lg:basis-[65%]">
                <div class="flex gap-[18px] max-lg:gap-2">
                    <div class="flex items-center max-xl:gap-2 max-lg:hidden xl:gap-3">
                        @if (Auth::user()->type == 'admin')
                            <a class="btn" href="{{ route('dashboard.admin.index') }}">
                                <svg class="hidden max-lg:block" xmlns="http://www.w3.org/2000/svg" height="20"
                                    fill="currentColor" viewBox="0 96 960 960" width="20">
                                    <path
                                        d="M690.882 786q25.883 0 44-19Q753 748 753 722.118q0-25.883-18.118-44-18.117-18.118-44-18.118Q665 660 646 678.118q-19 18.117-19 44Q627 748 646 767q19 19 44.882 19ZM689.5 911q33.5 0 60.5-14t46-40q-26-14-51.962-21-25.961-7-54-7-28.038 0-54.538 7-26.5 7-51.5 21 19 26 45.5 40t60 14Zm3 65Q615 976 560 920.5T505 789q0-78.435 54.99-133.718Q614.98 600 693 600q77 0 132.5 55.282Q881 710.565 881 789q0 76-55.5 131.5t-133 55.5ZM480 976q-138-32-229-156.5T160 534V295l320-120 320 120v270q-25-12-52-18.5t-55-6.5q-102.743 0-175.371 72.921Q445 685.843 445 789q0 48 19.5 94t53.5 80q-9 5-19 7.5t-19 5.5Z" />
                                </svg>
                                <span class="max-lg:hidden">{{ __('Admin Panel') }}</span>
                            </a>
                        @endif
                        @if ($settings_two->liquid_license_type == 'Extended License')
                            @if (getSubscriptionStatus())
                                <a class="btn max-xl:hidden"
                                    href="{{ route('dashboard.user.payment.subscription') }}">
                                    {{ getSubscriptionName() }} - {{ getSubscriptionDaysLeft() }}
                                    {{ __('Days Left') }}
                                </a>
                            @else
                                <a class="btn max-xl:hidden"
                                    href="{{ route('dashboard.user.payment.subscription') }}">
                                    {{ __('No Active Subscription') }}
                                </a>
                            @endif

                            <a class="btn btn-primary" href="{{ route('dashboard.user.payment.subscription') }}">
                                <svg class="md:me-2 max-lg:w-[20px] max-lg:h-[20px]" width="11" height="15"
                                    viewBox="0 0 11 15" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.6 0L0 9.375H4.4V15L11 5.625H6.6V0Z" />
                                </svg>
                                <span class="max-lg:hidden">{{ __('Upgrade') }}</span>
                            </a>
                        @endif
                    </div>
                    <div class="flex items-center">
                        <a href="?theme=dark"
                            class="nav-link items-center justify-center px-0 hide-theme-dark hover:!bg-transparent max-lg:w-10 max-lg:h-10 max-lg:p-0 max-lg:border max-lg:border-solid max-lg:border-[--tblr-border-color] max-lg:!rounded-full max-lg:dark:bg-white max-lg:dark:bg-opacity-[0.03]"
                            title="{{ __('Enable dark mode') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                            </svg>
                        </a>
                        <a href="?theme=light"
                            class="nav-link items-center justify-center px-0 hide-theme-light hover:!bg-transparent max-lg:w-10 max-lg:h-10 max-lg:p-0 max-lg:border max-lg:border-solid max-lg:border-[--tblr-border-color] max-lg:!rounded-full max-lg:dark:bg-white max-lg:dark:bg-opacity-[0.03]"
                            title="{{ __('Enable light mode') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                <path
                                    d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                            </svg>
                        </a>
                    </div>
                    @if (count(explode(',', $settings_two->languages)) > 1)
                        <div class="nav-item dropdown">
                            <a href="#"
                                class="nav-link px-0 hover:!bg-transparent max-lg:w-10 max-lg:h-10 max-lg:p-0 max-lg:border max-lg:border-solid max-lg:border-[--tblr-border-color] max-lg:!rounded-full max-lg:dark:bg-white max-lg:dark:bg-opacity-[0.03]"
                                data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                    <path d="M3.6 9h16.8"></path>
                                    <path d="M3.6 15h16.8"></path>
                                    <path d="M11.5 3a17 17 0 0 0 0 18"></path>
                                    <path d="M12.5 3a17 17 0 0 1 0 18"></path>
                                </svg>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="flex flex-col">
                                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        @if (in_array($localeCode, explode(',', $settings_two->languages)))
                                            <a rel="alternate" hreflang="{{ $localeCode }}"
                                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                                class="flex items-center px-3 py-2 border-solid border-[--tblr-border-color] border-t-0 border-r-0 border-l-0 last:border-b-0 text-heading transition-colors hover:no-underline hover:bg-[--tblr-border-color]">
                                                <span
                                                    class="text-[21px] !me-2">{{ country2flag(substr($properties['regional'], strrpos($properties['regional'], '_') + 1)) }}
                                                </span>{{ $properties['native'] }}
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="items-center hidden max-lg:flex">
                        <a href="{{ route('dashboard.user.payment.subscription') }}"
                            class="inline-flex items-center justify-center text-current w-10 h-10 p-0 border border-solid !border-[--tblr-border-color] !rounded-full dark:bg-white dark:bg-opacity-[0.03]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M13 3l0 7l6 0l-8 11l0 -7l-6 0l8 -11"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="p-0 nav-link d-flex lh-1 text-reset" data-bs-toggle="dropdown"
                            aria-label="Open user menu">
                            <span class="avatar avatar-sm max-lg:w-10 max-lg:h-10"
                                style="background-image: url(@if (!Auth::user()->github_token && !Auth::user()->google_token && !Auth::user()->facebook_token)/@endif{{ Auth::user()->avatar }})"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="dropdown-item disabled">
                                <div>
                                    <div>{{ Auth::user()->fullName() }}</div>
                                    <div class="mt-1 small text-muted">{{ Auth::user()->email }}</div>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown-item disabled">
                                <li class="nav-item">
                                    <div class="mb-3 progress progress-separated">
                                        @if ((int) Auth::user()->remaining_words + (int) Auth::user()->remaining_images != 0)
                                            <div class="progress-bar grow-0 shrink-0 basis-auto bg-primary"
                                                role="progressbar"
                                                style="width: {{ ((int) Auth::user()->remaining_words / ((int) Auth::user()->remaining_words + (int) Auth::user()->remaining_images)) * 100 }}%"
                                                aria-label="Text"></div>
                                        @endif
                                        @if ((int) Auth::user()->remaining_words + (int) Auth::user()->remaining_images != 0)
                                            <div class="progress-bar grow-0 shrink-0 basis-auto bg-[#9E9EFF]"
                                                role="progressbar"
                                                style="width: {{ ((int) Auth::user()->remaining_images / ((int) Auth::user()->remaining_words + (int) Auth::user()->remaining_images)) * 100 }}%"
                                                aria-label="Images"></div>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-auto d-flex align-items-center">
                                            <span class="legend !me-2 rounded-full bg-primary"></span>
                                            <span>{{ __('Word Credits') }}</span>
                                            <span
                                                class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">{{ (int) Auth::user()->remaining_words != -1 ? number_format((int) Auth::user()->remaining_words) : __('Unlimited') }}</span>
                                        </div>
                                        <div class="col-auto d-flex align-items-center">
                                            <span class="legend !me-2 rounded-full bg-[#9E9EFF]"></span>
                                            <span>{{ __('Image Credits') }}</span>
                                            <span
                                                class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">{{ (int) Auth::user()->remaining_images != -1 ? number_format((int) Auth::user()->remaining_images) : __('Unlimited') }}</span>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item {{ activeRoute('dashboard.user.payment.subscription') }}"
                                href="{{ route('dashboard.user.payment.subscription') }}">
                                {{ __('Plan') }}
                            </a>
                            <a class="dropdown-item {{ activeRoute('dashboard.user.orders.index') }}"
                                href="{{ route('dashboard.user.orders.index') }}">
                                {{ __('Orders') }}
                            </a>
                            <a class="dropdown-item {{ activeRouteBulk(['dashboard.user.settings.index']) }}"
                                href="{{ route('dashboard.user.settings.index') }}">
                                {{ __('Settings') }}
                            </a>
                            <form id="logout" method="POST" action="{{ route('logout') }}">
                                @csrf
                            </form>
                            <a href="javascript:;" onclick="document.getElementById('logout').submit();"
                                class="dropdown-item">{{ __('Logout') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="flex items-center lg:-order-1 max-lg:w-full max-lg:fixed max-lg:bottom-16 max-lg:left-0 max-lg:z-50">
                <form
                    class="navbar-search group !me-2 max-lg:hidden max-lg:[&.show]:flex max-lg:[&.collapsing]:flex max-lg:m-0 max-lg:w-full max-lg:!me-0"
                    id="navbar-search" autocomplete="off" novalidate>
                    <div class="w-full input-icon max-lg:p-3 max-lg:bg-[#fff] max-lg:dark:bg-zinc-800">
                        <span class="input-icon-addon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                <path d="M21 21l-6 -6" />
                            </svg>
                        </span>
                        <input type="search"
                            class="form-control navbar-search-input peer max-lg:!rounded-md dark:!bg-zinc-900"
                            id="top_search_word" onkeydown="return event.key != 'Enter';"
                            placeholder="{{ __('Search for templates and documents...') }}"
                            aria-label="Search in website">
                        <kbd
                            class="inline-block absolute top-1/2 !end-[12px] -translate-y-1/2 bg-[var(--tblr-bg-surface)] transition-all pointer-events-none peer-focus:opacity-0 peer-focus:invisible peer-focus:scale-70 group-[.is-searching]:opacity-0 group-[.is-searching]:invisible max-lg:hidden opacity-0"><span
                                id="search-shortcut-key"></span> + K</kbd>
                        <span class="absolute top-1/2 -translate-y-1/2 !end-[20px]">
                            <span
                                class="spinner-border spinner-border-sm text-muted hidden group-[.is-searching]:block"
                                role="status"></span>
                        </span>
                        <span
                            class="absolute !end-3 top-1/2 -translate-y-1/2 -translate-x-2 transition-all opacity-0 pointer-events-none peer-focus:!opacity-100 peer-focus:translate-x-0  group-[.is-searching]:hidden group-[.done-searching]:hidden rtl:-scale-x-100">
                            <svg xmlns="http://www.w3.org/2000/svg" height="25" viewBox="0 96 960 960"
                                width="25" fill="currentColor">
                                <path d="m375 816-43-43 198-198-198-198 43-43 241 241-241 241Z" />
                            </svg>
                        </span>
                        <div class="navbar-search-results absolute top-[calc(100%+17px)] !start-0 bg-[#fff] shadow-[0_10px_70px_rgba(0,0,0,0.1)] rounded-md w-[100%] max-h-[380px] overflow-y-auto hidden group-[.done-searching]:block dark:!bg-[--tblr-bg-surface] max-lg:top-auto max-lg:bottom-full max-lg:start-0 max-lg:end-0 max-lg:w-auto"
                            id="search_results" style="z-index: 999;">
                            <!-- Search results here -->
                            <h3
                                class="m-0 py-[0.75rem] px-3 border-solid border-b border-t-0 border-r-0 border-l-0 border-[--tblr-border-color] text-[1rem] font-medium">
                                {{ __('Search results') }}</h3>
                            <div class="search-results-container"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </header>
@endif

<!-- Mobile bottom menu -->
<nav
    class="bottom-menu hidden flex-wrap h-16 fixed inset-x-0 bottom-0 z-50 bg-[rgba(var(--tblr-body-bg-rgb), 0.1)] backdrop-blur-md backdrop-saturate-150 border-solid border-t border-r-0 border-b-0 border-l-0 border-[--tblr-border-color] text-[13px] font-medium max-lg:flex">
    <ul class="grid w-full grid-cols-4 p-0 m-0 list-none place-items-center">
        <li class="w-full">
            <a class="flex flex-col items-center text-inherit" href="{{ route('dashboard.user.settings.index') }}">
                <svg class="h-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                    <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                    <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                </svg>
            </a>
        </li>
        <li class="w-full">
            <a class="flex flex-col items-center text-inherit"
                href="{{ route('dashboard.user.openai.documents.all') }}">
                <svg class="h-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"></path>
                    <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path>
                    <path d="M9 12h6"></path>
                    <path d="M9 16h6"></path>
                </svg>
            </a>
        </li>
        <li class="w-full">
            <button
                class="flex flex-col items-center w-full h-auto p-0 bg-transparent border-none collapsed text-inherit group"
                type="button" data-bs-toggle="collapse" data-bs-target="#navbar-search"
                aria-controls="navbar-search" aria-expanded="false" aria-label="Toggle navigation">
                <svg class="h-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                    <path d="M21 21l-6 -6"></path>
                </svg>
            </button>
        </li>
        <li class="w-full">
            <button
                class="flex flex-col items-center w-full h-auto p-0 translate-x-0 bg-transparent border-none rounded-full outline-none collapsed bg-none text-inherit group transform-gpu"
                type="button" data-bs-toggle="collapse" data-bs-target="#navbar-templates"
                aria-controls="navbar-templates" aria-expanded="false" aria-label="Toggle templates">
                <span style="background: linear-gradient(to right, #8d65e9, #5391e4, #6bcd94);"
                    class="inline-flex items-center justify-center w-[30px] h-[30px] mb-1 relative rounded-full overflow-hidden before:w-full before:h-full before:absolute before:top-0 before:left-0 before:rounded-full before:bg-gradient-to-r before:from-[#8d65e9] before:via-[#5391e4] before:to-[#6bcd94] before:animate-spin-grow">
                    <svg class="relative rotate-[135deg] group-[.collapsed]:rotate-0 transition-transform duration-300"
                        xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M12 5l0 14"></path>
                        <path d="M5 12l14 0"></path>
                    </svg>
                </span>
            </button>
        </li>
    </ul>
</nav>
<div class="collapse fixed right-0 bottom-16 z-50 w-full max-h-[calc(85vh-4rem)] overflow-y-auto rounded-t-2xl shadow-[-5px_-10px_30px_rgba(0,0,0,0.07)] group bg-[#fff] overscroll-contain lg:!hidden dark:bg-zinc-800"
    id="navbar-templates">
    <ul class="p-0 m-0 h-full relative list-none text-[13px] text-heading font-medium">
        @foreach ($aiWriters as $aiWriter)
            <li class="relative group">
                <a class="flex items-center gap-2 p-3 py-2 border-solid border-b border-r-0 border-t-0 border-l-0 border-[--tblr-border-color] text-inherit"
                    @if ($aiWriter->type == 'text') href="{{ LaravelLocalization::localizeUrl(route('dashboard.user.openai.generator.workbook', $aiWriter->slug)) }}"
                @elseif($aiWriter->type == 'image')
                   href="{{ LaravelLocalization::localizeUrl(route('dashboard.user.openai.generator', $aiWriter->slug)) }}"
                @elseif($aiWriter->type == 'audio')
                   href="{{ LaravelLocalization::localizeUrl(route('dashboard.user.openai.generator', $aiWriter->slug)) }}"
                @elseif($aiWriter->type == 'code')
                   href="{{ LaravelLocalization::localizeUrl(route('dashboard.user.openai.generator.workbook', $aiWriter->slug)) }}" @endif>
                    <span class="avatar w-9 h-9 [&_svg]:w-[20px] [&_svg]:h-[20px] relative transition-all duration-300"
                        style="background: {{ $aiWriter->color }}">
                        <span class="inline-block transition-all duration-300">
                            {!! html_entity_decode($aiWriter->image) !!}
                        </span>
                    </span>
                    {{ $aiWriter->title }}
                </a>
            </li>
        @endforeach
    </ul>
</div>

<!-- Desktop floating add button -->
<div class="fixed z-50 hidden bottom-20 end-12 group lg:block">
    <button
        class="bg-transparent border-none !outline-none rounded-full w-14 h-14 p-0 overflow-hidden !shadow-lg collapsed translate-x-0 transform-gpu peer"
        type="button">
        <span
            class="relative inline-flex items-center justify-center w-full h-full mb-1 overflow-hidden rounded-full before:w-full before:h-full before:absolute before:top-0 before:left-0 before:rounded-full spinner_button before:animate-spin-grow">
            <svg class="relative group-hover:rotate-[135deg] transition-transform duration-300"
                xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24"
                stroke-width="3" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 5l0 14"></path>
                <path d="M5 12l14 0"></path>
            </svg>
        </span>
    </button>
    <div id="add-new-floating"
        class="
		min-w-[145px] absolute bottom-full !mb-4 end-0 !opacity-0 !invisible translate-y-2 transition-all bg-[--tblr-body-bg] shadow-[0_3px_12px_rgba(0,0,0,0.08)] rounded-md text-heading font-medium text-sm
		before:h-4 before:absolute before:inset-x-0 before:-bottom-4
		group-hover:!opacity-100 group-hover:!visible group-hover:translate-y-0
	  dark:bg-zinc-800">
        <span
            class="block !px-4 !py-2 border-solid border-b border-t-0 border-r-0 border-l-0 !border-black !border-opacity-5 text-heading text-opacity-50 last:border-0 dark:!border-white dark:!border-opacity-5">{{ __('Items:') }}</span>
        <ul class="p-0 m-0 list-none">
            @if ($setting->feature_ai_writer)
                <li
                    class="border-solid border-b border-t-0 border-r-0 border-l-0 !border-black !border-opacity-5 last:border-0 dark:!border-white dark:!border-opacity-5">
                    <a class="block !px-4 !py-2 relative text-inherit hover:no-underline before:absolute before:inset-0 before:text-current before:bg-current before:opacity-0 before:transition-opacity hover:before:opacity-5 [&.active]:before:opacity-5 {{ activeRoute('dashboard.user.openai.list') }}"
                        href="{{ route('dashboard.user.openai.list') }}">{{ __('Document') }}</a>
                </li>
            @endif
            @if ($setting->feature_ai_image)
                <li
                    class="border-solid border-b border-t-0 border-r-0 border-l-0 !border-black !border-opacity-5 last:border-0 dark:!border-white dark:!border-opacity-5">
                    <a class="block !px-4 !py-2 relative text-inherit hover:no-underline before:absolute before:inset-0 before:text-current before:bg-current before:opacity-0 before:transition-opacity hover:before:opacity-5 [&.active]:before:opacity-5 {{ route('dashboard.user.openai.generator', 'ai_image_generator') == url()->current() ? 'active' : '' }}"
                        href="{{ route('dashboard.user.openai.generator', 'ai_image_generator') }}">{{ __('Image') }}</a>
                </li>
            @endif
            @if ($setting->feature_ai_chat)
                <li
                    class="border-solid border-b border-t-0 border-r-0 border-l-0 !border-black !border-opacity-5 last:border-0 dark:!border-white dark:!border-opacity-5">
                    <a class="block !px-4 !py-2 relative text-inherit hover:no-underline before:absolute before:inset-0 before:text-current before:bg-current before:opacity-0 before:transition-opacity hover:before:opacity-5 [&.active]:before:opacity-5 {{ route('dashboard.user.openai.chat.list') == url()->current() ? 'active' : '' }}"
                        href="{{ route('dashboard.user.openai.chat.list') }}">{{ __('Chat') }}</a>
                </li>
            @endif
            @if ($setting->feature_ai_code)
                <li
                    class="border-solid border-b border-t-0 border-r-0 border-l-0 !border-black !border-opacity-5 last:border-0 dark:!border-white dark:!border-opacity-5">
                    <a class="block !px-4 !py-2 relative text-inherit hover:no-underline before:absolute before:inset-0 before:text-current before:bg-current before:opacity-0 before:transition-opacity hover:before:opacity-5 [&.active]:before:opacity-5 {{ route('dashboard.user.openai.generator.workbook', 'ai_code_generator') == url()->current() ? 'active' : '' }}"
                        href="{{ route('dashboard.user.openai.generator.workbook', 'ai_code_generator') }}">{{ __('Code') }}</a>
                </li>
            @endif
            @if ($setting->feature_ai_speech_to_text)
                <li
                    class="border-solid border-b border-t-0 border-r-0 border-l-0 !border-black !border-opacity-5 last:border-0 dark:!border-white dark:!border-opacity-5">
                    <a class="block !px-4 !py-2 relative text-inherit hover:no-underline before:absolute before:inset-0 before:text-current before:bg-current before:opacity-0 before:transition-opacity hover:before:opacity-5 [&.active]:before:opacity-5 {{ route('dashboard.user.openai.generator', 'ai_speech_to_text') == url()->current() ? 'active' : '' }}"
                        href="{{ route('dashboard.user.openai.generator', 'ai_speech_to_text') }}">{{ __('Transcribe') }}</a>
                </li>
            @endif
        </ul>
    </div>
</div>

{{-- <script>
	leadUpdateBtn = document.querySelector('.lead-update-license-btn');
	leadUpdateBtn.addEventListener('click', (e) => {
		e.stopPropagation();
		leadUpdateBtn.parentElement.classList.remove("hidden");
	})

	document.addEventListener('click', () => {
		leadUpdateBtn.parentElement.classList.add('hidden');
	})
</script> --}}
