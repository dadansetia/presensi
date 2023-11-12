<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
	
	public function pulang()
    {
        return view('index');
    }
	
	public function not_found()
	{
		return view('not_found');
	}
}
