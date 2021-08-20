<!DOCTYPE html>
<html>
	<?php include 'tools.php';?>
	<?php heading() ?>
	<script src="script.js"></script>

	<body onload="doShowAll()">
		<?php head() ?>
		<div id='nav'><?php nav() ?></div>
		
		
		<div class='Cart'>
			<div class='innerCart'>
				<form name="ShoppingList">
					<div id="items_table">
						<h2>Shopping Cart</h2>
						<img id="mint" src="../../media/mint.png">
						<table id="list"></table>
						<label><input type="button" value="Clear" onclick="ClearAll()">
						* Delete all items</label>
					</div>
					<div id='info'>
						<form id="theForm" method="POST" action="receipt.php">
							<table class='info'>
								<tr>
									<th><label>First Name: </label></th>
									<td><input id="fname" placeholder="Barry"type="text"></td>
								</tr>
								<tr>
									<th><label>Last Name: </label></th>
									<td><input id="lname" placeholder="Allen" type="text"></td>
								</tr>
								<tr>
									<th><label>Address: </label></th>
									<td><input id="address" placeholder="124 La Trobe St" type="text"></td>
								</tr>
								<tr>
									<th><label>Email: </label></th>
									<td><input id="email" placeholder="example@gmail.com" type="email"></td>
								</tr>
								<tr>
									<th><label>Phone Number: </label></th>
									<td><input id="pno" type="tel" placeholder="04 12345467" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"></td>
								</tr>
								<tr>
									<th><label>Credit Card Number: </label></th>
									<td><input id="ccno" placeholder="1234 5678 9123 4567" type="text"></td>
								</tr>
								<tr>
									<th><label>Exp Date: </label></th>
									<td><input id="expdate" placeholder="08/21" type="text"></td>
								</tr>
								<tr>
									<th><label>CCV: </label></th>
									<td><input id="ccv" placeholder="123" type="text"></td>
								</tr>
								<tr>
									<th><input id="submit" type="button" onclick="submitButton()" value="Checkout"></th>
								</tr>
							</table>
						</form>
					</div>
				</form>
			</div>	
		</div>
	</body>
	<div id="footer"><?php footer() ?></div>
</html>