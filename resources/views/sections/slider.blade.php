<!-- Slider -->
@php
    $home_page = $home_page ?? '';
@endphp

@if ($slider_data)
    <div
        class="swiper w-full @if ($home_page) homepage-slider h-screen @else h-[70vh] page-slider @endif   lg:h-auto z-20">
        <div class="swiper-wrapper relative @if ($home_page) h-screen @else h-[70vh] @endif lg:h-full">
            <!-- Slides -->
            @foreach ($slider_data as $slide)
                <div class="swiper-slide overflow-x-hidden">
                    <div
                        class="slide-content overflow-hidden absolute bg-sopakcoDarkBlue @if ($home_page) h-screen @else h-full @endif lg:h-full w-full lg:w-[55%] 3xl:w-3/5 z-20">
                    </div>
                    <div
                        class="container overlow-hidden text-white z-20 @if ($home_page) h-[53vh] @else h-1/2 @endif lg:h-full lg:absolute inset-x-0 flex align-center justify-center flex-col slide-content-inner">
                        <div
                            class="lg:h-full w-full lg:w-1/2 3xl:w-[2/3] z-30 text-center lg:text-left  flex  flex-col items-center lg:items-start  @if (isset($hide_lines) && !$hide_lines) flex-col justify-between @else justify-center @endif">
                            @if (isset($hide_lines) && !$hide_lines)
                                <img src="@asset('images/t.webp')" class="-ml-[35%] w-[90%] invisible lg:visible" alt="Top line"
                                    width="594" height="201" alt="" aria-hidden="true">
                            @endif
                            <div>
                                <div class="text-2xl md:text-3xl xl:text-4xl 3xl:text-5xl uppercase">
                                    {!! $slide['title'] !!}
                                </div>
                                @if ($slide['subtitle'])
                                    <div class="mt-4 mb-1 lg:mt-4 lg:mb-4 text-lg lg:text-2xl">{!! $slide['subtitle'] !!}
                                    </div>
                                @endif
                                @if ($slide['link'])
                                    @php
                                        $link_url = $slide['link']['url'];
                                        $link_title = $slide['link']['title'];
                                        $link_target = $slide['link']['target'] ? $link['target'] : '_self';
                                    @endphp
                                    <a href="{{ $link_url }}" target="{{ $link_target }}"
                                        class="btn mt-4 lg:mt-4">{{ $link_title }}</a>
                                @endif
                            </div>
                            @if (isset($hide_lines) && !$hide_lines)
                                <img src="@asset('images/b.webp')" class="-ml-[10%] w-[90%] invisible lg:visible"
                                    alt="Top line" width="594" height="201" alt="" aria-hidden="true">
                            @endif
                        </div>
                    </div>
                    <div
                        class="slide-image w-full @if ($home_page) h-[55vh] @else h-1/2 @endif lg:h-auto lg:max-h-[713px] absolute lg:relative bottom-0 lg:bottom-none z-10 flex">
                        <img class="max-w-none lg:max-w-full max-h-full lg:max-h-auto float-right  min-w-full object-[85%_100%] object-cover hidden lg:block"
                            src="{{ $slide['image'] }}" width="1704" height="634" alt="{{ $slide['title'] }}">
                        <img class="max-w-none lg:max-w-full max-h-full lg:max-h-auto float-right  min-w-full object-center object-cover lg:hidden"
                            src="{{ $slide['mobile_image'] }}" width="412" height="915"
                            alt="{{ $slide['title'] }}">
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Pagination -->
        <div class="swiper-pagination bottom-0 text-right pr-[10%]"></div>

        <!-- Navigation buttons -->
        <div class="swiper-button-prev text-white"></div>
        <div class="swiper-button-next text-white"></div>

    </div>
@endif
