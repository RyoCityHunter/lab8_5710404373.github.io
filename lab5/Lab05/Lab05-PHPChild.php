<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" media="screen" href="Lab05-ResultStyleSheet.css">
    <link href="https://fonts.googleapis.com/css?family=Itim" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<title>Provinces of Thailand</title>
</head>

<body class="childWebBody">
<section>
    <header role="banner">
    </header>
</section>
<br>
<form name="childForm" id = "childForm">
 <?php
    $province = $_POST['province'];
    $fileName = "motto/$province.txt";
    $imgFile = "sign/$province.png";
    $fileName = iconv("utf-8", "tis-620", $fileName);
    echo "$province</br></br>";

    $selectFile = fopen("$fileName", "r") or die("File not found!");
    echo "<img src='$imgFile'/>";
    echo "</br>";
    echo fgets($selectFile);
    echo "</br></br>";
?>
</form>
</body>
<!-- SilentMonster -->
</html>