<footer class="content-info">
    <div class="bg-sopakcoDarkBlue text-white">
        <div class="container mx-auto">
            <div>
                <a class="brand h-[100px] block flex justify-center" href="{{ home_url('/') }}">
                    <img src="@asset('images/Logo_Color.svg')" class="h-full block max-w-none" width="268" height="100"
                        alt="Sopakco. Life-Ready Foods">
                </a>
            </div>
            @if (has_nav_menu('footer_navigation'))
                <nav class="nav-primary pb-6" aria-label="{{ wp_get_nav_menu_name('footer_navigation') }}">
                    {!! wp_nav_menu([
                        'theme_location' => 'footer_navigation',
                        'menu_class' => 'nav flex gap-x-5 justify-center flex-wrap',
                        'echo' => false,
                    ]) !!}
                </nav>
            @endif
        </div>
    </div>
    <div class="flex justify-between py-6 container mx-auto flex-wrap">
        <div><?php echo date('Y'); ?> SOPAKCO Packaging</div>
        @if (has_nav_menu('legal_navigation'))
            {!! wp_nav_menu(['theme_location' => 'legal_navigation', 'menu_class' => 'nav flex gap-x-3', 'echo' => false]) !!}
        @endif
    </div>
</footer>
