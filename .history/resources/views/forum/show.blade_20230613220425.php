@extends('layouts.frontend.app', ['title' => $forum->forum_title])

@section('content')
    <div class="max-w-7xl-auto py-6 sm:px-6 lg:px-8 bg-culti-green-4 items-center">
        <div class="sm:container sm:mx-auto px-6 rounded flex items-center justify-between mb-2">
            <div class="flex items-center space-x-2">
                <img width="30" height="30" src="https://img.icons8.com/sf-regular/48/FFFFFF/chat.png" alt="chat"/>
                <h2 class="text-2xl font-semibold text-white">{{ $forum->forum_title }}</h2>
            </div>
            @if (Auth::check() && Auth::id() == $forum->user_id)
                <a href="{{ route('forum.edit', $forum->id) }}" class="sm:button bg-blue-500 hover:bg-700 text-white font-bold py-2 px-4 rounded">Edit Forum</a>
            @endif
        </div>
        <hr class="h-px my-3 md-3 bg-white border-none">
        <div class="sm:container sm:mx-auto px-6 rounded flex items-center mb-1 my-4">
            <p class="text-gray-200">{{ $forum->forum_desc }}</p>
        </div>
    </div>

    <div class="bg-gray-100">
        <div class="p-4 sm:container sm:mx-auto px-6 rounded items-center mb-2">
            <h3 class="text-lg font-medium mb-4">Discussions</h3>
            @if (Auth::check())
                <form action="{{ route('forum.storeDiscussion', $forum->id) }}" method="POST" class="mb-4">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2" for="message">
                            Message
                        </label>
                        <textarea name="message" id="message" rows="5" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                    </div>
                    <div class="flex items-center justify-end">
                        <button class="flex items-center space-x-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                            <img width="25" height="25" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwY
                            AAACi0lEQVR4nO2ZPWsVQRSGR5AkYmNSGhHsRLFTwbj6U9RYWPgDQoiFlX/Aj0IsBPEjjYmgVkLAwkLFD4SQiJ3R2iRGMXrJIwdP
                            dJzcOzubmd07kPvAwl7uzpn3nT17dmbWmB5bFGAIOAs8AOaBFT3kfBoYBQZNbgA7gAvAEuUsAhPSxuQAsBt4QXXeAHu7LX4P8Mkj
                            cgQoPP8vAMPdTJtXviE2/6718RIYqNKxjMgk8BloUZ2TGkdyngQGhPEQ4duBa8Tx1qo2SwkNLJZWpwTihYsaS0olCQ0IZ8rSxuYh
                            cAToC8i6dvGkzqc2MOXrcNIWvxnRTrwPNRiY93UoD+w6hxMYWLbijUTEKaw4y74L7WqzqbTxGCgi4pwINbDhtsYAvK8hheaaNDBd
                            g4H7TRoYrcHAqSYNDOnLJ5WBL8CuxgxozImEBsbKOqvDwIBOxGINPC+dzNVhQOMO65S4E4VTKl0+ynoipKNaDFgLGhnFqrwOXtDU
                            acBKp/GQB5s/D+wY0K9ti64bsPoZlFmlvifmgK96yPkUcHq92gDbgPPAajYGqgA8C9aUqYG/pL24IaiiqWegBthqd6CVckETC9Bv
                            6WmFNEi6pIwFOGrpWQhpcM9q8KgRlR6Ax5ae2yENjts5JyZ0FBpLJ6BP+7TFrwHHQgNcwc8qcCkgzk7gBvCTeC5XGQHZWrxaEvBH
                            SYyDwGwC4WsiXjQFG7BEyJb3XZ3Hb9jc9bSTSdq3CNEt7fNOcNpUMNXRgG6jX3fEfAfOmVyggwFgP/DOES9T40MmJ2hjQLY59AOd
                            zS15iE1u8D/5p4yLI3a2ze8DJmeAX+3KBnAzy5RxAZ46wle8X0xyA9gHPNEF+Ez2KdOjh/HyG15WjyAWMIFHAAAAAElFTkSuQmCC">
                            <span>
                                Comment
                            </span>
                        </button>
                    </div>
                </form>
            @endif
            @if ($discussions->count() > 0)
                <ul>
                    @foreach ($discussions as $discussion)
                        <li class="mb-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 mr-2">
                                    {{-- <img class="w-10 h-10 rounded-full" src="{{ $discussion->user->avatar_url }}" alt="{{ $discussion->user->name }}"> --}}
                                </div>
                                <div>
                                    {{-- <div class="text-gray-700 font-bold">{{ $discussion->user->name }}</div> --}}
                                    <div class="text-gray-600">{{ $discussion->created_at->diffForHumans() }}</div>
                                    <div class="text-gray-700">{{ $discussion->message }}</div>
                                    @if (Auth::check() && Auth::id() == $discussion->user_id)
                                        <form action="{{ route('forum.destroyDiscussion', $discussion->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-gray-600 font-bold py-1 px-3 rounded text-xs bg-red hover:bg-red-dark">Delete</button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-gray-700">No discussions yet.</p>
            @endif
        </div>
    </div>
@endsection
