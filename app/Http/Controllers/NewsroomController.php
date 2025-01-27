<?php

namespace App\Http\Controllers;

use App\Models\Newsroom;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsroomController extends Controller
{
    public function news()
    {
        $newsroom = Newsroom::paginate();
        $social_medias = SocialMedia::paginate(10);
        return view('pages.newsroom', [
            'social_medias' => $social_medias,
            'newsroom' => $newsroom,
        ]);
    }

    public function index()
    {
        $newsroom = Newsroom::paginate();
        return view('pages.newsroom.index', [
            'newsroom' => $newsroom,
        ]);
    }


    public function create()
    {
        return view('pages.newsroom.add', []);
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|mimes:jpg,png,jpeg',
            'description' => 'required',
            'trending' => 'required',
        ]);

        $newsroom = new Newsroom();
        $newsroom->fill($request->all());

        $path = Storage::putFile(
            'public/images/newsroom', $request->file('image'),
        );
        
        $newsroom->image = $path;

        $newsroom->save();

        return redirect()->route('pages.newsroom.index')->with (['success' => 'New item has been added']);
    }


    public function newsroomview($title)
    {
        {
            $social_medias = SocialMedia::paginate(10);
            $newsroom = Newsroom::where('title', $title)->first();
            return view('pages.newsroomview', compact('newsroom', 'social_medias'));
        }
    }
}
