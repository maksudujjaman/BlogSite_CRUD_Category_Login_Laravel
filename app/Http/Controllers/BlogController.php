<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

//use DB; // query builder use korar jonne

use function Nette\Utils\insert;

class BlogController extends Controller
{
    private $blogs, $blog, $categories;

    public function index()
    {
        $this->categories = Category::all();
        return view('blog.index', ['categories' => $this->categories]);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);

        Blog::newBlog($request);
        return back() ->with('message', 'Blog info Successfully Inserted');
    }

    public function manage()
    {
        $this->blogs = Blog::all();
        return view('blog.manage', ['blogs' => $this->blogs]);
    }

    public function edit($id)
    {
        $this->categories = Category::all();
        $this->blog = Blog::find($id);
        return view('blog.edit', ['blog' => $this->blog, 'categories' => $this->categories]);
    }

    public function update(Request $request, $id)
    {
        if ($request->file('image'))
        {
            $this->validate($request, [
               'image' => 'image'
            ]);
        }

        Blog::updateBlog($request, $id);
        return redirect('/blog/manage') ->with('message', 'Blog Info Updated Successfully');
    }

    public function delete($id)
    {
        Blog::deleteBlog($id);
        return back() ->with('message', 'Blog Info Deleted Successfully');
    }
}
