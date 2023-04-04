{{--
  Template Name: Pouch Packaging Template
--}}

@extends('layouts.app')

@php
    $slider_data = get_field('slides');
    $two_column_data = ['title' => get_field('two_column_title'), 'copy' => get_field('two_column_copy')];
    $timeline = get_field('timeline');
    $blueDiamond = ['color' => 'sopakcoBlue', 'position' => 'left'];
    $pouches = get_field('pouches');
    $cta = get_field('section--cta');
@endphp

@section('content')
    @include('sections.slider', ['slider_data' => $slider_data, 'hide_lines' => false])
    <div class="mt-[150px] lg:-mt-[100px] justify-end absolute -right-[100px] z-10 hidden lg:flex">
      @include('partials.diamond', ['style' => ['color' => 'blue', 'speed' => '-8']])
    </div>
    @include('sections.two-column-copy', [
        'data' => $two_column_data,
        'two_column_background' => 'sopakcoDarkBlue',
    ])
    <div>
      @foreach ($pouches as $pouch)
        <div class="even:bg-sopakcoDarkBlue/10 lg:py-4">
            @include('sections.image-copy', [
                'data' => $pouch,
                'title_color' => 'sopakcoRed',
                'copy_color' => 'sopakcoDarkBlue',
                'image_smaller' => true,
            ])
        </div>
      @endforeach
    </div>
    <div class="absolute bottom-0 -left-[100px] z-50 hidden lg:flex">
      @include('partials.diamond', ['style' => ['color' => 'red', 'speed' => '4']])
    </div>
    @include('sections.cta', ['data' => $cta])
@endsection
