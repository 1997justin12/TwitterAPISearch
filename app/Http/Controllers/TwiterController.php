<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Abraham\TwitterOAuth\TwitterOAuth;


class TwiterController extends Controller
{

	public $twitter;

	public function __construct()
	{
		$consumer = "7AHOFn9lwxsMtPaI4QXMEwa3d";
		$consumerSecret = "GoSswcvARKj5g3x1QLfpufTeoX0BxNw8tWfxLEGmsLlOiLKieU";
		$accessToken = "552624401-7Mow59fkymDOWFjzOycHBPE9ULIWtYT8suoQrzIi";
		$accessTokenSecret = "azo8WbD5oDq5S1HInQi7QojXVLbQPf0jJ9hkb3TE4KqMQ";
		$this->twitter = new TwitterOAuth($consumer,$consumerSecret,$accessToken,$accessTokenSecret);
	}

    public function searchTwitterUser()
    {
    	
		$toSearch = Input::only('search-bar');
		$twitterUser = $this->twitter
		->get("users/search", ["q" => $toSearch['search-bar']]);

	// 	$statuses = $tweets->statuses;
	// 	foreach ($statuses as $tweet) {
	// 		echo  $tweet->user->name.' '.'<img src="'.$tweet->user->profile_image_url.'">' .' '. $tweet->text.'<br>';
	// }
		

		return View::make('result',array('searchUsers' => $twitterUser, 'searchName' => $toSearch['search-bar'], 'resultCount' => count($twitterUser)));
    }


}
