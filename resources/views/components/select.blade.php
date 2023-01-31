@props(['disabled' => false])

<div class="border {{$disabled?'boder-gray-400 border-dashed':'border-purple-100'}} mt-1">
    <select class="w-full" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-500 border-0 text-gray-500 focus:border-fuchsia-300 focus:ring focus:ring-fuchsia-200 focus:ring-opacity-50 rounded-sm shadow-sm']) !!}>

         @foreach ($userlist as $arr)

            <option  value={{$arr['id']}}>{{$arr['name']}}</option>
        @endforeach
        
    </select>
 @dd(json_decode($userlist));
</div>
