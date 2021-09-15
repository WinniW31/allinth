<?php

namespace App\Controllers;
use App\Controllers\Pages;

class Home extends BaseController
{
	public function index()
	{
		$pages = new Pages();
		$data = [];

		return $pages->view('home', $data);
	}
}
