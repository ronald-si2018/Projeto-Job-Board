<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
	
	public function amigos()
    {
		$amigos = [
					   ['nome' => 'José Silva', 'idade' => 22],
					   ['nome' => 'Maria José', 'idade' => 20],
					   ['nome' => 'João Pinheiro', 'idade' => 35]
		];

		return $amigos;
    }
	
	public function sobre()
    {
		$eu = [
					   'nome' => 'Igor Barreto',
					   'idade' => 27
		];

		return view('sobre', compact('eu'));
    }

    public function candidateListing()
    {
		return view('candidate_listing');
    }

    public function companyListingSingle()
    {
		return view('company_listing_single');
    }
	
	public function listingLeft()
    {
		return view('listing_left');
    }

    public function listingRight()
    {
		return view('listing_right');
    }
    
    public function register()
    {
		return view('register');
    }
    
    public function blogSingleRight()
    {
		return view('blog_single_right');
    }

    public function blogSingleLeft()
    {
		return view('blog_single_left');
    }

	public function blogRight()
    {
		return view('blog_right');
    }

    public function blogLeft()
    {
		return view('blog_left');
    }

    public function listingSingle()
    {
		return view('listing_single');
    }

    public function error404()
    {
		return view('404error');
    }

    public function about()
    {
		return view('about');
    }
 
	public function pricing()
    {
		return view('pricing');
    }

    public function candidateProfile()
    {
		return view('candidate_profile');
    }

	public function companyListing()
    {
		return view('company_listing');
    }
    
    public function indexMap()
    {
		return view('index_map');
    }
    
}
