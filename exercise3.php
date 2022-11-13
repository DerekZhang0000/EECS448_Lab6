<?php
	echo "Your password is: " . $_POST["password"];
	echo "<h1> Purchase Summary:</h1>";
	echo "<table>
		<tr>
			<th></th>
			<th>Quantity</th>
			<th>Cost per Item</th>
			<th>Subtotal</th>
		</tr>";
	echo "  <tr>
			<th>Boxes</th>
			<th>" . $_POST["box"] . "</th>
			<th>$19.99</th>
			<th>$" . $_POST["box"] * 19.99 ."</th>
		</tr>";
        echo "  <tr>
                        <th>Bananas</th>
                        <th>" . $_POST["banana"] . "</th>
                        <th>$1.50</th>
                        <th>$" . $_POST["banana"] * 1.50 ."</th>
                </tr>";
        echo "  <tr>
                        <th>Duct Tape</th>
                        <th>" . $_POST["tape"] . "</th>
                        <th>$3,999.99</th>
                        <th>$" . $_POST["tape"] * 3999.99 ."</th>
		</tr>";
	echo "  <tr>
			<th>Shipping</th>
			<th>$" . $_POST["shipping"] * 1.00 . "</th>";	
	echo "  <tr>
			<th>Total</th>
			<th>$" . ($_POST["box"] * 19.99 + $_POST["banana"] * 1.50 + $_POST["tape"] * 3999.99 + $_POST["shipping"]) . "</th>";
?>
