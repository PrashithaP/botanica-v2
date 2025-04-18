<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aloe;


class AloeController extends Controller
{
    public function index()
    {
        $aloe = Aloe::all();
        return view("aloe", compact("aloe"));
    }

    public function aloecreate()
    {
        return view("aloecreate");
    }
    
    public function aloeshow(Aloe $aloe)
    {
        return view("aloeshow", compact("aloe"));
    }


    // add new image section

    public function store(Request $request)
    {
        $aloe = new Aloe();

        if ($request->hasFile('blog-img')) {
            $imagePath = $request->file('blog-img')->store('uploads', 'public');
            $aloe->image = "uploads/" . basename($imagePath); 
        } else {
            $aloe->image = '';
        }

        $aloe->save();

        return redirect("/aloe");
    }

    public function aloeedit(Aloe $aloe)
    {
        return view("aloeedit", compact("aloe"));
    }

    public function update(Request $request, Aloe $aloe)
    {
        // Validate request
        $request->validate([
            'blog-img' => 'image|mimes:jpeg,png,jpg,svg,gif|max:2048'
        ]);
    
        // Check if a new image is uploaded
        if ($request->hasFile('blog-img')) {
            $imagePath = $request->file('blog-img')->store('uploads', 'public');
            $aloe->image = "uploads/" . basename($imagePath);
        }
    
        // Save updated image path
        $aloe->save();
    
        return redirect("/aloe");
    }


    public function destroy(Aloe $aloe)
    {
        $aloe->delete();
        return redirect('/aloe');
    }

}
