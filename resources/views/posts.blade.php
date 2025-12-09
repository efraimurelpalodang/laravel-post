@extends('layouts.main')
@section('content')
    <div class="mx-auto grid grid-cols-6 lg:mx-0 mb-8">
        <h2 class="text-4xl font-semibold tracking-tight text-pretty col-span-3 text-white sm:text-5xl">{{ $page }}
        </h2>
        @if (request('category') || request('author'))
            <a href="{{ url()->previous() }}"
                class="bg-white text-center w-48 rounded-2xl h-14 relative text-black text-xl font-semibold group inline-block col-end-7"
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
        @endif
    </div>
    <div class="grid grid-cols-6">
        <form class="col-span-4 col-start-2 flex justify-center">
            <div class="w-full max-w-xl min-w-[200px]">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="relative flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="absolute w-5 h-5 top-2.5 left-2.5 text-slate-600">
                        <path fill-rule="evenodd"
                            d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z"
                            clip-rule="evenodd" />
                    </svg>

                    <input
                        class="w-full bg-transparent placeholder:text-slate-400 text-slate-200 text-sm border border-slate-200 rounded-md pl-10 pr-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                        placeholder="Search blogs...." name="search" value="{{ request('search')?? '' }}" />

                    <button
                        class="rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
                        type="submit">
                        Search
                    </button>
                </div>
            </div>

        </form>
    </div>
    @if ($posts->count())
        <div
            class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-700 pt-5 sm:mt-8 sm:pt-10 lg:mx-0 lg:max-w-none lg:grid-cols-3 mb-10">
            @foreach ($posts as $post)
                <article class="flex max-w-xl flex-col items-start justify-between">
                    <img src="https://dicoding-assets.sgp1.cdn.digitaloceanspaces.com/blog/wp-content/uploads/2020/04/internship-rendi-photo-backend.png"
                        alt="programmer">
                    <div class="flex items-center gap-x-4 text-xs mt-3">
                        <time datetime="2020-02-12" class="text-gray-400">{{ $post->created_at->diffForHumans() }}</time>
                        <a href="/blogs?category={{ $post->category->slug }}"
                            class="relative z-10 rounded-full bg-gray-800/60 px-3 py-1.5 font-medium text-gray-300 hover:bg-gray-800">{{ $post->category->name }}</a>
                    </div>
                    <div class="group relative grow">
                        <h3 class="mt-3 text-lg/6 font-semibold text-white group-hover:text-gray-300">
                            <a href="/blog/{{ $post->slug }}">
                                <span class="absolute inset-0"></span>
                                {{ $post->title }}
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-400">{{ $post->body }}</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4 justify-self-end">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="" class="size-10 rounded-full bg-gray-800" />
                        <div class="text-sm/6">
                            <p class="font-semibold text-white">
                                <a href="/blogs?author={{ $post->author->username }}">
                                    {{ $post->author->name }}
                                </a>
                            </p>
                            <p class="text-gray-400">Director of Product</p>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    @else
        <p class="text-3xl text-center capitalize mt-30">not posts found</p>
    @endif

    {{ $posts->links() }}

@endsection
