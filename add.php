<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $Fname=$_POST['Fname'];
        $Lname=$_POST['Lname'];
        $file=fopen('text.txt','a');
        fwrite($file,$Fname." ".$Lname."\n");
        fclose($file);
    ?>    
</body>
</html>
