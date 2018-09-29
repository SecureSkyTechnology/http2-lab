<?php if($_SERVER["SCRIPT_NAME"] !== "/index.php"): ?>
<!-- SCRIPTS -->
<script>
function showMessage() {
    var timing = window.performance.timing
    var message = 'HTTP Request Responseの処理時間: '+ (timing["responseEnd"]-timing["requestStart"])+'ms<br>'
	message += 'DOM 読み込み時間: ' + (timing['domContentLoadedEventEnd'] - timing['connectStart']) + 'ms<br>'
    message += 'DOM 読み込み完了時間 (画像読み込み): ' + (timing['domComplete'] - timing['connectStart']) + 'ms<br>'
    <?php if($_SERVER["SCRIPT_NAME"] === "/image_performance.php"): ?>
    message += '画像分割数: <?php echo htmlspecialchars($cut);?><br>' 
    <?php endif; ?>
	document.getElementById('message').innerHTML = message
}
</script>
<?php endif; ?>

<?php if($_SERVER["SCRIPT_NAME"] === "/file_upload.php"): ?>
<script>
    $('input[id=uploadfile]').change(function() {
    $('#filename').val($(this).val());
});
</script>
<?php endif; ?>
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>