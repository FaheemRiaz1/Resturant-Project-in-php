
<link rel="stylesheet" href="styles.css">
<?php
$con=mysqli_connect("localhost","root","","resturant");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM cart");

echo "<table border=1>
<tr>
<th>Checkout</th>

</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";

echo "</tr>";



echo "<tr>";
echo "<td><button>order</button></td>";

echo "</tr>";
}
echo "</table>";


mysqli_close($con);
?>
