<!-- CTA -->
@if ($data)
    @php
        $cta_title = $data['title'];
        $cta_link = $data['link'];
        if ($cta_link) {
            $cta_link_url = $cta_link['url'];
            $cta_link_title = $cta_link['title'];
            $cta_link_target = $cta_link['target'] ? $cta_link['target'] : '_self';
        }
    @endphp
    @if ($cta_link || $cta_title)
        <div class="container-sm flex items-center justify-center py-[100px] lg:py-[150px] flex-col">
            <h2 class="title mb-10 text-center max-w-[800px]">{{ $cta_title }}</h2>
            @if ($cta_link)
                <a href="{{ $cta_link_url }}" class="btn" target="{{ $cta_link_target }}">{{ $cta_link_title }}</a>
            @endif
        </div>
    @endif
@endif
