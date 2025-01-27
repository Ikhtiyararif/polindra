<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{

    public function about(){
        $abouts = About::paginate();
        $social_medias = SocialMedia::paginate(10);
        return view('pages.about', [
            'social_medias' => $social_medias,
            'abouts' => $abouts,
        ]);
    }

    public function index()
    {
        $abouts = About::paginate();
        return view('pages.indexabout', [
            'abouts' => $abouts,
        ]);
    }

    public function create()
    {
        return view('pages.inputabout');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|mimes:jpg,png,jpeg',
            'description' => 'required',
        ]);

        $abouts = new About();
        $abouts->fill($request->all());


        $path = Storage::putFile(
            'public/images/abouts', $request->file('image'),
        );

        $abouts->image = $path;

        $abouts->save();

        return redirect()->route('pages.indexabout')->with(['success' => 'New Abouts content has been added']);
    }

}
