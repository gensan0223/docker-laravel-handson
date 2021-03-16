<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function hello()
    {
        echo 'hello world<br>';
        echo 'コントローラーから';
    }

    public function index()
    {
        $list = \DB::table('posts')->get();
        return view('posts.index', ['list'=>$list]);
    }
    
    public function createForm()
    {
        return view('posts.createForm');
    }

    public function create(Request $request)
    {
        $post = $request->input('newPost');
        \DB::table('posts')->insert([
            'post' => $post
        ]);


        return redirect('/');
    }

    public function updateForm($id)
        {
            $post = \DB::table('posts')
                ->where('id',$id)
                ->first();
            return view('posts.updateForm', compact('post'));
        }
    
    public function delete($id)
        {
            \DB::table('posts')
                ->where('id', $id)
                ->delete();

            return redirect('/');
        }
}
