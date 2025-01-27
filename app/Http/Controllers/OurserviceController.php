<?php

namespace App\Http\Controllers;

use App\Models\Ourservice;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class OurserviceController extends Controller
{
    public function ourservice()
    {
        $ourservices = Ourservice::paginate();
        $social_medias = SocialMedia::paginate(10);
        return view('pages.our-service', [
            'social_medias' => $social_medias,
            'ourservices' => $ourservices,
        ]);
    }

    public function index()
    {
        $ourservices = Ourservice::paginate();
        return view('pages.ourservice.index', [
            'ourservices' => $ourservices,
        ]);
    }

    public function create()
    {
        return view('pages.ourservice.add');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'icontext' => 'required|max:255',
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        Ourservice::create($request->all());

        return redirect()->route('pages.ourservice.index')->with (['message' => 'New item has been added']);
    }

}
