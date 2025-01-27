<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\About;
use App\Models\Category;
use App\Models\Contact;
use App\Models\District;
use App\Models\Property;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Doctrine\DBAL\Types\Types;

class CustomerController extends Controller
{
    public function home(Request $request){
        $keyword = $request->query('keyword');
        $properties = Property::when($keyword, function($query, $keyword) {
            return $query->where('name', 'like', '%'.$keyword.'%');
        });

        $categories = Category::paginate(10);
        $properties = Property::paginate(10);
        $district = District::paginate(10);
        $types = Type::paginate(10);
        $social_medias = SocialMedia::paginate(10);
        $recommended_properties = Property::where('recommended', '1')->take(15)->get();
        return view('pages.home', [
            'types' => $types,
            'district' => $district,
            'social_medias' => $social_medias,
            'properties' => $properties,
            'categories' => $categories,
            'recommended_properties' => $recommended_properties,
        ]);
    }
    public function contactus(){
        $contacts = Contact::paginate(5);
        $social_medias = SocialMedia::paginate(10);
        return view('pages.contactus', [
            'contacts' => $contacts,
            'social_medias' => $social_medias,
        ]);
    }
   

    // public function category()
    // {
    //     $types = Type::paginate(10);
    //     $social_medias = SocialMedia::paginate(10);
    //     $categories = Category::paginate(10);
    //     return view('pages.category', [
    //         'categories' => $categories,
    //         'social_medias' => $social_medias, 
    //         'types' => $types,
    //     ]);
    // }

    public function viewcategory($name)
    {

        if(Category::where('name', $name)->exists())
        {
            $categories = Category::paginate(10);
            $types = Type::paginate(10);
            $social_medias = SocialMedia::paginate(10);
            $recommended_properties = Property::paginate(10);
            $categories = Category::where('name', $name)->first();
            $properties = Property::where('category_id', $categories->id)->paginate(10);
            return view('pages.index', compact('categories','properties', 'types','recommended_properties', 'social_medias', 'categories'));
        }
        else{
            return redirect('/')->with('status', "Doesnot Exists");
        }
    }

    public function propertyview($category_name, $property_name)
    {
        if(Category::where('name', $category_name)->exists())
        {
            if(Property::where('name', $property_name)->exists())
            {
                $social_medias = SocialMedia::paginate(10);
                $properties = Property::where('name', $property_name)->first();
                return view('pages.view', compact('properties', 'social_medias'));
            }
            else{
                return redirect('/')->with('status', "Link was broken");
            }
    }
    else{
        return redirect('/')->with('status', "Category not found");
    }
    }


    public function purchase()
    {
        
    }

}
