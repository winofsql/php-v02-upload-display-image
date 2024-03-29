<!DOCTYPE html>
<html>
<head>
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta charset="utf-8">
<title>単純ファイルアップロード</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="client.js?_=<?= time() ?>"></script>

<style>

#content {
    margin: 26px;
}

</style>

</head>
<body>
<h3 class="alert alert-primary">
    <a href="./">ファイルをアップロード( 選択画像表示 )</a>
    <a href=".." style="float:right;text-decoration:none;">📂</a>
</h3>
<div id="content">
    <form enctype="multipart/form-data"
        method="POST">
        <div class="mb-3">
            <input type="hidden"
                name="MAX_FILE_SIZE"
                value="10000000">

            <input id="target"
                name="target"
                type="file"
                class="btn btn-outline-primary">
        </div>
        <div class="mb-3">
            <input type="submit"
                name="send"
                value="アップロード"
                class="me-4 btn btn-outline-primary">
            <a class="btn btn-info" href="<?= $_SERVER["PHP_SELF"] ?>">リロード</a>
        </div>
        <div id="image"></div>
    </form>
</div>
<div id="result" class="m-4"><?= $result_message ?></div>
</body>
</html>
