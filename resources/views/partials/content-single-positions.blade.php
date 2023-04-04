@php
    $location = get_field('location');
    $employment_status = get_field('employment_status');
@endphp
<div class="container">
    <a href="/careers" class="link uppercase py-5 inline-block"><span class="arrow prev after:pr-2"></span><span
            class="underline">Back to all POSITIONS</span></a>
    <article @php(post_class('h-entry flex flex-wrap'))>
        <div class="w-full lg:w-1/3 my-8 lg:my-0">
            <div class="border-sopakcoDarkBlue border-4 p-8">
                <h1 class="p-name text-sopakcoRed text-3xl">
                    {!! $title !!}
                </h1>
                <hr class="text-[#707070] my-8">
                <p>{{ $location }}</p>
                <p>{{ $employment_status }}</p>
                <a href="#applyForm" class="btn mt-10 uppercase">Apply</a>
            </div>
        </div>

        <div class="w-full lg:w-2/3 lg:pl-8">
            @php(the_content())
            <div id="applyForm" class="border-4 border-sopakcoDarkBlue p-4 lg:p-8 my-10">
                <h2 class="text-4xl underline mt-6 text-center">Apply Now!</h2>
                <div>{!! do_shortcode('[forminator_form id="426"]') !!}</div>
            </div>
        </div>

    </article>
</div>
