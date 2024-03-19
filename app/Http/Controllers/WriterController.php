<?php

namespace App\Http\Controllers;
use App\Models\DataBlogs;
use Illuminate\Support\Facades\Validator; 
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function home()
    {
        $isHomePage = true;
        return view('home', compact('isHomePage'));
    }

    public function about()
    {
        $isHomePage = false;
        return view('about', compact('isHomePage'));
    }

    public function blogs()
    {
        $isHomePage = false;
        $blogs = DataBlogs::all();
        return view('blogs', compact('isHomePage', 'blogs'));
    }

    public function detailBlogs($id)
    {
        $isHomePage = false;
        $blog = DataBlogs::findOrFail($id);
        return view('blogs_detail', compact('isHomePage', 'blog'));
    }

    public function createBlogs()
    {
        $isHomePage = false;
        return view('create_blogs', compact('isHomePage'));
    }

      public function storeBlog(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan dengan aturan validasi yang Anda inginkan untuk gambar
        ]);

        // Jika validasi gagal, kembalikan respon dengan pesan kesalahan
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        $blog = new DataBlogs();
        $blog->title = $request->input('title');
        $blog->author = $request->input('author');
        $blog->content = $request->input('content');
        $blog->image = $imageName;
        $blog->save();

        // Redirect kembali ke halaman daftar blog dengan pesan sukses
        return redirect()->route('blogs')->with('success', 'Blog has been created successfully.');
    }

    public function searchBlogs(Request $request)
{
    $isHomePage = false;
    $search = $request->input('search');
    $blogs = DataBlogs::where('title', 'like', '%' . $search . '%')->get();
    return view('blogs', compact('isHomePage', 'blogs'));
}
}

