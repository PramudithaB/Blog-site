<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog; // Import the Blog model


class HomeController extends Controller
{
    public function admindashboard(){
        $blogs = Blog::all(); // Assuming you have a Blog model

        return view('admindashboard', compact('blogs')); // Passing $blogs to the view
    }


    public function createblogs(){
        return view('createblogs');
    }


    public function store(Request $request){
        
        // Validation (optional but recommended)
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image type and size
        ]);
    
        $blog = new Blog();
        $blog->name = $request->name;
        $blog->title = $request->title;
        $blog->category = $request->category;

        $blog->description = $request->description;
    
        // Check if a file has been uploaded
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); 
            $filename = time() . '.' . $extension; 
    
            $file->move(public_path('images'), $filename); // Save the image in the 'public/images' folder
    
            $blog->image = 'images/' . $filename;  // Relative path to the public folder
        }
    
        // Save the blog data to the database
        $blog->save();
    
        return redirect()->route('admindashboard');
    }



    public function edit($blog_id) {
        $blog = Blog::where('id', $blog_id)->first();
        return view('edit', compact('blog'));
    }
    

    public function editblogs(Request $request,$blog_id)
     {
        $blog = Blog::where('id',$blog_id)->first();

       $blog->name = $request->name;
       $blog->title = $request->title;
       $blog->category = $request->category;
       $blog->description = $request->description;

       $blog->save();


   
    
       return redirect()->route('admindashboard');
      
        
     }
    


    public function delete($blog_id){
        Blog::where('id', $blog_id)->delete();
        return redirect()->route('admindashboard');
    }


    
    public function dashboard(){
        $blogs = Blog::all();
       return view('dashboard', compact('blogs'));
   }


   public function search(Request $request)
   {
       $searchQuery = $request->input('search');
       $blogs = Blog::where('name', 'like', "%{$searchQuery}%")
                    ->orWhere('title', 'like', "%{$searchQuery}%")
                    ->orWhere('category', 'like', "%{$searchQuery}%")
                    ->get();
                    
   
       return view('dashboard', compact('blogs'));
       return view('welcome', compact('blogs'));

   }



   public function imagedashboard($id) {
    $blog = Blog::find($id); // Assuming you have a Blog model
    return view('imagedashboard', compact('blog')); // Pass the $blog variable
}



public function welcome()
{
    // Fetch all blog records where category is 'Art'
    $blogs = Blog::all();
       return view('welcome', compact('blogs')); // Pass the filtered blogs to the view
}


public function Art(){
    $blogs = Blog::where('category', 'Art')->get();

return view('Art',compact('blogs'));
}


public function Tecnology(){
    $blogs = Blog::where('category','Tecnology')->get();
    return view('Tecnology',compact('blogs'));
}


public function Travel(){
    $blogs = Blog::where('category','Travel')->get();
    return view('Travel',compact('blogs'));
}


public function Sport(){
    $blogs = Blog::where('category','Sport')->get();
    return view('Sport',compact('blogs'));
}


public function index(){
    return '';
}


}
