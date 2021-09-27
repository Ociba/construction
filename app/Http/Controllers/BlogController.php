<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use DB;
use Auth;

class BlogController extends Controller
{
     /** 
     * This function gets the blog after login
    */
    protected function getBlog(){
        $get_blog_information =DB::table('blogs')->get();
        return view('admin.blog', compact('get_blog_information'));
    }
    /** 
     * This function gets blog for front pages
    */
    protected function getFrontBlog(){
        $get_blog_information =DB::table('blogs')->limit('4')->latest()->get();
        return view('pages.blog', compact('get_blog_information'));
    }
    /** 
     * This funcion gets the blog for front pages
    */
    protected function getPost(){
        $get_post_information =DB::table('blogs')->limit('2')->latest()->get();
        return view('pages.post', compact('get_post_information'));
    }
    /** 
     * This function creates the blogs
    */
    private function createBlog(){
        $blog_photo = request()->photo;
        $blog_photo_original_name = $blog_photo->getClientOriginalName();
        $blog_photo->move('blog_photos/',$blog_photo_original_name);

        $blog_obj =new Blog;
        $blog_obj ->title         =request()->title;
        $blog_obj ->description   =request()->description;
        $blog_obj ->photo         =$blog_photo_original_name;
        //$blog_obj ->created_by    =Auth::user()->id;
        $blog_obj ->save();
        return redirect()->back()->with('msg','You have successfully created blog');
    }
    /** 
     * This funcion validates the blog created
    */
    protected function validateBlog(){
        if(empty(request()->title)){
            return redirect()->back()->withErrors('Enter Title to continue');
        }elseif(empty(request()->description)){
            return redirect()->back()->withErrors('Enter about the blog to continue');
        }elseif(empty(request()->photo)){
            return redirect()->back()->withErrors('Upload the photo to continue');
        }else{
           return $this->createBlog();
        }
    }
    /** 
     * This function edits the blog created
    */
    protected function editBlog($blog_id){
        $get_blog_to_edit=DB::table('blogs')->where('id',$blog_id)->get();
        return view('admin.edit_blog', compact('get_blog_to_edit'));
    }
    /** 
     * This function updates the blog edited
    */
    protected function updateBlog($blog_id){
        Blog::where('id', $blog_id)->update(array(
            'title'         =>request()->title,
            'description'   =>request()->description,
        ));
        return redirect()->back()->with('msg', 'You have updated the blog successfully');
    }
    /** 
     * This function deletes the blog permanently
    */
    protected function deleteBlog($blog_id){
        Blog::where('id',$blog_id)->delete();
        return redirect()->back()->with('msg', 'You have deleted the blog successfully');
    }
}
