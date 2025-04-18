<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flower;


class FlowersController extends Controller
{
    public function index()
    {
        $flower = Flower::all();
        return view("flower", compact("flower"));
    }

    public function flowercreate()
    {
        return view("flowercreate");
    }
    
    public function flowershow(Flower $flower)
    {
        return view("flowershow", compact("flower"));
    }


    // add new image section

    public function store(Request $request)
    {
        $flower = new Flower();

        if ($request->hasFile('blog-img')) {
            $imagePath = $request->file('blog-img')->store('uploads', 'public');
            $flower->image = "uploads/" . basename($imagePath); 
        } else {
            $flower->image = '';
        }

        $flower->save();

        return redirect("/flower");
    }

    public function floweredit(Flower $flower)
    {
        return view("floweredit", compact("flower"));
    }

    public function update(Request $request, Flower $flower)
    {
        // Validate request
        $request->validate([
            'blog-img' => 'image|mimes:jpeg,png,jpg,svg,gif|max:2048'
        ]);
    
        // Check if a new image is uploaded
        if ($request->hasFile('blog-img')) {
            $imagePath = $request->file('blog-img')->store('uploads', 'public');
            $flower->image = "uploads/" . basename($imagePath);
        }
    
        // Save updated image path
        $flower->save();
    
        return redirect("/flower");
    }


    public function destroy(Flower $flower)
    {
        $flower->delete();
        return redirect('/flower');
    }


}
