<x-app-layout>
    <x-slot name="navigation">
        @include('layouts.guest-navigation')
    </x-slot>

    <div class="bg-white">
        {{-- Hero Section --}}
        <section class="px-3 sm:px-6 lg:px-8 py-12">
            <h1 class="roboto-regular text-5xl text-center">
               {{ $article->title }} 
            </h1>

            <div class="flex justify-center mt-8">
                @if(strlen($article->getFirstMediaUrl('article_images')) !== 0)
                    <div class="bg-red-400 h-[32rem] w-full">
                        <img 
                            src="{{ $article->getFirstMediaUrl('article_images') }}" 
                            alt=""
                            class="w-full h-full object-cover object-center"
                        >
                    </div>
                @endif
            </div>
            
            <p class="mt-8">
                {!! nl2br($article->body) !!}
            </p>
        </section>
</x-app-layout>
