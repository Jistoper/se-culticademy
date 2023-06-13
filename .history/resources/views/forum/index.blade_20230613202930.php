@extends('layouts.frontend.app', ['title' => 'Forum'])

{{-- @section('content')
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-medium">Forums</h2>
        <a href="{{ route('forum.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Forum</a>
    </div>

    <div class="bg-white shadow-md rounded my-6">
        <table class="text-left w-full border-collapse">
            <thead>
                <tr>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Title</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Description</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($forums as $forum)
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">{{ $forum->title }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $forum->description }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <a href="{{ route('forum.edit', $forum->id) }}" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark">Edit</a>
                            <form action="{{ route('forum.destroy', $forum->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-red hover:bg-red-dark">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection --}}

@section('content')
    <!-- hero section -->
    <x-landing.hero-section title="Forum" subtitle="Kumpulan Comment dari para member disini"
        details="Disini review yang diberikan kami tampilkan secara menyeluruh tanpa adanya perubahan review agar kami semakin baik dalam menyajikan konten - konten premium maupun gratis."
        :data="$forums" cardtitle="Topic">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-2 w-10 h-10 md:w-20 md:h-20"
            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="white" fill="none"
            stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M12 20l-3 -3h-2a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-2l-3 3">
            </path>
            <line x1="8" y1="9" x2="16" y2="9"></line>
            <line x1="8" y1="13" x2="14" y2="13"></line>
        </svg>
    </x-landing.hero-section>
    <!-- serach section -->
    <x-landing.search-section :url="route('review')" />
    <!-- Forum section -->
    <div class="w-full bg-gray-100 p-3 border border-line border-gray-100">
        <div class="container mx-auto">
            <div class="flex flex-row overflow-x-auto md:grid md:grid-cols-3 gap-4 items-start">
                @foreach ($forums as $forum)
                    <div class="min-w-full bg-slate-800 rounded-lg border border-slate-800">
                        <div class="flex justify-between p-4">
                            <div class="flex space-x-2">
                                <img width="26" height="26" src="https://img.icons8.com/sf-regular/48/FFFFFF/chat.png" alt="chat"/>
                                <a href="#" class="font-semibold text-white hover:underline">
                                    {{ $forum->forum_title }}
                                </a>
                            </div>
                            <div class="flex items-center space-x-2 text-white text-xs">
                                <img src="{{ $forum->user->avatar }}" alt=""
                                    class="object-cover w-5 h-5 rounded-full border">
                                <span>
                                    {{ $forum->user->name }}
                                </span>
                            </div>
                        </div>
                        <div class="p-4 space-y-2 text-sm rounded-b-lg bg-white text-gray-600 border-t border-line border-slate-800">
                            <p class="text-justify">
                                {{ $forum->forum_desc }}
                            </p>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="flex items-center justify-between mb-6">
                    <h2 class="text-xl font-medium">Forums</h2>
                    <a href="{{ route('forum.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Forum</a>
                </div>
            
                <div class="bg-white shadow-md rounded my-6">
                    <table class="text-left w-full border-collapse">
                        <thead>
                            <tr>
                                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Title</th>
                                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Description</th>
                                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($forums as $forum)
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-4 px-6 border-b border-grey-light text-gray-700">{{ $forum->title }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light text-gray-700">{{ $forum->description }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">
                                        <a href="{{ route('forum.edit', $forum->id) }}" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark">Edit</a>
                                        <form action="{{ route('forum.destroy', $forum->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-red hover:bg-red-dark">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> --}}
            </div>
            <section class="w-full">
                <div class="flex flex-col items-center justify-center p-4 space-y-8 md:p-10 md:px-24 xl:px-48">
                    <a href="#"
                        class="px-4 py-2 rounded-lg bg-white text-gray-800 text-base flex items-center gap-2 hover:scale-105 hover:duration-200 border-2 border-gray-900">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <g> <path fill="none" d="M0 0h24v24H0z"/> <path d="M6.455 19L2 22.5V4a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H6.455zM11 10H8v2h3v3h2v-3h3v-2h-3V7h-2v3z"/> </g>
                        </svg> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20">
                            <g>
                                <path fill="none" d="M0 0h24v24H0z"/>
                                <path d="M6.455 19L2 22.5V4a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H6.455zM11 10H8v2h3v3h2v-3h3v-2h-3V7h-2v3z"/>
                            </g>
                        </svg>
                        Add Topic
                    </a>
                </div>
            </section>
        </div>
    </div>
@endsection