<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;
use App\Models\ForumDiscussion;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $forums = Forum::when($search, function ($query, $search) {
            return $query->where('forum_title', 'LIKE', "%{$search}%");
        })->get();
        return view('forum.index', compact('forums', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $forum = new Forum;
        $forum->forum_title = $request->forum_title;
        $forum->forum_desc = $request->forum_desc;
        $forum->user_id = Auth::id();
        $forum->save();

        return redirect()->route('forum.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $forum = Forum::findOrFail($id);
        $discussions = ForumDiscussion::where('forum_id', $id)->orderBy('created_at', 'asc')->get();
        return view('forum.show', compact('forum', 'discussions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $forum = Forum::findOrFail($id);
        if ($forum->user_id != Auth::id()) {
            if (Auth::id() != 1)
            {
                return redirect()->route('forum.show', $id);
            }
        }
        return view('forum.edit', compact('forum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $forum = Forum::findOrFail($id);
        if ($forum->user_id != Auth::id()) {
            return redirect()->route('forum.show', $id);
        }
        $forum->forum_title = $request->forum_title;
        $forum->forum_desc = $request->forum_desc;
        $forum->save();

        return redirect()->route('forum.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $forum = Forum::findOrFail($id);
        if ($forum->user_id != Auth::id()) {
            return redirect()->route('forum.show', $id);
        }
        $forum->delete();

        return redirect()->route('forum.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeDiscussion(Request $request, $id)
    {
        $validatedData = $request->validate([
            'message' => 'required|string',
        ]);

        $message = $validatedData['message'];

        // Check if the input contains only HTML special characters
        if (preg_match('/^(<br>|&nbsp;|\s)+$/', $message)) {
            return redirect()->route('forum.show', $id);
        }

        // Replace newlines with line breaks
        $messageWithLineBreaks = nl2br($message);

        // Remove disallowed HTML tags except for <br>
        $messageWithLineBreaks = strip_tags($messageWithLineBreaks, '<br>');

        $discussion = new ForumDiscussion;
        $discussion->forum_id = $id;
        $discussion->user_id = Auth::id();
        $discussion->message = new HtmlString($messageWithLineBreaks);
        $discussion->save();

        return redirect()->route('forum.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyDiscussion($id)
    {
        $discussion = ForumDiscussion::findOrFail($id);
        if ($discussion->user_id != Auth::id()) {
            return redirect()->route('forum.show', $discussion->forum_id);
        }
        $discussion->message = '[deleted]';
        $discussion->save();

        return redirect()->route('forum.show', $discussion->forum_id);
    }
}
