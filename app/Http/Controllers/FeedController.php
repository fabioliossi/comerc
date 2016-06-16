<?php

namespace App\Http\Controllers;

use App\Repositories\FeedRepository;

class FeedController extends Controller
{
    /**
     * Retorna a lista de feeds em json
     *
     * */
    public function index()
    {	
    	$feedRepository = new FeedRepository();
    	$feeds = $feedRepository->getComercFeeds();
	return json_encode($feeds);
    }

}
