<x-layout class="h-screen overflow-y-hidden">
    @include('_header')
    <x-setting heading="Publish New Post">
        <form action="{{route('movie.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <x-form.input name="title_en" text="movie_title_en" :value="old('title_en',$movie->getTranslation('title','en'))"/>

            <x-form.input name="title_ka" text="movie_title_ka" :value="old('title_ka',$movie->getTranslation('title','ka'))"/>

            <x-form.button>Add Movie</x-form.button>

        </form>
    </x-setting>
</x-layout>