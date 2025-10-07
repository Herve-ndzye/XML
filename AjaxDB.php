<?php
$mysqli=new mysqli("localhost","root","","xmltest");
$sql="SELECT * FROM customers WHERE customerID = ?";
$holder=$mysqli->prepare($sql);
$holder->bind_param("s",$_GET['q']);
$holder->execute();
$holder->store_result();
$holder->bind_result($cid,$cname,$name, $adr, $city, $pcode, $country);
$holder->fetch();
$holder->close();
echo "<table>";
echo "<tr>";
echo "<th>CustomerID</th>";
echo "<td>" . $cid . "</td></tr>";
echo "<th>CompanyName</th>";
echo "<td>" . $cname . "</td></tr>";
echo "<th>ContactName</th>";
echo "<td>" . $name . "</td></tr>";
echo "<th>Address</th>";
echo "<td>" . $adr . "</td></tr>";
echo "<th>City</th>";
echo "<td>" . $city . "</td></tr>";
echo "<th>PostalCode</th>";
echo "<td>" . $pcode . "</td></tr>";
echo "<th>Country</th>";
echo "<td>" . $country . "</td></tr>";
echo "</tr>";
echo "</table>";
?>