<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\Request;
use App\Models\Privacypolicy;
use Illuminate\Support\Facades\Storage;

class PrivacypolicyController extends Controller
{
    public function privacypolicy(){
        $privacypolicies = Privacypolicy::paginate();
        $social_medias = SocialMedia::paginate(10);
        return view('pages.privacypolicy', [
            'privacypolicies' => $privacypolicies,
            'social_medias' => $social_medias,
        ]);
    }

    public function index()
    {
        $privacypolicies = Privacypolicy::paginate();
        return view('pages.privacypolicy.index', [
            'privacypolicies' => $privacypolicies,
        ]);
    }

    public function create()
    {
        return view('pages.privacypolicy.add', []);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        Privacypolicy::create($request->all());

        return redirect()->route('pages.privacypolicy.index')->with (['success' => 'New item has been added']);
    }

}
