@props(['name','text' => $name,'type'=>'text'])
<div class="my-4">
    <label for="{{$name}}" class="block mb-1  text-base text-white">{{__('texts.'. $text )}}</label>
    <input
        type="{{$type}}" 
        class="focus:outline-none focus:bg-zinc-300 border border-gray-200 bg-white p-2 w-full rounded"
        name="{{$name}}" id="{{$name}}" 
        {{$attributes(['value' => ''])}}
        >
    @error($name)
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
    @enderror
</div>


