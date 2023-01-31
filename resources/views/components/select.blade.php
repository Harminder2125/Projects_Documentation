@props(['disabled' => false])


<div class="border {{$disabled?'border-gray-400 border-dashed':'border-purple-100'}} mt-1">
    <select class="w-full" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'text-gray-500 focus:border-purple-100 focus:ring focus:ring-purple-100 focus:ring-opacity-50 rounded-sm shadow-sm']) !!}>

        @foreach ($userlist as $item)

        <option class="border-0 border-purple-100" value={{$item['id']}}>{{$item['name']}}</option>
        @endforeach

    </select>

</div>
