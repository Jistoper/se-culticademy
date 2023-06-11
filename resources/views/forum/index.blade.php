@extends('layouts.backend.app', ['title' => 'Forum'])

@section('content')
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
@endsection
