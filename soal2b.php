<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$mcari=$_POST['cari'];
$sql=mysqli_query($koneksi,"SELECT count(person_id) as jml, hobi FROM `hobi` where hobi='$mcari' group by hobi order by jml desc");
if (mysqli_num_rows($sql) == 0) {
    echo "Tidak ada Data<br>";
} else {
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
</head>
<body>
    <h1>Listing Hobi</h1>
    <table style="width:50%">
        <tr>
            <th>Hobi</th>
            <th>Jumlah</th>
        </tr>   
<?php
 while ($row = mysqli_fetch_array($sql)){
?>
    <tr>
             <td><?php echo $row['hobi'];?></td>
             <td><?php echo $row['jml'];?></td>
    <?php
            }
            ?>

 </tr>
 </table>
<?php
}   
?>
</body>
</html>
<?php
}


?>
