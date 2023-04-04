<!-- Accordion -->
@if ($data)
    <div id="faq" class="container-sm my-[20px] lg:my-[100px]">
        <div class="flex flex-col items-center ">
            @foreach ($data as $faq)
                <!--  Panel  -->
                <div class="border-b-2 border-b-sopakcoDarkBlue flex lg:block flex-wrap transition-all px-2">
                    <input type="checkbox" name="panel" id="panel-{{ $loop->index }}" class="hidden">
                    <label for="panel-{{ $loop->index }}"
                        class="relative flex items-center justify-between text-sopakcoDarkBlue py-8 accordion w-full uppercase text-2xl md:text-3xl xl:text-4xl 3xl:text-5xl after:text-sopakcoDarkBlue after:content-['\2039']  after:rotate-90  after:text-6xl after:block after:duration-200 after:transition-all after:ml-2"><span
                            class="w-full lg:w-1/2 block">{{ $faq['question'] }}</span></label>
                    <div
                        class="accordion__content overflow-hidden bg-grey-lighter w-full lg:w-1/2 float-right transition-all max-h-0">
                        <div class="accordion__body pb-8" id="panel{{ $loop->index }}">{!! $faq['answer'] !!}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <style>
        input:checked+label:after {
            line-height: .8em;
            transform: rotate(270deg);
            color: rgb(var(--sopakcoRed));
            transform-origin: center;
        }

        .accordion__content {
            max-height: 0em;
            transition: all 0.2s ease-in-out;
        }

        input[name='panel']:checked~.accordion__content {
            /* Get this as close to what height you expect */
            max-height: 50em;
        }

        input[name='panel']:checked~label {
            color: rgb(var(--sopakcoRed));
        }
    </style>
@endif
