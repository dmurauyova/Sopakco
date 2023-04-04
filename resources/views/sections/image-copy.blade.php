<!-- Image With Copy -->
@php
    $image_smaller = $image_smaller ?? false;
@endphp

@if ($data)
    @php
        $image = $data['image'];
        if ($image) {
            $image_asset = $image['image_asset'];
            $image_position = $image['image_position'];
        }
        
        $copy = $data['copy'];
        if ($copy) {
            $copy_title = $copy['title'];
            $copy_copy = $copy['copy'];
            $copy_link = $copy['link'];
        }
        if ($copy_link) {
            $copy_link_style = $copy['link_style'];
            $copy_link_url = $copy_link['url'];
            $copy_link_title = $copy_link['title'];
            $copy_link_target = $copy_link['target'] ? $copy_link['target'] : '_self';
        }
    @endphp
    <div class="container-sm flex flex-wrap lg:justify-around py-[40px] lg:py-[100px]">
        @if ($image_position == 'left')
            <div class="image w-full lg:w-1/2  py-10 mx-auto lg:max-w-[500px] max-w-[600px] order-2 @if ($image_smaller) pr-[40px] @else px-6 lg:px-10 @endif"
                data-aos="fade-left" data-aos-once="true">
                <img src="{{ $image_asset }}" alt="{{ $copy_title }}" width="420" height="420">
            </div>
        @endif

        <div class="copy w-full lg:w-1/2 flex flex-col justify-center align-center order-last  @if ($image_position == 'right') lg:order-1 @endif"
            @if ($image_position == 'left') data-aos="fade-right" @else data-aos="fade-left" @endif
            data-aos-once="true">
            <div class="title xlg:text-5xl text-{{ $title_color }}">{!! $copy_title !!}
            </div>
            <div class="copy my-8 text-{{ $copy_color }}">{!! $copy_copy !!}</div>
            <div>
                @if ($copy_link)
                    <a class="@if ($copy_link_style == 'link') link font-bold @else btn w-auto @endif relative flex align-center"
                        href="{{ $copy_link_url }}" target="{{ $copy_link_target }}">{{ $copy_link_title }}
                        <span class="arrow"></span></a>
                @endif
            </div>
        </div>

        @if ($image_position == 'right')
            <div class="image w-full lg:w-1/2  py-10 mx-auto lg:max-w-[500px] max-w-[600px] order-2 @if ($image_smaller) pl-[40px] @else px-6 lg:px-10 @endif"
                data-aos="fade-right" data-aos-once="true">
                <img src="{{ $image_asset }}" alt="{{ $copy_title }}" width="420" height="420">
            </div>
        @endif
    </div>
@endif
