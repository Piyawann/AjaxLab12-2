<?php
$pdo = new PDO("mysql:host=localhost; dbname=blueshop; charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$keyword = $_GET["keyword"];
$conn = mysqli_connect("localhost", "root", "");

if ($conn) {
    mysqli_select_db($conn, "blueshop");
} else {
    echo mysql_errno();
}

$sql = "SELECT * FROM member WHERE name LIKE '%$keyword%'";
$objQuery = mysqli_query($conn, $sql);
?>

<table border="1">
    <?php while($row = mysqli_fetch_array($objQuery)): ?>
    <tr>
        <td><?php echo $row["username"]?></td>
        <td><?php echo $row["name"]?></td>
        <td><?php echo $row["address"]?></td>
        <td><?php echo $row["mobile"]?></td>
        <td><?php echo $row["email"]?></td>
    </tr>
    <?php endwhile;?>
</table>