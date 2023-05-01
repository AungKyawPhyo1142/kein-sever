<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function createBlog(Request $req){

        $this->checkValidation($req);

        $data = $this->getPostData($req);

        // write code to store $data inside the database
        post::create($data);        

        return back()->with(['createSuccess'=>'Post createdsuccessfully!']);

    }

    // check validation    
    public function checkValidation(Request $req){
        Validator::make($req->all(),[
            'blogTitle' => 'required',
            'blogContent' => 'required',
            'blogCategory' => 'required',
            'blogDescription' => 'required',
            'blogImage' => 'nullable|mimes:jpeg,png,jpg,gif,svg'
            ])->validate();
    }

    // get post data
    public function getPostData(Request $req){
        return [
            'title' => $req->blogTitle,
            'content' => $req->blogContent,
            'category' => $req->blogCategory,
            'description' => $req->blogDescription,
            'image' => $req->blogImage
        ];
    }
}
