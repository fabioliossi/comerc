<?php

namespace App\Http\Controllers;

use App\Repositories\FeedRepository;


class InfoController extends Controller
{
    /**
     * Lista dos feeds e mostra o conteudo
     *
     */
    public function index()
    {
    	$feedRepository = new FeedRepository();
		$feeds = $feedRepository->getComercFeeds();
    	return view('index')->with("feeds",$feeds);    
    }
}