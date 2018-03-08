<?php
namespace Chatbox\Twibot;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2018/03/08
 * Time: 14:36
 */
class TwibotServiceProvider extends ServiceProvider {

	public function boot(  ) {

		Route::middleware('web')->prefix("twibot")->group(function($route){
			include __DIR__."/../routes/web.php";
		});



	}

	public function register(  ) {
		config()->push("view.paths",__DIR__."/../views/");

	}
}