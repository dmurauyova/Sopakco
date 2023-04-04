{{--
  Template Name: About Page Template
--}}

@extends('layouts.app')

@php
    $slider_data = get_field('slides');
    $letter_from_president = get_field('section--letter_from_president');
    $timeline = get_field('about_timeline');
    $cta = get_field('section--cta');
    
@endphp

@section('content')
    @include('sections.slider', ['slider_data' => $slider_data, 'hide_lines' => false])
    <div class="justify-end absolute -right-[150px] lg:-right-[100px] z-10">
        @include('partials.diamond', ['style' => ['color' => 'red', 'speed' => '-5']])
    </div>
    <div class="relative">
        <div class="justify-start absolute top-[50%] -left-[100px] z-10">
            @include('partials.diamond', ['style' => ['color' => 'blue', 'speed' => '-5']])
        </div>
        @include('sections.image-copy', [
            'data' => $letter_from_president,
            'title_color' => 'sopakcoRed',
            'copy_color' => 'sopakcoDarkBlue',
        ])
    </div>
    @include('partials.timeline', [
        'data' => $timeline['timeline'],
        'background' => 'bg-sopakcoDarkBlue',
        'line_color' => 'sopakcoRed',
        'title_color' => 'white',
        'copy_color' => 'white',
        'image_width' => '100',
    ])
    @include('sections.cta', ['data' => $cta])
@endsection
