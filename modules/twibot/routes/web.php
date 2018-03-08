<?php

use Chatbox\Twibot\Http\Controllers\MessagesController;

// トップ：ログインページ
//$route->get("/",);

// マイページ
//$route->get("/mypage",);

// [view] 予約の一覧
$route->get("/message",MessagesController::class."@index")->name("TWIROBO.MESSAGE.INDEX");
// [view] 予約の追加
$route->get("/message/new",MessagesController::class."@new")->name("TWIROBO.MESSAGE.NEW");
// [view] 予約の更新
$route->get("/message/{id}",MessagesController::class."@edit")->name("TWIROBO.MESSAGE.EDIT");
// [action] 予約の削除
$route->post("/message/register",MessagesController::class."@doRegist")->name("TWIROBO.MESSAGE.REGISTER");
// [action] 予約の更新
$route->post("/message/update",MessagesController::class."@doUpdate")->name("TWIROBO.MESSAGE.UPDATE");