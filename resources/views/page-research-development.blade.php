{{--
  Template Name: R&D Template
--}}

@extends('layouts.app')

@php
    $slider_data = get_field('slides');
    $two_column_data = ['title' => get_field('two_column_title'), 'copy' => get_field('two_column_copy')];
    $timeline = get_field('timeline');
@endphp

@section('content')
    @include('sections.slider', ['slider_data' => $slider_data, 'hide_lines' => false])
    @include('sections.two-column-copy', [
        'data' => $two_column_data,
        'two_column_background' => 'sopakcoDarkBlue',
    ])
    <div class="justify-end absolute flex z-10 -right-[100px] w-full">
        @include('partials.diamond', ['style' => ['color' => 'red', 'speed' => '-7', 'opacity' => '50']])
    </div>
    <div class="relative">
      <div class="absolute bottom-0 -left-[245px] z-10 hidden lg:flex">
            @include('partials.diamond-transparent', [
               'speed' => '6']
            )
        </div>
        @include('partials.timeline', [
            'data' => $timeline,
            'background' => 'bg-transparent',
            'line_color' => 'sopakcoDarkBlue',
            'title_color' => 'sopakcoRed',
            'copy_color' => 'sopakcoDarkBlue',
        ])
    </div>
@endsection
