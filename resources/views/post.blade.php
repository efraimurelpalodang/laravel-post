@extends('layouts.main')
@section('content')
    <div class="mx-auto max-w-5xl lg:px-8">
        <div class="mx-auto max-w-full lg:mx-0 grid grid-cols-3">
            <h2 class="text-4xl font-semibold tracking-tight col-span-2 text-pretty sm:text-5xl">Detail Blog</h2>
            <div class="col-end-4 ml-32">
                <a href="/blogs"
                    class="bg-white text-center w-48 rounded-2xl h-14 relative text-black text-xl font-semibold group inline-block"
                    type="button">
                    <div
                        class="bg-green-400 rounded-xl h-12 w-1/4 flex items-center justify-center absolute left-1 top-1 group-hover:w-[184px] z-10 duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" height="25px" width="25px">
                            <path d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z" fill="#000000"></path>
                            <path
                                d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"
                                fill="#000000"></path>
                        </svg>
                    </div>
                    <p class="translate-x-2 mt-3 ml-4">Go Back</p>
                </a>
            </div>
        </div>
        <div class="mx-auto mt-10 max-w-full border-t border-gray-700 sm:mt-10 sm:pt-10 lg:mx-0 lg:max-w-none">
            <article class="flex max-w-full flex-col items-start justify-between">
                <div class="flex items-center gap-x-4 text-xs">
                    <time datetime="2020-03-10" class="text-gray-400">{{ $post->created_at->format('j F Y') }}</time>
                    <a href="/categories/{{ $post->category->slug }}"
                        class="relative z-10 rounded-full bg-gray-800/60 px-3 py-1.5 font-medium text-gray-300 hover:bg-gray-800">{{ $post->category->name }}</a>
                </div>
                <div class="group relative grow">
                    <h3 class="mt-3 text-lg/6 font-semibold text-white group-hover:text-gray-300">
                        <a href="#">
                            {{ $post->title }}
                        </a>
                    </h3>
                    <p class="mt-5 text-sm/6 text-gray-400">{{ $post->body }}</p>
                </div>
                <div class="relative mt-8 flex items-center gap-x-4 justify-self-end">
                    <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="" class="size-10 rounded-full bg-gray-800" />
                    <div class="text-sm/6">
                        <p class="font-semibold text-white">
                            <a href="#">
                                {{ $post->author->name }}
                            </a>
                        </p>
                        <p class="text-gray-400">Front-end Developer</p>
                    </div>
                </div>
            </article>
        </div>
    </div>
@endsection
