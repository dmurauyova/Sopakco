@php
    $color = $style['color'];
    $speed = $style['speed'] ?? '2';
    $opacity = $style['opacity'] ?? '50';
@endphp

<div data-rellax-speed="{{ $speed }}" data-rellax-zindex="1"
    class="box opacity-{{ $opacity }} rellax z-10
    @if ($color == 'red') bg-sopakcoRed @elseif ($color == 'blue') bg-sopakcoBlue @endif">
</div>

<style>
    .box {
        width: 200px;
        aspect-ratio: 1;
        clip-path: polygon(100.00% 50.00%, 50.00% 100.00%, 0.00% 50.00%, 50.00% 0.00%);
    }
</style>
