<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;
use App\Models\ForumDiscussion;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forums = Forum::all();
        return view('forum.index', compact('forums'));
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
            return redirect()->route('forum.show', $id);
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
        $discussion = new ForumDiscussion;
        $discussion->forum_id = $id;
        $discussion->user_id = Auth::id();
        $discussion->message = $request->message;
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

    public function __invoke(Request $request)
    {
        $reviews = Review::search('rating')
            ->multiSearch('course', 'name')
            ->multiSearch('user', 'name')->latest()->get();

        // passing variabel $reviews kedama view.
        return view('landing.review.index', compact('reviews'));
    }
}
