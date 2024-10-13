<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mbaris1=$_POST['baris2'];
    $mkolom2=$_POST['kolom2'];

    $mulaib=1;
    //$mulaik=1;

?>
<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Form 3</title>
        </head>
        <body>
            <h2>Form 3</h2><br>

<?php
    while($mulaib<=$mbaris1){
        $mulaik=1;
        while($mulaik<=$mkolom2){
            echo $mulaib.".".$mulaik." : ".$_POST['input'.$mulaib.$mulaik]."<br>";
            $mulaik++;
        }
        $mulaib++;
    }

}
?>
