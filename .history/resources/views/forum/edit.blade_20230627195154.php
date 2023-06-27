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
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-2 w-4 h-4 md:w-9 md:h-9" viewBox="0 0 24 24" width="20" height="20">
                        <path d="M42.2,24.27c-0.55,0-1,0.45-1,1v22.96c0,1.25-1.02,2.26-2.27,2.26H6.77c-1.25,0-2.26-1.02-2.26-2.26V16.07
                        c0-1.25,1.02-2.26,2.26-2.26h22.95c0.55,0,1-0.45,1-1s-0.45-1-1-1H6.77c-2.35,0-4.26,1.91-4.26,4.26v32.17
                        c0,2.35,1.91,4.26,4.26,4.26h32.17c2.35,0,4.27-1.91,4.27-4.26V25.27C43.2,24.72,42.75,24.27,42.2,24.27z" fill="#ffffff" class="color000 svgShape"></path>
                        <path d="M51.64,6.02l-2.66-2.66c-1.14-1.14-3-1.14-4.15,0l-16.4,16.4c-0.11,0.11-0.2,0.25-0.24,0.4l-2.59,7.98
                        c-0.12,0.36-0.02,0.75,0.24,1.02c0.19,0.19,0.45,0.29,0.71,0.29c0.1,0,0.21-0.02,0.31-0.05l7.98-2.59c0.15-0.05,0.29-0.13,0.4-0.24
                        l16.4-16.4C52.79,9.02,52.79,7.16,51.64,6.02z M34.54,24.44l-3.98-3.98L42.48,8.54l3.98,3.98L34.54,24.44z M29.59,22.32l3.08,3.08
                        l-4.56,1.48L29.59,22.32z M50.23,8.75l-2.35,2.35L43.9,7.12l2.35-2.35c0.36-0.36,0.96-0.36,1.32,0l2.66,2.66
                        C50.59,7.79,50.59,8.38,50.23,8.75z" fill="#ffffff" class="color000 svgShape"></path>
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
