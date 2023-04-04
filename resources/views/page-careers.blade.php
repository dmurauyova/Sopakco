{{--
  Template Name: Careers Page Template
--}}

@extends('layouts.app')

@php
    $slider_data = get_field('slides');
    $two_column_data = ['title' => get_field('two_column_title'), 'copy' => get_field('two_column_copy')];
    $image_with_copy = ['image' => get_field('image'), 'copy' => get_field('copy')];
    $open_positions = get_posts([
        'post_type' => 'positions',
        'posts_per_page' => -1,
        'orderby' => 'title',
        'order' => 'ASC',
    ]);
    $disclaimer = get_field('disclaimer');
@endphp

@section('content')
    @include('sections.slider', ['slider_data' => $slider_data, 'hide_lines' => false])
    @include('sections.careers-two-column', [
        'data' => $two_column_data,
        'two_column_background' => 'white',
    ])
    <div class="bg-sopakcoDarkBlue py-10">
        @include('sections.image-copy', [
            'data' => $image_with_copy,
            'title_color' => 'white',
            'copy_color' => 'white',
        ])
    </div>

    @include('sections.position', ['disclaimer' => $disclaimer])
@endsection
