<?php

namespace App\Http\Controllers;

use App\Models\Term;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class TermController extends Controller
{
    public function terms(){
        $terms = Term::paginate();
        $social_medias = SocialMedia::paginate();
        return view('pages.term', [
            'terms' => $terms,
            'social_medias' => $social_medias,
        ]);

    }

    public function index()
    {
        $terms = Term::paginate();
        return view('pages.term.index', [
            'terms' => $terms,
        ]);
    }

    public function create()
    {
        return view('pages.term.add',[]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        Term::create($request->all());

        return redirect()->route('pages.term.index')->with(['success' => 'New item has been added']);
    }

}
