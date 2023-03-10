<x-layout class="h-screen">
    @include('_header')
    <x-setting heading="{{__('texts.add_new_quote')}}" >
            @if ($movies->count()< 1)
                <p class="text-3xl font-bold text-red-300 text-center">{{__('texts.add_movie_to_insert_quotes')}}</p>
            @else
                    <form action="{{route('quote.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <x-form.input name="title_en" text="quote_title_en" value="{{old('title_en')}}"/>

                    <x-form.input name="title_ka" text="quote_title_ka" value="{{old('title_ka')}}"/>

                    <x-form.input name="thumbnail" type="file"/>   

                    <label for="movie_id" class="block mb-1  text-base text-white">{{__('texts.movie_title' )}}</label>
                    <select name="movie_id" id="movie_id" class="py-2 px-1  rounded focus:outline-none w-full">
                        @foreach ($movies as $movie)
                            <option value="{{$movie->id }}" {{old('movie_id') == $movie->id ? 'selected' : '' }}   >{{ucwords($movie->title)}}</option>
                        @endforeach
                    </select>

                    <x-form.button>{{__('texts.add_quote')}}</x-form.button>

                    </form>
            @endif
        </x-setting>
</x-layout>