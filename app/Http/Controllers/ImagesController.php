<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImagesController extends Controller
{
    public function index()
    {
        $image = Image::all();
        return view("snake", compact("image"));
    }

    public function create()
    {
        return view("create");
    }
    public function show(Image $image)
    {
        return view("show", compact("image"));
    }


    // add new image section

    public function store(Request $request)
    {
        $image = new Image();

        if ($request->hasFile('blog-img')) {
            $imagePath = $request->file('blog-img')->store('uploads', 'public');
            $image->image = "uploads/" . basename($imagePath); 
        } else {
            $image->image = '';
        }

        $image->save();

        return redirect("/snake");
    }

    public function edit(Image $image)
    {
        return view("edit", compact("image"));
    }

    public function update(Request $request, Image $image)
    {
        // Validate request
        $request->validate([
            'blog-img' => 'image|mimes:jpeg,png,jpg,svg,gif|max:2048'
        ]);
    
        // Check if a new image is uploaded
        if ($request->hasFile('blog-img')) {
            $imagePath = $request->file('blog-img')->store('uploads', 'public');
            $image->image = "uploads/" . basename($imagePath);
        }
    
        // Save updated image path
        $image->save();
    
        return redirect("/snake");
    }
    

    public function destroy(Image $image)
    {
        $image->delete();
        return redirect('/snake');
    }
}
