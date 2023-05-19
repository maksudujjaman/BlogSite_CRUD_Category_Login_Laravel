<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Blog;


class WelcomeController extends Controller
{
    private $blogs, $blog, $fullName, $data=[], $i, $result, $index;

    public function index()
    {
        $this->blogs = Blog::all();
        return view('home', ['blogs' => $this->blogs]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function detail($id)
    {

        $this->blog = Blog::find($id);
        return view('detail', ['blog' => $this->blog]);
    }

    public function category($id)
    {
        $this->blogs = Blog::where('category_id', $id)->get();
        return view('category', ['blogs' => $this->blogs]);
    }

    public function makeFullName(Request $request)
    {
        $this->fullName = $request->first_name.' '.$request->last_name;
        return back()->with('message', $this->fullName);
    }

    public function passwordGenerator()
    {
        return view('password-generator');
    }

    public function makePassword(Request $request)
    {
        $this->data = ['a','@','#','1','$','&','B','C','Z','X','c','v','b','t','r','5','7','3','2','6','8'];

        for ($this->i = 0; $this->i < $request->password_length; $this->i++ )
        {
            $this->index = rand(0, 20);
            $this->result .= $this->data[$this->index];
        }
//        return $this->result;
        return back()->with('password', $this->result);
    }
}
