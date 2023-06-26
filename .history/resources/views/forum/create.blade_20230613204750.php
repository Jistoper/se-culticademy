@extends('layouts.frontend.app', ['title' => 'Forum'])

@section('content')
    <div class="max-w-7xl-auto py-6 sm:px-6 lg:px-8 bg-gray-100">
        <div class="px-4 py-6 sm:px-0">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Create New Topic</h2>
            <form action="{{ route('forum.store') }}" method="POST">
                @csrf
                <div class="mb-1 p-2">
                    <h3 for="forum_title" class="block text-gray-700 font-semibold mb-1">Title</h3>
                    <input type="text" name="forum_title" id="forum_title" class="form-input rounded-md shadow-sm w-half border border-gray-300 @error('forum_title') border-red-500 @enderror" value="{{ old('forum_title') }}" required autofocus>
                    @error('forum_title')
                        <p class="text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4 p-2">
                    <label for="forum_desc" class="block text-gray-700 font-semibold mb-1">Description</label>
                    <textarea name="forum_desc" id="forum_desc" class="form-textarea rounded-md shadow-sm w-50 border border-gray-300 @error('forum_desc') border-red-500 @enderror" rows="5" required>{{ old('forum_desc') }}</textarea>
                    @error('forum_desc')
                        <p class="text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-end">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Create
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
