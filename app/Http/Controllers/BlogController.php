<?php

namespace App\Http\Controllers;

use App\post;
use App\postImage;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogController extends Controller
{
	public function home() {
		$posts = post::all()->sortByDesc('created_at');
		return view('blog.frontend.home',[
			'posts' => $posts
		]);
    }

	public function postDetails( $pid ) {
		$post = post::find($pid);
		$post->views = $post->views + 1;
		$post->save();

		return view('blog.frontend.posts.details',[
			'post' => $post
		]);
    }

    //backend stuff

	public function posts() {
		$posts = post::all()->sortByDesc('created_at');
		return view('blog.backend.posts.manage',[
			'posts' => $posts
		]);
	}

	public function addPost() {
		return view('blog.backend.posts.add');
	}


	public function deletePost( $pid ) {
		$post = post::find($pid);
		foreach($post->Images as $image){

			$urlArray = explode("/", $image->url);
			$fileName = $urlArray[3]. "/" . $urlArray[4];
			unlink($fileName);
			$image->delete();

		}

		$urlArray = explode("/", $post->image);
		$fileName = $urlArray[3]. "/" . $urlArray[4];
		unlink($fileName);
		$post->delete();

		session()->flash('success','Post Deleted');
		return redirect()->back();
	}

	public function postAddPost( Request $request ) {


		if($request->hasFile('image')){
			$image = $request->file('image');
			$inputFileName = Carbon::now()->timestamp . $image->getClientOriginalName();
			$imageUrl = url('uploads/' . $inputFileName);
		}

		$post = new post();
		$post->title = $request->input(' title');
		$post->content = $request->input('content');
		$post->image = $imageUrl;
		$post->save();

		if($request->has('images')){ // upload images for post
			foreach($request->file('images') as $image){
				$inputFileName = Carbon::now()->timestamp . $image->getClientOriginalName();
				$image->move("uploads",$inputFileName);

				$image = new postImage();
				$image->url = url('uploads/' . $inputFileName);
				$image->pid = $post->pid;
				$image->uid = auth()->user()->uid;
				$image->save();
			}
		}

		session()->flash('success','Blog Post Added.');

		return redirect()->back();

	}

	public function postEditPost( Request $request ) {

		if($request->hasFile('image')){
			$image = $request->file('image');
			$inputFileName = Carbon::now()->timestamp . $image->getClientOriginalName();
			$imageUrl = url('uploads/' . $inputFileName);
		}

		$pid = $request->input('pid');
		$post = post::find($pid);
		$post->title = $request->input(' title');
		$post->content = $request->input('content');
		$post->image = $imageUrl;
		$post->save();

		session()->flash('success','Blog Post Edited');
		return redirect()->back();

	}

}
