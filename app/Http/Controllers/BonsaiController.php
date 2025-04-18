<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bonsai;

class BonsaiController extends Controller
{
    public function index()
    {
        $bonsai = Bonsai::all();
        return view("bonsai", compact("bonsai"));
    }

    public function bonsaicreate()
    {
        return view("bonsaicreate");
    }
    
    public function bonsaishow(Bonsai $bonsai)
    {
        return view("bonsaishow", compact("bonsai"));
    }


    // add new image section

    public function store(Request $request)
    {
        $bonsai = new Bonsai();

        if ($request->hasFile('blog-img')) {
            $imagePath = $request->file('blog-img')->store('uploads', 'public');
            $bonsai->image = "uploads/" . basename($imagePath); 
        } else {
            $bonsai->image = '';
        }

        $bonsai->save();

        return redirect("/bonsai");
    }

    public function bonsaiedit(Bonsai $bonsai)
    {
        return view("bonsaiedit", compact("bonsai"));
    }

    public function update(Request $request, Bonsai $bonsai)
    {
        // Validate request
        $request->validate([
            'blog-img' => 'image|mimes:jpeg,png,jpg,svg,gif|max:2048'
        ]);
    
        // Check if a new image is uploaded
        if ($request->hasFile('blog-img')) {
            $imagePath = $request->file('blog-img')->store('uploads', 'public');
            $bonsai->image = "uploads/" . basename($imagePath);
        }
    
        // Save updated image path
        $bonsai->save();
    
        return redirect("/bonsai");
    }


    public function destroy(Bonsai $bonsai)
    {
        $bonsai->delete();
        return redirect('/bonsai');
    }
}
