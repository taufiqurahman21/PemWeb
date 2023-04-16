<html>
<head>
<title> hasil </title>
</head>
<body>
<?php
if (empty($_POST['nama'])) {
    header("Location:kosong.php");
} else {
    echo "<center>Nama :" .$_POST['nama']."</center><br>";
}
?>
</body>
</html>