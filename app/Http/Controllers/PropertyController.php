<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Regency;
use App\Models\Village;
use App\Models\Category;
use App\Models\District;
use App\Models\Property;
use App\Models\Province;
use Illuminate\Http\Request;
use App\Models\PurchaseRequest;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    public function index(){
        $properties = Property::paginate(10);
        return view('pages.property.index', [
            'properties' => $properties,
        ]);
    }

    public function add()
    {
        $province=Province::all();
        $regency=Regency::all();
        $district=District::all();
        $village=Village::all();
        $type=Type::all();
        $category=Category::all();

        return view('pages.property.add', compact('province', 'regency', 'district', 'village', 'type', 'category'));

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'image' => 'required|mimes:jpg,png,jpeg',
            'price' => 'required',
            'type_id' => 'required',
            'category_id' => 'required',
            'description' => 'required|max:255',
            'address' => 'required',
            'province_id' => 'required',
            'regency_id' => 'required',
            'district_id' => 'required',
            'year' => 'required',
            'interior' => 'required',
            'electricity' => 'required',
            'parking_lot' => 'required',
            'id_certificate_type' => 'required',
            'sale_type_id' => 'required',
            'floor' => 'required',
            'developer' => 'required',
            'room_number' => 'required',
            'bathroom' => 'required',
            'slug' => 'required|unique:properties',
            'building_area' => 'required',
            'hadap' => 'required',
            'kt' => 'required',
            'km' => 'required',
            'lb' => 'required',
            'lt' => 'required',
            'jumlah_lantai' => 'required',
        ]);


        $property = new Property();
        $property->fill($request->all());

        if($request->recommended === 'on') {
            $property->recomended = true;
        } else {
            $property->recommended = false;
        }

        $path = Storage::putFile(
            'public/images/properties',
            $request->file('image'),
        );
        $property->image = $path;

        $property->save();

        return redirect()->route('pages.property.index')->with(['success' => 'New Property has been added.']);
    }

    public function province(){
        $data = Province::where('name', 'LIKE', '%'.request('q').'%')->paginate(10);

        return response()->json($data);
    }

    public function regency($id){
        $data = Regency::where('province_id', $id)->where('name', 'LIKE', '%'.request('q').'%')->paginate(10);

        return response()->json($data);
    }

    public function district($id){
        $data = District::where('regency_id', $id)->where('name', 'LIKE', '%'.request('q').'%')->paginate(10);

        return response()->json($data);
    }
    
    public function village($id){
        $data = Village::where('district_id', $id)->where('name', 'LIKE', '%'.request('q').'%')->paginate(10);

        return response()->json($data);
    }

    

}
