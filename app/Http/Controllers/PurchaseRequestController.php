<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Property;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use App\Models\PurchaseRequest;
use Illuminate\Support\Facades\Storage;

class PurchaseRequestController extends Controller
{

    public function store(Request $request)
    {

        $request->validate([
            'property_id' => 'required|exists:properties,id',
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:255',
            'status' => 'required',
        ]);
        PurchaseRequest::create($request->all());

        return response()->json(['message' => 'Purchase request created successfully']);
    }
}
