<?php

    @$name=$_FILES['file']['name'];
    @$type=$_FILES['file']['type'];
    @$size=$_FILES['file']['size'];
    @$temp=$_FILES['file']['tmp_name'];
    $ext=strrev(substr(strrev($name),0,3));
    $sloc='./';
    if($ext=='doc'&&$type='application/msword')
    {echo '<script>console.log("correct file selected");</script>';
        move_uploaded_file($temp,$sloc.$name);
    }
    else
    {
        echo "Only doc file is allowed";
        die();
    }

?>
<!DOCTYPE HTML>
<html>
<head>
    <title>PDF generator</title>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="form">
    <form action="index.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <button type="submit">Convert</button>
    </form>
</div>
</body>
</html>