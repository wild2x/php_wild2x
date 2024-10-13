
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['baris'])) {
     $jmlbaris=$_POST['baris'];
     $jmlkolom=$_POST['kolom'];
     ?>  

     <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Form 2</title>
        </head>
        <body>
            <h2>Form 2</h2><br>
           <p>Jumlah Baris :<?php echo $jmlbaris;?></p> 
           <p>Jumlah Kolom:<?php echo $jmlkolom;?></p>
          
            <form action="soal1b.php" method="post">
            <input type="hidden" name='baris2' value="<?php echo $jmlbaris;?>" ><br>   
           <input type="hidden" name='kolom2' value="<?php echo $jmlkolom;?>" ><br>      

            <?php
            $mbaris=1;
           
            while($mbaris<=$jmlbaris){    
                $mkolom=1;
            while($mkolom<=$jmlkolom){
           //   echo "Mbaris ".$mbaris." ".$mkolom."<br>";
                ?>                   
                <label for="input<?php echo $mbaris.$mkolom?>"><?php echo $mbaris.".".$mkolom; ?></label>
                <input type="text" name="input<?php echo $mbaris.$mkolom;?>" id="input<?php echo $mbaris.$mkolom;?>">

                
            <?php        
            $mkolom++;    
           
            }
       echo "<br";

          $mbaris++;
        }
           // echo $mbaris."<br>";
   
        ?>    
            <br><br>
                <input type="submit" value="Submit">


            </form>
        </body>
        </html>

    <?php    
    } elseif(isset($_POST['input1.2'])) {
        echo "1234";
    } else {
        echo $_POST['input1.2'];
    }

    
    } else {
    ?>
    <!DOCTYPE html>
    <html lang="en" class="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soal a</title>
</head>
<body>
    <form  method="post">
    <label for="baris">Jumlah Baris:</label><br>
     <input type="number" id="baris" step="1" name="baris" min="1" value="1"><br>
     <label for="kolom">Kolom:</label><br>
    <input type="number" id="kolom" step="1" value="1" min="1" name="kolom"><br><br>
    <input type="submit" value="submit">
    </form>
</body>
</html>
<?php    
    }
 ?>





