<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    
    public function index()
    {
        $posts = DB::table('posts')->get();
        return view('post',['posts' => $posts]);
    }

    public function create (){
        return view('create');
    }

    public function store(Request $input){
        $input->validate([
            'nameProduct'=>'required',
            'description'=>'required',
            'categorie'=>'required',
        ]);
        $query = DB::table('posts')->insert([
            'nameProduct' => $input->nameProduct,
            'description' => $input->description,
            'categorie' => $input->categorie
        ]);

        if ($query){
            return back()->with('success','Data have been succesfuly inserted');
        }else{
            return back()->with('fail','something went wrong ');
        }
    }

    public function delete($id)
    {
        $post = post::findOrFail($id);

        $post->delete();

        return redirect(route('post'));
    }

    public function edit($id){
        $post =  post::findOrFail($id);

        return view('edit',['post' => $post]);
    }
    
    public function update(Request $input)
    {
        $query= DB::table('posts')->where('id', $input->id)->update([
            'nameProduct' => $input->nameProduct,
            'description' => $input->description,
            'categorie' => $input->categorie
        ]);
    
        return redirect(route('post'));
        if ($query){
            return back()->with('success','oook');
        }else{
            return back()->with('fail','no  ');
        }
    } 
    
}
