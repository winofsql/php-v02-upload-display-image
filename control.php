<?php
require_once("setting.php");

header( "Content-Type: text/html; charset=utf-8" );

// 固有の処理
require_once("model.php");

// ***********************************************
// リンクで呼ばれたページは GET で呼ばれるので、
// FORM から POST で呼ばれた時だけ処理を行う為、
// $_SERVER というシステム変数をチェックします
// ***********************************************
if ( $_SERVER['REQUEST_METHOD'] == "POST" ) {

    // ファイルアップロード
    file_upload();

}

// 画面
require_once("view.php");

// デバッグ
// debug_print();

?>
