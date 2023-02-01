<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{

    public function index()
    {
        return view('adminView/blog', [
            'tittle' => 'RSGH Blog',
            'posts' => Blog::latest()->filter(request(['search', 'category']))->paginate(3)->withQueryString()
        ]);
    }


    public function create()
    {
        return view('adminView/blogCreate', [
            'tittle' => 'Tambah Post',
            'categories' => PostCategory::all()
        ]);
    }


    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:blogs',
            'category_id' => 'required',
            'image' => 'image|file|max:5120',
            'body' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(Strip_tags($request->body), 200);

        Blog::create($validatedData);

        return redirect('/blog')->with('pesan', 'Post berhasil ditambah');
    }

    public function show(Blog $blog)
    {
        return view('adminView/blogDetail', [
            'tittle' => 'Detail Post',
            'data' => $blog
        ]);
    }


    public function edit(Blog $blog)
    {
        return view('adminView/blogEdit', [
            'tittle' => 'Edit Post',
            'post' => $blog,
            'categories' => PostCategory::all()
        ]);
    }

    public function update(Request $request, Blog $blog)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:5120',
            'body' => 'required',
        ];

        if ($request->slug != $blog->slug) {
            $rules['slug'] = 'required|unique:blogs';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(Strip_tags($request->body), 200);

        Blog::where('id', $blog->id)
            ->update($validatedData);

        return redirect('/blog')->with('pesan', 'Post berhasil di Update');
    }


    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            Storage::delete($blog->image);
        }

        Blog::destroy($blog->id);

        return redirect('/blog')->with('pesan', 'Post berhasil di hapus');
    }
}
