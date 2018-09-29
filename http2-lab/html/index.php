<?php include("./header.php"); ?>
<div class="container">
    <div class="starter-template">
    <h1>HTTP/2-Lab🔬</h1>
    <p class="lead">HTTP/2検証用デモサイト</p>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Server</th>
                <th>Protocol</th>
                <th>Port</th>
                <th>Link</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Nginx</th>
                <th>HTTP/2</th>
                <th>443</th>
                <th><a href="https://<?php echo $_SERVER["SERVER_NAME"]; ?>:443/index.php" />https://<?php echo $_SERVER["SERVER_NAME"]; ?>:443</th>
            </tr>
            <tr>
                <th>Nginx</th>
                <th>HTTP/1.1</th>
                <th>8443</th>
                <th><a href="https://<?php echo $_SERVER["SERVER_NAME"]; ?>:8443/index.php" />https://<?php echo $_SERVER["SERVER_NAME"]; ?>:8443</th>
            </tr>
            <tr>
                <th>H2O</th>
                <th>HTTP/2</th>
                <th>1443</th>
                <th><a href="https://<?php echo $_SERVER["SERVER_NAME"]; ?>:1443/index.php" />https://<?php echo $_SERVER["SERVER_NAME"]; ?>:1443</th>
            </tr>
            <tr>
                <th>Apache2</th>
                <th>HTTP/2</th>
                <th>1443</th>
                <th><a href="https://<?php echo $_SERVER["SERVER_NAME"]; ?>:2443/index.php" />https://<?php echo $_SERVER["SERVER_NAME"]; ?>:2443</th>
            </tr>
            <tr class="danger">
                <th>Nginx</th>
                <th>HTTP/2(TLSv1.1)</th>
                <th>9443</th>
                <th><a href="https://<?php echo $_SERVER["SERVER_NAME"]; ?>:9443/index.php" />https://<?php echo $_SERVER["SERVER_NAME"]; ?>:9443</th>
            </tr>
    </table>
    </div>
    <ul>
        <li><p class="lead"><a href="/hello_world.php">Hello, HTTP/2 World!</a></p></li>
        <li><p class="lead"><a href="/get.php">シンプルなGETリクエスト</a></p></li>
        <li><p class="lead"><a href="/post.php">シンプルなPOSTリクエスト</a></p></li>
        <li><p class="lead"><a href="/file_upload.php">ファイルアップロード</a></p></li>
        <li><p class="lead"><a href="/server_push.php">サーバプッシュ</a></p></li>
        <li><p class="lead"><a href="/push_preload.php">サーバプッシュ(プッシュプリロード)</a></p></li>
        <li><p class="lead"><a href="/push_preload_tag.php">サーバプッシュ(プッシュプリロード linkタグ)</a></p></li>
        <li><p class="lead"><a href="/image_performance.php?cut=1">画像(分割なし)を読み込む</a></p></li>
        <li><p class="lead"><a href="/image_performance.php?cut=8">画像(8分割)を読み込む</a></p></li>
        <li><p class="lead"><a href="/image_performance.php?cut=128">画像(128分割)を読み込む</a></p></li>
        <li><p class="lead"><a href="/image_performance.php?cut=256">画像(256分割)を読み込む</a></p></li>
        <li><p class="lead"><a href="/vuln/vuln_xss.php">XSS</a></p></li>
        <li><p class="lead"><a href="/vuln/test.json">Header Injection</a></p></li>
        <li><p class="lead"><a href="/phpinfo.php">phpinfo</a></p></li>
    </ul>

</div><!-- /.container -->

<?php include("./footer.php"); ?>