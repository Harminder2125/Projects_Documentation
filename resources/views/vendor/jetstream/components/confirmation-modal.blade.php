@props(['id' => null, 'maxWidth' => null])

<x-jet-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class=" w-full bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="w-full sm:flex sm:flex-col sm:items-start ">
            <div class="w-full flex  border-b border-fuchsia-300 border-dashed pb-2 mb-2">
                <div class="pr-4 flex justify-center items-center">
                    {{$icon}}
                </div>
                <div>
                    <h3 class=" uppercase text-fuchsia-900 font-semibold">
                        {{ $title }}
                    </h3>
                    <h3 class="text-lg uppercase text-fuchsia-900 font-semibold">
                        <h2 class="text-sm text-gray-500 tracking-widest uppercase">
                            {{$subtitle}}</h2>

                    </h3>
                </div>
            </div>

            <div class="w-full mt-3 sm:mt-0 sm:ml-1 sm:text-left">


                <div>
                    {{ $content }}
                </div>
            </div>
        </div>
    </div>

    <div {{ $attributes->merge(['class' => 'flex flex-row justify-end px-6 py-4 bg-gray-100 text-right']) }}>


        {{ $footer }}
    </div>
</x-jet-modal>
