<!--Timeline -->
@if ($data)
    <div class="{{ $background }} myb-[60px] relative z-30">
        <div class="container-sm pt-[100px] py-[60px] !pl-0 lg:!pl-7 ]">
            <div class="timeline__container">

                <div class="timeline_content relative">
                    <div
                        class="timeline_border-container absolute w-full h-[59%] sm:h-[62%] md:h-[65%] lg:h-[70%] top-0">
                        <div class="timeline_border duration-700 transition-[height] w-[4px] top-[20px] lg:top-[35px] left-[28px] lg:left-[58px]  absolute h-0 mx-auto z-10 ease-in-out"
                            style="background-color: rgb(var(--{{ $line_color }}));">
                        </div>
                    </div>
                    <ul class="list-none">
                    @foreach ($data as $time)
                        <li class="text-white list-none relative mb-[50px] z-50 flex last:mb-0">
                            <div class="lg:min-w-[120px] min-w-[60px] lg:max-w-[120px] max-w-[60px] lg:h-[120px] h-[60px]"
                                data-aos="fade-up">
                                <img src="{{ $time['image'] }}" alt="{{ strip_tags($time['title']) }}" width="120" height="120">
                            </div>
                            <div class="timeline_copy relative pl-5 lg:pt-[35px] pt-[5px] z-50 " data-aos="fade-up"
                                style="flex-grow: 1;">
                                @if ($time['title'])
                                    <div class="title pb-4 lg:pb-6 text-{{ $title_color }}">{!! $time['title'] !!}
                                    </div>
                                @endif
                                @if ($time['copy'])
                                    <div class="text-{{ $copy_color }} pb-4 lg:pb-8">
                                        {!! $time['copy'] !!}
                                    </div>
                                @endif
                                @if ($time['button'])
                                    @php
                                        $time_button_url = $time['button']['url'];
                                        $time_button_title = $time['button']['title'];
                                        $time_button_target = $time['button']['target'] ? $time['button']['target'] : '_self';
                                    @endphp
                                    <div class="flex">
                                        <a class="btn" href="{{ $time_button_url }}"
                                            target="{{ $time_button_target }}">{{ $time_button_title }}
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </li>
                    @endforeach
                  </ul>
                </div>

            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const _timeline = document.querySelector('.timeline_border-container .timeline_border');
            const timelineContainer = document.querySelector('.timeline_border-container');

            const thresholdArray = steps => Array(steps + 1)
                .fill(0)
                .map((_, index) => index / steps || 0)

            const ratioToPercent = (ratio) => {
                return Math.round(ratio * 100);
            }

            const updatedLineHeight = (entries) => {
                entries.forEach(entry => {
                    if (entry.boundingClientRect.y > 0)
                        _timeline.style.height = ratioToPercent(entry.intersectionRatio) + "%";
                    else
                        _timeline.style.height = "100%";
                })
            }

            try {
                const observer = new IntersectionObserver((updatedLineHeight), {
                    threshold: thresholdArray(50)
                })

                observer.observe(timelineContainer);
            } catch (e) {
                console.log("Does not support interactionObserver");
            }
        })
    </script>

    <style>
        li:before {
            clip-path: polygon(100.00% 50.00%, 50.00% 100.00%, 0.00% 50.00%, 50.00% 0.00%);
        }
    </style>
@endif
