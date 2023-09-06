<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'banner' => 'required|mimes:png,jpg,webp|max:2048',
            'title' => 'required',
            'short_description' => 'required',
            'content' => 'required',
            'image' => 'required|mimes:png,jpg,webp|max:2048',
            'status' => 'required|not_in:0'
        ]);

        $res = new Blog;
        $res->user_id = Auth::user()->id;
        if ($request->hasFile('banner')) {
            $banner = $request->file('banner');
            $bannerName = time() . '.' . $banner->getClientOriginalExtension();
            $path = "banner/".$bannerName;
            Storage::disk('public')->put($path, file_get_contents($banner));
            $res->banner = $path;
        }
        $res->title = $request->title;
        $res->short_description = $request->short_description;
        $res->content = $request->content;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = "image/".$imageName;
            Storage::disk('public')->put($path, file_get_contents($image));
            $res->image = $path;
        }
        $res->status = $request->status;
        $res->published_at =$request->published_at;
        $res->meta_title = $request->meta_title;
        $res->meta_keywords = $request->meta_keywords;
        $res->meta_description = $request->meta_description;
        if($res->save()){
            return redirect()->route('blogs.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('admin.blogs.view',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blogs.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'banner' => 'mimes:png,jpg,webp|max:2048',
            'title' => 'required',
            'short_description' => 'required',
            'content' => 'required',
            'image' => 'mimes:png,jpg,webp|max:2048',
            'status' => 'required|not_in:0'
        ]);

        $res = Blog::find($id);
        $res->user_id = Auth::user()->id;
        if ($request->hasFile('banner')) {
            $banner = $request->file('banner');
            $bannerName = time() . '.' . $banner->getClientOriginalExtension();
            $path = "banner/".$bannerName;
            Storage::disk('public')->put($path, file_get_contents($banner));
            $res->banner = $path;
        }
        $res->title = $request->title;
        $res->short_description = $request->short_description;
        $res->content = $request->content;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = "image/".$imageName;
            Storage::disk('public')->put($path, file_get_contents($image));
            $res->image = $path;
        }
        $res->status = $request->status;
        $res->published_at =$request->published_at;
        $res->meta_title = $request->meta_title;
        $res->meta_keywords = $request->meta_keywords;
        $res->meta_description = $request->meta_description;
        if($res->save()){
            return redirect()->route('blogs.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = Blog::find($id)->delete();
        return redirect()->route('blogs.index');
    }
}
