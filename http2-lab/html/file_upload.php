<?php include("./header.php"); ?>
<div class="container">

    <div class="starter-template">
    <h1>File Upload📄</h1>
    <form action="" method="POST" class="form-inline" enctype="multipart/form-data">
        <div class="form-group">
            <input type="file" name="uploadfile" id="uploadfile" style="display:none;">
            <input type="text" id="filename" class="form-control">

                <button type="button" class="btn btn-info" onclick="$('input[id=uploadfile]').click();">Browse</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <hr>

    <?php 
    if(isset($_FILES) && !empty($_FILES)) {
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $ext = array_search(
            $finfo->file($_FILES['uploadfile']['tmp_name']),
            array(
                'jpg' => 'image/jpeg',
                'png' => 'image/png',
                'gif' => 'image/gif',
            ),
            true
        );
        if($ext !== false) {
            if(move_uploaded_file(
                $_FILES['uploadfile']['tmp_name'],
                sprintf('./img/uploads/%s.%s',
                    sha1($_FILES['uploadfile']['tmp_name']) ,
                    $ext
                )
            )) {
                $msg = "ファイルアップロード完了";
                echo sprintf('<img src="./img/uploads/%s.%s" >', sha1($_FILES['uploadfile']['tmp_name']), $ext);
            } else {
                $msg = 'ファイルアップロードに失敗しました';
            }
        } else {
            $msg = "拡張子が画像ファイルではないため、ファイルアップロードに失敗しました。";
        }
    }
    
    if (isset($msg) && $msg == true) {
        echo '<p>'.$msg.'</p>';
    }
    ?>

    <?php if(isset($_GET["exampleInput"])): ?>
    <p class="lead">
    <?php 
    $text = htmlspecialchars($_GET["exampleInput"]);
    echo sprintf("出力結果: %s", $text); 
    ?>
    </p>
    <?php endif; ?>
    <div class="callout">
        <h4>ページ読み込み計測</h4>
        <p id='message'></p>
    </div>

</div><!-- /.container -->



<?php include("./footer.php"); ?>