@extends('layouts.frontend.app', ['title' => 'Forum'])

@section('content')
    <div class="max-w-7xl-auto py-6 sm:px-6 lg:px-8 bg-gray-100 items-center">
        <div class="sm:container sm:mx-auto px-6 bg-culti-green-4 rounded">
            <div class="px-4 py-6 sm:px-0">
                <div class="flex space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-2 w-10 h-10 md:w-20 md:h-20"
                        width="20" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="white" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 20l-3 -3h-2a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-2l-3 3">
                        </path>
                        <line x1="8" y1="9" x2="16" y2="9"></line>
                        <line x1="8" y1="13" x2="14" y2="13"></line>
                    </svg>
                    <h2 class="text-2xl font-bold text-white mb-4">Create New Topic</h2>
                </div>
                <form action="{{ route('forum.store') }}" method="POST">
                    @csrf
                    <div class="mb-1 p-2">
                        <h3 for="forum_title" class="block text-gray-200 mb-1">Title</h3>
                        <input type="text" name="forum_title" id="forum_title" class="p-1 form-input rounded-md shadow-sm border border-gray-300 @error('forum_title') border-red-500 @enderror" value="{{ old('forum_title') }}" required autofocus>
                        @error('forum_title')
                            <p class="text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4 p-2">
                        <label for="forum_desc" class="block text-gray-200 mb-1">Description</label>
                        <textarea name="forum_desc" id="forum_desc" class="p-1 form-textarea rounded-md shadow-sm w-full border border-gray-300 @error('forum_desc') border-red-500 @enderror" rows="5" required>{{ old('forum_desc') }}</textarea>
                        @error('forum_desc')
                            <p class="text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex items-center justify-end">
                        <button type="submit" class="bg-slate-800 hover:bg-slate-700 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
