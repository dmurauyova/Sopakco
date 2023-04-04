{{--
  Template Name: Capabilities Template
--}}

@extends('layouts.app')

@php
    $slider_data = get_field('slides');
    $faq = get_field('faq');
    $blueDiamond = ['color' => 'sopakcoBlue', 'position' => 'left'];
    $cta = get_field('section--cta');

@endphp

@section('content')
    @include('sections.slider', ['slider_data' => $slider_data, 'hide_lines' => false])
    @include('sections.accordion', ['data' => $faq])
    <div class="bg-sopakcoDarkBlue/10">
        @include('sections.cta', ['data' => $cta])
    </div>
@endsection
