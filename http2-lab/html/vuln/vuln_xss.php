<?php include("./header.php"); ?>
<div class="container text-center">

    <div class="starter-template">
    <h1>XSS⚠️</h1>
    </div>
    
    <form action="./vuln_xss.php" method="get" class="form-inline">
        <div class="form-group">
            <label for="exampleInput">Example Input</label>
            <input type="text" class="form-control" name="exampleInput" id="exampleInput" placeholder="test">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <hr>
    <?php if(isset($_GET["exampleInput"])): ?>
    <p class="lead">
    <?php 
    $text = $_GET["exampleInput"];
    echo sprintf("結果: %s", $text); 
    ?>
    </p>
    <?php endif; ?>
    <div class="callout">
        <h4>ページ読み込み計測</h4>
        <p id='message'></p>
    </div>

</div><!-- /.container -->

<?php include("./footer.php"); ?>