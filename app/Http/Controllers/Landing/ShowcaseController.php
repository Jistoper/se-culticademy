<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Showcase;
use Illuminate\Http\Request;

class ShowcaseController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $showcases = Showcase::multiSearch('course', 'name')
        ->multiSearch('user', 'name')->latest()->get();

        // passing variabel $showcases kedalam view.
        return view('landing.showcase.index', compact('showcases'));
    }
}
