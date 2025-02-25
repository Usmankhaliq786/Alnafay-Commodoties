<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Blog::all();
        return view('admin_theme.blogs.index', compact('posts'));
    }

    public function create()
    {
        return view('admin_theme.blogs.create');
    }

   
    public function store(Request $request)
{
    // Validate the incoming request data
    $validator = Validator::make($request->all(), [
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'category' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Optional: set a max file size
    ]);

    // Redirect back with errors if validation fails
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Prepare data for the blog post
    $data = $request->only(['title', 'content', 'category']);

    // Check if an image file was uploaded
    if ($request->hasFile('image')) {
        // Generate a unique filename based on the current timestamp
        $fileName = time() . '.' . $request->image->extension();

        // Save the image in the public/bloges directory
        $request->image->move(public_path('bloges'), $fileName);

        // Store the relative path in the database
        $data['image'] = 'bloges/' . $fileName;
    }

    // Create a new blog post in the database
    Blog::create($data);

    // Redirect to the blogs index with a success message
    return redirect()->route('blogs.index')->with('success', 'Blog post added successfully.');
}


    public function showByTitle($title)
    {
        $blog = Blog::where('title', str_replace('-', ' ', $title))->firstOrFail();
        $recentBlogs = Blog::latest()->take(5)->get();
        $categories = Blog::distinct()->pluck('category');

        return view('theme.blog', compact('blog', 'recentBlogs', 'categories'));
    }

    public function show($id)
    {
        $post = Blog::findOrFail($id);
        return view('admin_theme.blogs.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Blog::findOrFail($id);
        return view('admin_theme.blogs.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $post = Blog::findOrFail($id);
        $data = $request->only(['title', 'content', 'category']);

        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(storage_path('app/public/uploads'), $fileName);
            $data['image'] = 'uploads/' . $fileName;
        }

        $post->update($data);

        return redirect()->route('blogs.index')->with('success', 'Blog post updated successfully.');
    }

    public function destroy($id)
    {
        $post = Blog::findOrFail($id);
        $post->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog post deleted successfully.');
    }
}
