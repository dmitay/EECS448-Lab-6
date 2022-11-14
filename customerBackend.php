<?php 
//grab username and password
$user = $_POST["username"];
$pass = $_POST["password"];
$space = " ";

//say hi to user and display password
echo "Hi " . $user . "! <br>";
echo "Your password is: " . $pass . "<br>";


//grab purchase data
$purple = $_POST["purpleSaber"];
$red = $_POST["redSaber"];
$blue = $_POST["blueSaber"];
$shipping = $_POST["shipping_option"];

   if ($shipping == "seven_day") {
	$shipping_price = 0;
   }

   else if ($shipping == "over_night") {
	$shipping_price = 50;
   }

   else
	{$shipping_price = 5;}



$total_purple = $purple * 150;
$total_red = $red * 200;
$total_blue = $blue * 100;

$total = $total_purple + $total_red + $total_blue + $shipping_price;

echo '<table>';
echo '<tr> <th> </th>';
echo '<th>Quantity</th> <th>Cost Pet Item</th> <th>Sub total</th> </tr>';
echo  '<tr> <td>Purple Lightsaber</td>';
echo    '<td>' .$purple. '</td>';
echo    '<td>150</td>';
echo	'<td>' .$total_purple. '</td>';
echo  '</tr>';
echo  '<tr> <td>Red Lightsaber</td>';
echo    '<td>' .$red. '</td>';
echo    '<td>200</td>';
echo	'<td>' .$total_red. '</td>';
echo  '</tr>';
echo  '<tr> <td>Blue Lightsaber</td>';
echo    '<td>' .$blue. '</td>';
echo    '<td>100</td>';
echo	'<td>' .$total_blue. '</td>';
echo  '</tr>';
echo  '<tr> <td>Shipping</td>';
echo    '<td>' .$shipping. '</td>';
echo    '<td></td>';
echo	'<td>' .$shipping_price. '</td>';
echo  '</tr>';
echo  '<tr> <td>Total Cost</td>';
echo    '<td></td>';
echo    '<td></td>';
echo	'<td>' .$total. '</td>';
echo  '</tr>';


echo'</table>';
