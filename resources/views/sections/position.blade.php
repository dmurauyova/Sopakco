<!-- Position -->
@php
    $open_positions = get_posts([
        'post_type' => 'positions',
        'posts_per_page' => -1,
        'orderby' => 'title',
        'order' => 'ASC',
    ]);
@endphp

@if ($open_positions)
    <div class="container-sm my-[100px]">
        <h2 class="title text-center my-10 text-sopakcoRed">Available Positions</h2>
        <ul>
            @foreach ($open_positions as $open_position)
                @php
                    $location = get_field('location', $open_position->ID);
                @endphp
                <li class="list-none mb-8">
                    <p class="text-[#707070] text-sm mb-2">{{ $location }}</p>
                    <a class="font-bold underline text-lg inline-block mb-2"
                        href="{{ get_permalink($open_position->ID) }}">{{ $open_position->post_title }}</a>
                    <p>{!! wp_strip_all_tags(get_the_excerpt($open_position->ID, '')) !!}</p>
                </li>
            @endforeach
        </ul>
        <p class="font-bold mt-8">
            {{ $disclaimer }}
        </p>
    </div>
@endif
