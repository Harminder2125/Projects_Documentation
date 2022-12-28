@if ($errors->any())
    <div {{ $attributes }}>
    <div class="bg-gray-50/20 p-0 shadow-2xl rounded-lg">
        <div class="font-medium text-red-100 rounded-lg bg-orange-500  p-2">{{ __('Whoops! Something went wrong.') }}

        <ul class="mt-3 list-disc list-inside text-sm text-red-100">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
    </div>
    </div>
@endif
