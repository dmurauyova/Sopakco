<!-- Two Column Copy -->
@if ($data)
    @php
        $two_column_title = $data['title'];
        $two_column_copy = $data['copy'];
    @endphp
    @if ($two_column_title || $two_column_copy)
        <div class="bg-{{ $two_column_background }} z-20 relative">
            <div class="container-sm flex py-[40px] lg:py-[150px] flex-wrap">
                <div class="w-full lg:w-1/2 mb-8 lg:mb-0">
                    <h1 class="text-2xl lg:text-3xl xl:text-4xl text-white uppercase lg:pr-[4rem]">
                        {{ $two_column_title }}
                    </h1>
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="text-white">{!! $two_column_copy !!}</div>
                </div>
            </div>
        </div>
    @endif
@endif
