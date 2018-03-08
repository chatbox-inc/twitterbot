<?php
namespace Chatbox\Twibot\Http\Controllers;
use Carbon\Carbon;
use Chatbox\Twibot\Model\Message;
use Illuminate\Support\Facades\Validator;

/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2018/03/08
 * Time: 14:52
 */
class MessagesController {


	public function index(){
		$messages = Message::with([])->get();
		return view("twibot.messages.index",[
			"messages" => $messages
		]);
	}

	public function new(){
		$form = [
			"message" => session()->get("form.message"),
			"message_at" => session()->get("form.message_at",Carbon::now()->format("Y-m-d\TH:i")),
		];

		return view("twibot.messages.new",[
			"form" => $form
		]);
	}

	public function edit(){
		return view("twibot.messages.edit");
	}

	public function doRegist(){
		$form = [
			"message" => request()->get("message"),
			"message_at" => request()->get("message_at"),
		];

		/** @var \Illuminate\Validation\Validator $val */
		$val = Validator::make($form,[
			"message" => ["required"],
			"message_at" => ["required","date"],
		]);
		if($val->fails()){
			session()->put("form",$form);
			session()->put("formError",$val->errors());
			return redirect()->route("TWIROBO.MESSAGE.NEW");
		}

		Message::create([
			"twitter_id" => "hoge", //TODO FIXME
			"message" => $form["message"],
			"message_at" => Carbon::createFromTimestamp(strtotime($form["message_at"])),
		]);
		session()->forget("form");
		session()->forget("formError");

		return redirect()->route("TWIROBO.MESSAGE.INDEX");
	}

}