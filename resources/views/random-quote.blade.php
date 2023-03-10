<x-layout class="h-screen">      
    @include('_header')
    <x-section class="justify-center">

    @if (empty($quote))
        <p class="text-2xl text-white">{{__('texts.no_quotes_yet')}}!</p>
    @else
    <article id="container" class="w-1/2 text-white">
        <img src="{{asset('storage/' . $quote->thumbnail)}}" class="mx-auto mt-0 mb-16 rounded-xl w-[500px] h-[300px] object-cover"  alt="">
        <p class="text-center text-3xl font-normal mb-16">"{{ucwords($quote->title)}}"</p>
        <h1 class="text-center text-3xl font-normal">
            <a 
                class="underline" 
                href="{{route('movie.show_quotes',['movie'=> $quote->movie->slug,])}}"
            >
                {{ucwords($quote->movie->title)}}
            </a>
        </h1>
    </article>
    @endif

    </x-section>

</x-layout>

