<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
	public function index() {
		return view('home');
	}

	public function ourStory() {
		return view('ourStory');
	}

	public function earn() {
		return view('earn');
	}

	public function pricing() {
		return view('pricing');
	}

	public function privacy() {
		$privacy = file_get_contents(env('BACKENDURL') . "active-privacy");

		return view('privacy',[
			'privacy' => json_decode($privacy)
		]);
	}

	public function terms() {
		$terms = file_get_contents(env('BACKENDURL') . "active-terms");
		return view('terms',[
			'terms' => json_decode($terms)
		]);
	}

	public function faqs() {
		$faqs = file_get_contents(env('BACKENDURL') . "active-faqs");

		return view('faqs',[
			'faqs' => json_decode($faqs)
		]);
	}

	public function contact() {
		return view('contact');
	}
	public function customerSignUp() {
		return redirect('https://dropsterng.com/app');
	}

	public function blog() {

	}


}
