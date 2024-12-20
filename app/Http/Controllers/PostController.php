<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(Request $request)
    {
        // Ambil kategori yang dipilih dari query parameter
        $category_id = $request->input('category_id');

        // Jika kategori dipilih, filter berdasarkan kategori
        if ($category_id) {
            $posts = Post::with('category')
                         ->where('category_id', $category_id)
                         ->latest()
                         ->paginate(10);
        } else {
            // Jika tidak ada kategori yang dipilih, tampilkan semua posts
            $posts = Post::with('category')->latest()->paginate(10);
        }

        // Ambil semua kategori untuk ditampilkan pada form pencarian
        $categories = Category::all();

        return view('posts.index', compact('posts', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|unique:posts,title',
            'body' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        // Handle upload gambar
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/posts'), $imageName);
        } else {
            $imageName = null;
        }

        Post::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'body' => $request->body,
            'image' => $imageName, // Simpan nama file gambar
        ]);

        return redirect()->route('posts')->with('success', 'Postingan berhasil ditambahkan.');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|unique:posts,title,' . $post->id,
            'body' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        // Hapus gambar lama jika checkbox dipilih
        if ($request->has('delete_image') && $post->image) {
            $oldImagePath = public_path('images/posts/' . $post->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
            $post->image = null; // Set kolom gambar menjadi null
        }

        // Handle upload gambar baru (jika ada)
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($post->image) {
                $oldImagePath = public_path('images/posts/' . $post->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/posts'), $imageName);
        } else {
            $imageName = $post->image; // Gunakan nama file gambar lama
        }

        $post->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'body' => $request->body,
            'image' => $imageName, // Simpan nama file gambar baru atau null
        ]);

        return redirect()->route('posts')->with('success', 'Postingan berhasil diupdate.');
    }

    public function destroy(Post $post)
    {
        // Hapus gambar jika ada
        if ($post->image) {
            $oldImagePath = public_path('images/posts/' . $post->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        $post->delete();
        return redirect()->route('posts')->with('success', 'Postingan berhasil dihapus.');
    }
}
