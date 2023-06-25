@extends('layouts.frontend.app', ['title' => 'Forum'])

@section('content')
    <div class="max-w-7xl-auto py-6 sm:px-6 lg:px-8 bg-gray-100 items-center">
        <div class="sm:container sm:mx-auto px-6 bg-culti-green-4 rounded">
            <img width="26" height="26" src="https://img.icons8.com/sf-regular/48/FFFFFF/chat.png" alt="chat"/>
            <div class="px-4 py-6 sm:px-0">
                
                <h2 class="text-2xl font-bold text-white mb-4">Create New Topic</h2>
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