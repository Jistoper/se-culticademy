@extends('layouts.backend.app', ['title' => 'Edit Forum'])

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
@endsection
