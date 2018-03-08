<?php
namespace Chatbox\Twibot\Model;
use Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2018/03/08
 * Time: 17:06
 */
class Message extends Model {

	protected $table = "twbt_message";

	protected $guarded = [];

	protected $dates = [
		"message_at",
		"created_at",
		"updated_at",
	];

}