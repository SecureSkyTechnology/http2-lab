<?php include("./header.php"); ?>
<div class="container">
<div class="starter-template">
    <h1>Image performance🍜</h1>
</div>

<ul>
<form action="./image_performance.php" method="get" class="form-horizontal">
        <div class="form-group image-form-container">
            <div class="row">
                <label for="image" class="col-sm-2">画像分割数</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="cut" id="image" placeholder="2進数 1024まで""">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

</ul>
    <?php
    if(isset($_GET['cut']) && $_GET['cut'] <= 1024) {
        $cut = htmlspecialchars($_GET['cut']);
    } else {
        $cut = 16;
    }
    
    $size = getimagesize(__DIR__."/img/performance/jiro.jpg");
    $size_x = floor($size[0]/$cut);
    
    ?>
    <div class="image-container" style="--cut:<?php echo $cut; ?>">
    <?php 
    $img_html = "";

    for($x=0;$x<1024;$x=$x+$size_x) {
        $img_html .= sprintf('<img src="/crop_image.php?x=%s&y=0&cut=%s&cachebust=%s">', $x, $cut, bin2hex(openssl_random_pseudo_bytes(16)));
    }
    echo $img_html;
    ?>
    </div>
    <div class="callout">
        <h4>ページ読み込み計測</h4>
        <p id='message'></p>
    </div>
</div><!-- /.container -->
<!-- SCRIPTS -->

<?php include("./footer.php"); ?>
