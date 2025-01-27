<?php

namespace App\Http\Controllers;

use App\Models\Joinus;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class JoinusController extends Controller
{
    public function joinus()
    {
        $joinus = Joinus::paginate();
        $social_medias = SocialMedia::paginate(10);
        return view('pages.joinus', [
            'joinus' => $joinus,
            'social_medias' => $social_medias,
        ]);
    }
}
