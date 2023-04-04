<nav class="banner absolute w-full bg-white z-40 top-0" id="navigation">
    <div class="container flex justify-between items-center">
        <a class="brand lg:h-[100px] max-h-[100px] w-2/4 lg:w-auto" href="{{ home_url('/') }}">
            <img src="@asset('images/Logo_Color.svg')" class="h-auto lg:h-full block lg:max-w-none max-h-[100px]" width="268"
                height="100" alt="Sopakco. Life-Ready Foods">
        </a>
        @if (has_nav_menu('primary_navigation'))
            <div class="flex items-center">
                <!-- Mobile menu button -->
                <div class="lg:hidden">
                    <button type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-sopakcoDarkBlue focus:outline-none transition duration-150 ease-in-out"
                        aria-label="Main menu" aria-expanded="false" id="main-menu-button">
                        <span class="sr-only">Open main menu</span>
                        <!-- Burger icon -->
                        <svg class="block h-6 w-6" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none"
                            stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                            aria-hidden="true">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <!-- X icon -->
                        <svg class="hidden h-6 w-6" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round" aria-hidden="true">
                            <path d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div id="desktop-menu" class="nav-primary hidden lg:block"
                    aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
                    {!! wp_nav_menu([
                        'theme_location' => 'primary_navigation',
                        'menu_class' => 'nav flex xl:gap-x-6 lg:gap-x-4 items-center',
                        'echo' => false,
                    ]) !!}
                </div>
            </div>
        @endif
    </div>
    <div id="mobile-menu-wrapper" class="indent-0 w-full h-screen absolute z-40 invisible">
        @if (has_nav_menu('primary_navigation'))
            <div id="mobile-menu"
                class="max-h-0 lg:hidden ease-out duration-300 absolute w-full z-40 bg-white overflow-hidden">
                {!! wp_nav_menu([
                    'theme_location' => 'primary_navigation',
                    'menu_class' => 'lg:px-2 lg:pt-2 lg:pb-3  flex flex-col lg:flex-row',
                    'echo' => false,
                ]) !!}
            </div>
        @endif
        <div id="mobile-menu-overlay" class="bg-gray-800 duration-75 ease-out opacity-0 w-full h-full"></div>
    </div>
</nav>
