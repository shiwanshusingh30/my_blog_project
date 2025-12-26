<?php

namespace App\Http\Controllers;
use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogController extends Controller
{
   // home page
   public function viewblog()
   {
      $blogs = Blog::orderBy('created_at', 'desc')->get();

      $latest = Blog::latest()->take(3)->get();

      // ADD THIS LINE
  

      return view('home', compact('blogs', 'latest'));
   }


   //   create blog
   public function createblog(Request $request)
   {
      $request->validate([
         'title' => 'required|string|min:5|max:50',
         'contents' => 'required|string|min:100|max:1000',
         'category' => 'required|string',
         'author' => 'required|string|min:3|max:25',
         'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:3072',
      ]);

      $imagepath = null;
      if ($request->hasFile('image')) {
         $imagepath = $request->file('image')->store('photos', 'public');
      }

      Blog::create([
         'title' => $request->title,
         'slug' => Str::slug($request->title),
         'contents' => $request->contents,
         'image' => $imagepath,
         'author' => $request->author,
         'category' => $request->category,
      ]);

      return redirect()
         ->route('dashboard')
         ->with('success', 'Blog added successfully');

   }

   //  single view page
   public function showblog($slug)
   {

     
      $blog = blog::where('slug', $slug)->firstOrFail();
      $related = Blog::where('category', $blog->category)
         ->where('slug', '!=', $blog->slug)
         ->latest()
         ->take(3)
         ->get();


      return view('singleblog', compact('blog','related'));
   }
   // update page
   public function updatepage($slug)
   {

      $blogs = blog::where('slug', $slug)->firstOrFail();
      return view('blogupdate', compact('blogs'));

   }
   // update blog
   public function updateblog(request $request, $slug)
   {
       $request->validate([
         'title' => 'required|string|min:5|max:50',
         'contents' => 'required|string|min:100|max:1000',
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

      return redirect()->route('home');

   }
   // delete
   public function deleteblog($slug)
   {
      $blogs = blog::where('slug', $slug)->delete();

      if ($blogs) {
         return redirect()->route('dashboard');
      }
   }
//   blog grid page
   public function bloggrid(){
      $blogs=blog::orderBy('created_at','desc')->paginate(8);
      return view('bloggrid',compact('blogs'));
   }
// dashboard
   public function blogcount()
   {
      $count = Blog::count();
      $lastMonthCount = Blog::where('created_at', '>=', now()->subMonth())->count();
      $thisWeekCount = Blog::where('created_at', '>=', now()->startOfWeek())->count();
      $latest = Blog::latest()->take(6)->get();
      $latests = Blog::latest()->paginate(10); 

      $recentUpdatedBlogs = Blog::orderBy('title', 'desc')->take(6)->get();

      // chart js
      $categoryData = Blog::select('category', DB::raw('count(*) as total'))
         ->groupBy('category')
         ->get();

      $categoryNames = $categoryData->pluck('category'); 
      $categoryCounts = $categoryData->pluck('total');

   // user table
      $users = Blog::select(
         'author',
         DB::raw('COUNT(*) as total_blogs'),
         DB::raw('DATE(MAX(created_at)) as latest_blog_date')
      )
         ->groupBy('author')
         ->orderByDesc('total_blogs')
         ->get();


      return view('admin.dashboard', compact(
         'count',
         'lastMonthCount',
         'thisWeekCount',
         'latest',
         'latests',
         'recentUpdatedBlogs',
         'categoryNames',
         'categoryCounts',
         'users'
      ));
   }



}

