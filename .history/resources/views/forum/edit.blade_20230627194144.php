{{-- @extends('layouts.frontend.app', ['title' => 'Edit Forum'])

@section('content')
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-medium">Edit Forum</h2>
        <a href="{{ route('forum.show', $forum->id) }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back to Forum</a>
    </div>

    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex my-2">
        <form action="{{ route('forum.update', $forum->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="forum_title">
                        Forum Title
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('forum_title') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="forum_title" type="text" placeholder="Enter forum title" name="forum_title" value="{{ $forum->forum_title }}">
                    @error('forum_title')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="forum_desc">
                        Forum Description
                    </label>
                    <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('forum_desc') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="forum_desc" placeholder="Enter forum description" name="forum_desc">{{ $forum->forum_desc }}</textarea>
                    @error('forum_desc')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Update Forum
                </button>
            </div>
        </form>
    </div>
@endsection --}}

@extends('layouts.frontend.app', ['title' => 'Edit Forum'])

@section('content')
    <div class="max-w-7xl-auto py-6 sm:px-6 lg:px-8 bg-gray-100 items-center">
        <div class="text-center">
            <a href="{{ route('forum.show', $forum->id) }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back to Forum</a>
        </div>
        <div class="sm:container sm:mx-auto px-6 bg-culti-green-4 rounded">
            <div class="px-4 py-6 sm:px-0">
                <div class="flex space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-2 w-9 h-9 md:w-9 md:h-9"
                        width="20" height="20" viewBox="0 0 24 24" stroke-width="1.25" stroke="white" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 20l-3 -3h-2a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-2l-3 3">
                        </path>
                        <line x1="8" y1="9" x2="16" y2="9"></line>
                        <line x1="8" y1="13" x2="14" y2="13"></line>
                    </svg>
                    <h2 class="text-2xl font-semibold text-white mb-4">Edit Forum</h2>
                </div>
                <form action="{{ route('forum.update', $forum->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="forum_title">
                                Forum Title
                            </label>
                            <input class="appearance-none block w-full bg-gray-100 text-gray-700 border @error('forum_title') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="forum_title" type="text" placeholder="Enter forum title" name="forum_title" value="{{ $forum->forum_title }}">
                            @error('forum_title')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="forum_desc">
                                Forum Description
                            </label>
                            <textarea class="appearance-none block w-full bg-gray-100 text-gray-700 border @error('forum_desc') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="forum_desc" placeholder="Enter forum description" name="forum_desc">{{ $forum->forum_desc }}</textarea>
                            @error('forum_desc')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            Update Forum
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
