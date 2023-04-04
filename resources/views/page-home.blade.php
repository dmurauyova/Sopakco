{{--
  Template Name: Home Page Template
--}}

@extends('layouts.app')

@php
    $slider_data = get_field('slides');
    $innovative_solutions = get_field('section__innovative-food-solutions');
    $food_processing_capabelities = get_field('section--food_processing_capabelities');
    $suppliers = get_field('section--supplier');
@endphp

@section('content')
    @include('sections.slider', ['slider_data' => $slider_data, 'hide_lines' => true, 'home_page' => true])
    <div class="mt-[150px] lg:-mt-[100px] justify-end absolute right-[-20%] lg:right-[5%] z-10 hidden lg:flex">
        @include('partials.diamond', ['style' => ['color' => 'blue', 'speed' => '-8']])
    </div>
    <div class="absolute mt-[150px] lg:mt-[100px] -left-[100px] z-10 hidden lg:flex">
      @include('partials.diamond', ['style' => ['color' => 'red', 'speed' => '-6']])
    </div>
    @include('sections.image-copy', [
        'data' => $innovative_solutions,
        'title_color' => 'sopakcoRed',
        'copy_color' => 'sopakcoDarkBlue',
    ])
    <div class="z-20 relative">
        @include('sections.icon-row', ['data' => $food_processing_capabelities])
    </div>
    @include('sections.image-copy', [
        'data' => $suppliers,
        'title_color' => 'sopakcoRed',
        'copy_color' => 'sopakcoDarkBlue',
    ])
@endsection
