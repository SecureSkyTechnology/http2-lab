<?php
if($_SERVER["SERVER_PORT"] !== "443") {
    header("Link: </img/server_push/test1.png>; rel=preload; as=image;",false);
    header("Link: </img/server_push/test2.png>; rel=preload; as=image;",false);
    header("Link: </img/server_push/test3.png>; rel=preload; as=image;",false);
}
?>

<?php include("./header.php"); ?>
<div class="container text-center">

    <div class="starter-template">
        <h1>Push Preload🎁</h1>
    </div>

    <p class="lead">
        この画面では、3つのファイルがサーバプッシュされます。<br>
        サーバプッシュの通知方法はHTTPヘッダにLinkヘッダを付与して通知しています。<br>
        サーバプッシュされた画像を表示します。
    </p>
    <img src="/img/server_push/test1.png" class="img-thumbnail" />
    <img src="/img/server_push/test2.png" class="img-thumbnail" />
    <img src="/img/server_push/test3.png" class="img-thumbnail" />
    <div class="callout">
        <h4>ページ読み込み計測</h4>
        <p id='message'></p>
    </div>

</div><!-- /.container -->

<?php include("./footer.php"); ?>
