{{--
  Template Name: Contact Page Template
--}}

@extends('layouts.app')

@php
    $slider_data = get_field('slides');
    $title = get_field('contact_title');
    $copy = get_field('contact_copy');
    $phone = get_field('contact_phone');
    $address = get_field('contact_address');
@endphp

@section('content')
    @include('sections.slider', ['slider_data' => $slider_data, 'hide_lines' => false])
    <div class="container-sm my-[50px] lg:my-[100px]">
        <div class="mt-[150px] lg:-mt-[100px] justify-end absolute -right-[100px] z-10 hidden lg:flex">
            @include('partials.diamond', ['style' => ['color' => 'red', 'speed' => '-4']])
        </div>
        <div>
            <h2 class="text-center text-sopakcoRed uppercase title">{{ $title }}</h2>
            <div class="my-10">{!! $copy !!} </div>
        </div>
        <div class="mt-5">
            <p class="mb-12 text-center">Contact us today to find out more!</p>
            <div>
                {!! do_shortcode('[forminator_form id="428"]') !!}
            </div>
        </div>
        <div>
            <h3 class="text-base text-center mt-[80px] mb-[50px]">Other ways to reach SOPAKCO</h3>
            <div class="flex justify-center flex-wrap">
                <div class="mx-10 flex flex-col items-center mb-10">
                    <h4 class="text-sopakcoRed uppercase text-xl lg:text-3xl mb-4 flex leading-none">
                        <svg class="w-[15px] lg:w-[25px] mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                            fill="#D71920">
                            <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path fill="#D71920" style="color='#D71920'"
                                d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                        </svg>
                        Phone
                    </h4>
                    <a href="tel:+18434647851" class="underline">{{ $phone }}</a>
                </div>
                <div class="mx-10 flex flex-col items-center">
                    <h4 class="text-sopakcoRed uppercase text-xl lg:text-3xl mb-4 flex leading-none">
                        <svg class="w-[15px] lg:w-[25px] mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path fill="#D71920" style="color='#D71920'"
                                d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                        </svg>
                        ADDRESS
                    </h4>
                    <p class="underline">
                        {!! $address !!}
                    </p>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 -left-[245px] z-10 hidden lg:flex">
            @include('partials.diamond-transparent', ['speed' => '1'])
        </div>
    </div>
@endsection
