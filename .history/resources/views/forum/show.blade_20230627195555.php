@extends('layouts.frontend.app', ['title' => $forum->forum_title])

@section('content')
    <div class="max-w-7xl-auto py-6 sm:px-6 lg:px-8 bg-culti-green-4 items-center">
        <div class="sm:container sm:mx-auto px-6 rounded flex items-center justify-between mb-2">
            <div class="flex items-center space-x-2">
                <img width="38" height="38" src="https://img.icons8.com/sf-regular/48/FFFFFF/chat.png" alt="chat"/>
                <h2 class="text-2xl font-semibold text-white">{{ $forum->forum_title }}</h2>
            </div>
            @if (Auth::check() && Auth::id() == $forum->user_id || 1)
                <a href="{{ route('forum.edit', $forum->id) }}" class="sm:button bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-2 w-5 h-5 md:w-6 md:h-6" viewBox="0 0 55 55" width="20" height="20">
                        <path d="M42.2,24.27c-0.55,0-1,0.45-1,1v22.96c0,1.25-1.02,2.26-2.27,2.26H6.77c-1.25,0-2.26-1.02-2.26-2.26V16.07
                        c0-1.25,1.02-2.26,2.26-2.26h22.95c0.55,0,1-0.45,1-1s-0.45-1-1-1H6.77c-2.35,0-4.26,1.91-4.26,4.26v32.17
                        c0,2.35,1.91,4.26,4.26,4.26h32.17c2.35,0,4.27-1.91,4.27-4.26V25.27C43.2,24.72,42.75,24.27,42.2,24.27z" fill="#ffffff" class="color000 svgShape"></path>
                        <path d="M51.64,6.02l-2.66-2.66c-1.14-1.14-3-1.14-4.15,0l-16.4,16.4c-0.11,0.11-0.2,0.25-0.24,0.4l-2.59,7.98
                        c-0.12,0.36-0.02,0.75,0.24,1.02c0.19,0.19,0.45,0.29,0.71,0.29c0.1,0,0.21-0.02,0.31-0.05l7.98-2.59c0.15-0.05,0.29-0.13,0.4-0.24
                        l16.4-16.4C52.79,9.02,52.79,7.16,51.64,6.02z M34.54,24.44l-3.98-3.98L42.48,8.54l3.98,3.98L34.54,24.44z M29.59,22.32l3.08,3.08
                        l-4.56,1.48L29.59,22.32z M50.23,8.75l-2.35,2.35L43.9,7.12l2.35-2.35c0.36-0.36,0.96-0.36,1.32,0l2.66,2.66
                        C50.59,7.79,50.59,8.38,50.23,8.75z" fill="#ffffff" class="color000 svgShape"></path>
                    </svg>
                    Edit Forum
                </a>
            @endif
        </div>
        <hr class="h-px my-3 md-3 bg-white border-none">
        <div class="sm:container sm:mx-auto px-6 rounded flex items-center mb-1 my-4">
            <p class="text-gray-200">{{ $forum->forum_desc }}</p>
        </div>
    </div>

    <div class="bg-gray-100">
        <div class="p-4 sm:container sm:mx-auto px-6 rounded items-center mb-2">
            @if (Auth::check())
                <form action="{{ route('forum.storeDiscussion', $forum->id) }}" method="POST" class="mb-4">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2" for="message">
                            Message
                        </label>
                        <textarea name="message" id="message" rows="5" class="form-control w-full p-2 border border-gray-400 rounded" placeholder="Type message here..."></textarea>
                    </div>
                    <div class="flex items-center justify-end">
                        <button class="flex items-center space-x-1 bg-slate-800 hover:bg-slate-700 text-white font-semibold py-2 px-4 rounded" onclick="getContent()" type="submit">
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
            <h3 class="text-lg font-semibold text-gray-800 mb-1">Discussions</h3>
            <hr class="h-px my-2 md-3 bg-gray-300 border-none">
            @if ($discussions->count() > 0)
                <ul>
                    @foreach ($discussions as $discussion)
                        <li class="mb-1 px-2">
                            <div class="items-center">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="flex items-center space-x-1">
                                        <img class="w-6 h-6 rounded-full" src="{{ $discussion->user->avatar }}" alt="{{ $discussion->user->name }}">
                                        <div class="text-md font-bold text-gray-700">{{ $discussion->user->name }}</div>
                                        <div class="text-sm font-semibold text-gray-500"> - 
                                            @if (!empty($discussion->user->roles))
                                                @php
                                                    $name = $discussion->user->roles[0]['name'];
                                                @endphp
                                            
                                                {{ $name }}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="text-sm text-gray-600">{{ $discussion->created_at->diffForHumans() }}</div>
                                </div>
                                <div class="pl-4">
                                    <div class="text-gray-700">{!! $discussion->message !!}</div>
                                    @if (Auth::check() && Auth::id() == $discussion->user_id)
                                        <form action="{{ route('forum.destroyDiscussion', $discussion->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-gray-600 hover:underline font-bold rounded text-xs bg-red hover:bg-red-dark">Delete</button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </li>
                        <hr class="h-px my-3 md-3 bg-gray-300 border-none">
                    @endforeach
                </ul>
            @else
                <p class="text-gray-700">No discussions yet.</p>
            @endif
        </div>
    </div>
@endsection
