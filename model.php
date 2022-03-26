<?php
// ********************************************
// ファイルをアップロードする
// ********************************************
function file_upload() {

    global $image_path;
    global $result_message;


    // なければアップロード用フォルダを作成する
    if ( !is_dir( $image_path ) ) {

        mkdir( $image_path );

    }


    $upload = realpath($image_path);
    $upload .= ( DIRECTORY_SEPARATOR . $_FILES['target']['name'] );

    // *******************************************************
    // アップロードされると、一旦一時ファイルとしてサーバに
    // 置かれるので、move_uploaded_file でアップロードされた
    // 一時ファイルが必要な場合に移動処理を行います
    // *******************************************************
    if ( move_uploaded_file($_FILES['target']['tmp_name'], $upload ) ) {
        $result_message = "<p>アップロードに成功しました</p>";
    }


}

// *******************************************************
// デバッグ
// *******************************************************
function debug_print() {

    print "<pre class=\"m-5\">";
    print_r( $_GET );
    print_r( $_POST );
    print_r( $_SESSION );
    print_r( $_FILES );
    print "</pre>";

}
