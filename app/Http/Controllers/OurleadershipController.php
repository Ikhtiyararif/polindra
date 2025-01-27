<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\Request;
use App\Models\Ourleadership;
use Illuminate\Support\Facades\Storage;

class OurleadershipController extends Controller
{
    public function ourlead()
    {
        $ourleaderships = Ourleadership::paginate();
        $social_medias = SocialMedia::paginate(10);
        return view('pages.ourleadership', [
            'social_medias' => $social_medias,
            'ourleaderships' => $ourleaderships,
        ]);
    }

    public function index()
    {
        $ourleaderships = Ourleadership::paginate();
        return view('pages.ourleadership.index', [
            'ourleaderships' => $ourleaderships,
        ]);
    }


    public function create()
    {
        return view('pages.ourleadership.add', []);
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'image' => 'required|mimes:jpg,png,jpeg',
            'position' => 'required|max:255',
            'description' => 'required',
        ]);

        $ourleaderships = new Ourleadership();
        $ourleaderships->fill($request->all());

        $path = Storage::putFile(
            'public/images/ourleadership', $request->file('image'),
        );
        
        $ourleaderships->image = $path;

        $ourleaderships->save();

        return redirect()->route('pages.ourleadership.index')->with (['success' => 'New item has been added']);
    }

    public function ourview($name)
    {
        {
            $social_medias = SocialMedia::paginate(10);
            $ourleaderships = Ourleadership::where('name', $name)->first();
            return view('pages.ourleadershipview', compact('ourleaderships', 'social_medias'));
        }
    }
}
