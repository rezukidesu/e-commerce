<?php
session_start();
if($_SESSION['username']=='')
{
	header("location:login.php");
}
?>

<html>

<body>
<?php
//session_start();
if(!isset($_GET['content']))
{
    $vcontent = 'home.php';
}
else
{
    $vcontent = $_GET['content'];
}
?>
<table border="1", align = "center", width = "800">
    <tr height = "100">
        <td colspan="3"><div align="center"></div>
        <img src="polban2.png" alt="Polban" align="right" style="width: 100px;height: 100px;"> </td>

    </tr>
    <tr height = "50" align="center">
        <td><a href="template.php?content=<?php echo 'home.php'?>"> Home |</a>
            <a href="template.php?content=<?php echo 'search.php'?>">Search |</a>
            <a href="template.php?content=<?php echo 'data_barang.php'?>">Data Barang</a>
            <a href="template.php?content=<?php echo 'summary.php'?>"></a>
        </td>
    </tr>
    <tr height = "300", align="center">
        <td>
            <?php include $vcontent ?>
        </td>
    </tr>
    <!-- <br>
		<tr height = "100">
			<td align="center"><a href ="viewcart.php">VIEW CART</a></td>
		</tr>
	<br> -->
    <!-- <tr height = "100">
    <td align="center"><a href="form.php">Add data</a></td> -->
    </tr>
	<tr height = "120">
        <td align="center"><a href="logout.php">Logout</a></td>
    </tr>
</table>
</body>
</html>

