<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
   public function viewblog()
   {
      $latest = blog::latest()->take(2)->get();
      $blogs = blog::orderBy('title')->paginate(6);
      return view('home', compact('blogs', 'latest'));
   }

   public function createblog(Request $request)
   {
      $request->validate([
         'title' => 'required|string|min:3|max:20',
         'contents' => 'required|string|min:100|max:500',
         'category' => 'required|string',
         'author' => 'required|string|min:3|max:20',
         'image' => 'required|nullable|image|mimes:jpg,jpeg,png,webp|max:3072', 
      ]);


      $imagepath = null;
      if ($request->hasFile('image')) {
         $imagepath = $request->file('image')->store('photos', 'public');
      }

      blog::create([
         'title' => $request->title,
         'slug' => str::slug($request->title, '-'),
         'image' => $imagepath,
         'author' => $request->author,
         'contents' => $request->contents,
         'category' => $request->category,
      ]);

      return redirect()->route('home')->with('status', 'Blog created successfully');
   }

   public function showblog($slug)
   {
      $blog = blog::where('slug', $slug)->firstOrFail();
      return view('singleblog', compact('blog'));
   }

   public function updatepage($slug)
   {

      $blogs = blog::where('slug', $slug)->firstOrFail();
      return view('blogupdate', compact('blogs'));

   }
   public function updateblog(request $request, $slug)
   {
       $request->validate([
         'title' => 'required|string|min:3|max:20',
         'contents' => 'required|string|min:100|max:500',
         'category' => 'required|string',
         'author' => 'required|string|min:3|max:20',
         'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:3072', 
      ]);

       blog::where('slug', $slug)->update([
         'title' => $request->title,
         'slug' => str::slug($request->title, '-'),
         'contents' => $request->contents,
         'author' => $request->author,
         'category' => $request->category,
      ]);

      return redirect()->route('home')->with('status', 'Blog updated successfully');

   }

   public function deleteblog($slug)
   {
      $blogs = blog::where('slug', $slug)->delete();

      if ($blogs) {
         return redirect()->route('home')->with('status', 'Blog deleted successfully');
      }
   }
  
   public function bloggrid(){
      $blogs=blog::latest()->paginate(9);
      return view('bloggrid',compact('blogs'));
   }

}

