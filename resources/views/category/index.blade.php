@extends('layouts.main')
@section('content')
    <div>
        <div class="px-4 sm:px-0">
            <h3 class="text-3xl font-semibold text-white">All categories</h3>
        </div>
        <div class="mt-6 border-t border-white/10">
            <dl class="divide-y divide-white/10">
                @foreach ($categories as $category)
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dd class="mt-1 text-sm/6 text-gray-400 sm:col-span-2 sm:mt-0"><a
                                href="/categories/{{ $category->slug }}">
                                {{ $category->name }}
                            </a>
                        </dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
@endsection
