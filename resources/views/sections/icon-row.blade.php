<!-- Icon Row -->
@if ($data)
    @php
        $food_processes_title = $data['title'];
        $processes = $data['processes'];
        $icon_row_link = $data['button'];

        $icon_row_link_url = $icon_row_link['url'];
        $icon_row_link_title = $icon_row_link['title'];
        $icon_row_link_target = $icon_row_link['target'] ? $icon_row_link['target'] : '_self';
    @endphp
    <div class="lg:!bg-fixed !bg-center !bg-cover py-[100px]"
        style="background: linear-gradient(0deg, rgba(25, 44, 103, 0.5), rgba(25, 44, 103, 0.5)), url('@asset('images/Galaxy_Background.webp')');">
        <div class="container-sm">
            <h2 class="title xlg:text-5xl text-white text-center mx-5">{{ $food_processes_title }}</h2>
            <div
                class="icons flex flex-wrap lg:flex-nowrap w-[80%] lg:w-full mt-[20%] lg:mt-[5%] mb-[10%] lg:mb-[2%] mx-auto justify-between">

                @foreach ($processes as $process)
                    <div class="group process flex flex-col lg:justify-between lg:align-center lg:py-[5%] lg:mx-[5%] even:pt-[45%] lg:even:pt-[5%] w-[45%] h-[45%]"
                        data-aos-once="true" data-aos-delay="50"
                        @if ($loop->index % 2 === 0) data-aos="fade-up" @else data-aos="fade-down" @endif>
                        <a href="{{ $process['link'] }}"
                            class="icon-wrapper w-full pt-[100%] rotate-45 relative border-2 border-white group-hover:bg-sopakcoBlue transition-all">
                            <div
                                class="icon w-full d-flex flex-col absolute top-1/2 left-1/2 -rotate-45 -translate-x-[50%] -translate-y-[50%]">
                                <img src="{{ $process['icon'] }}" alt="{{ $process['name'] }}" width="164" height="164">
                            </div>
                        </a>
                        <a class="pt-[30%]" href="{{ $process['link'] }}">
                            <h3 class="text-center uppercase group-hover:underline text-white">{{ $process['name'] }}
                            </h3>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="flex justify-center">
            <a class="btn" href="{{ $icon_row_link_url }}"
                target="{{ $icon_row_link_target }}">{{ $icon_row_link_title }}
            </a>
        </div>
    </div>
@endif

<style>
    @media (max-width: 1024px) {
        .process:nth-child(3) {
            margin-top: -22%;
        }

        .process:nth-child(4) {
            padding-top: 22%;
        }
    }
</style>
