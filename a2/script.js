function add() {
	let number = document.getElementById("number");
	if (number.value >= 100) {
		window.alert("Value Must Be Less Than Or Equal To 100.");
	}
	else if (number.value < 0) {
		number.value = parseInt(0);
    }
	else {
		number.value = parseInt(number.value) + 1;
    }
}

function subtract() {
	if (number.value <= 0) {
		window.alert("Value Must Be Greater Than Or Equal To 1.");
	}
	else if (number.value > 100) {
		number.value = parseInt(100);
	}
	else {
		number.value = parseInt(number.value) - 1;
	}
}

function changeImage(button_id) {
	var img = document.getElementById("hoodie");
	var text = document.getElementById("titletext");
	number.value = 0;
	if (button_id == "MintRadio") {
		text.innerHTML = ("Mint Mogul Moves Embroidered Hoodie");
		img.src = "../../media/mint.png";
	}
	else if (button_id == "BoneRadio") {
		text.innerHTML = ("Bone Mogul Moves Embroidered Hoodie");
		img.src = "../../media/bone.png";
	}
	else if (button_id == "PinkRadio") {
		text.innerHTML = ("Pink Mogul Moves Embroidered Hoodie");
		img.src = "../../media/pink.png";
	}
}

function doShowAll() {
	var key = "";
	var list = "<tr><th id='Item'>Item</th><th id='Cost'>Cost</th><th id='Quantity'>Quantity</th></tr>\n";
	var i = 0;
	var totalquan = 0;
	
	for (i = 0; i <= localStorage.length - 1; i++) {
		key = localStorage.key(i);
		list += "<tr><td>" + key + "</td>\n<td id='Cost'>$"
			+ localStorage.getItem(key) + ".00</td><td><label id = 'quantitylabel'>" +
			(localStorage.getItem(key) / 50) + "</label></td></tr>";
		totalquan = totalquan + localStorage.getItem(key) / 50;
		
		
	}
	if (key != "") {
		list += "<tr><th>Total Cost</th><td id='Cost'>$" + (totalquan * 50) + ".00</td>";
    }
	
	document.getElementById('list').innerHTML = list;
	
	
	
}

function SaveItem() {
	var rad1 = document.getElementById("MintRadio");
	var rad2 = document.getElementById("BoneRadio");
	var rad3 = document.getElementById("PinkRadio");
	var price = number.value * 50;

	if (number.value > 100) {
		window.alert("Value Must Be Less Than Or Equal To 100.")
	}
	else if (number.value < 0) {
		window.alert("Value Must Be Greater Than Or Equal To 1.")
    }
	else {
		if (rad1.checked == true) {
			localStorage.setItem("Mint Hoodie", price);
			doShowAll();
		}
		if (rad2.checked == true) {
			localStorage.setItem("Bone Hoodie", price);
			doShowAll();
		}
		if (rad3.checked == true) {
			localStorage.setItem("Pink Hoodie", price);
			doShowAll();
		}
    }

	
}

function ModifyItem() {
	var name1 = document.forms.ShoppingList.name.value;
	var data1 = document.forms.ShoppingList.data.value;

	if (localStorage.getItem(name1) != null) {
		localStorage.setItem(name1, data1);
		document.forms.ShoppingList.data.value = localStorage.getItem(name1);
	}
	doShowAll();
}

function RemoveItem() {
	var name = document.forms.ShoppingList.name.value;
	document.forms.ShoppingList.data.value = localStorage.removeItem(name);
	doShowAll();
}

function ClearAll() {
	localStorage.clear();
	doShowAll();
}

function loadReceipt() {
	getCurrentDate();
	receiptPrint();
}

function getCurrentDate() {
	n = new Date();
	y = n.getFullYear();
	m = n.getMonth() + 1;
	d = n.getDate();
	document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
}

function receiptPrint() {
	var key = "";
	var list = "<tr><th id='Item'>Item</th><th id='Cost'>Cost</th><th id='Quantity'>Quantity</th></tr>\n";
	var i = 0;
	var totalquan = 0;

	for (i = 0; i <= localStorage.length - 1; i++) {
		key = localStorage.key(i);
		list += "<tr><td>" + key + "</td>\n<td id='Cost'>$"
			+ localStorage.getItem(key) + ".00</td><td><label id = 'quantitylabel'>" +
			(localStorage.getItem(key) / 50) + "</label></td></tr>";
		totalquan = totalquan + localStorage.getItem(key) / 50;


	}
	if (key != "") {
		list += "<tr><th>Total Cost</th><td id='Cost'>$" + (totalquan * 50) + ".00</td>";
	}

	document.getElementById('list2').innerHTML = list;
}

function submitButton() {
	if (document.getElementById("fname").value == "") {
		window.alert("Please Enter A Valid First Name")
	}
	else if (document.getElementById("lname").value == "") {
		window.alert("Please Enter A Valid Last Name")
	}
	else if (document.getElementById("address").value == "") {
		window.alert("Please Enter A Valid Address")
	}
	else if (document.getElementById("email").value == "") {
		window.alert("Please Enter A Valid Email")
	}
	else if (document.getElementById("pno").value == "") {
		window.alert("Please Enter A Valid Phone Number")
	}
	else if (document.getElementById("ccno").value == "") {
		window.alert("Please Enter A Valid Credit Card Number")
	}
	else if (document.getElementById("expdate").value == "") {
		window.alert("Please Enter A Valid Expiration Date")
	}
	else if (document.getElementById("ccv").value == "") {
		window.alert("Please Enter A Valid CCV")
	}
	else {
		window.location.href = '/~s3901447/wp/a2/receipt.php';
    }
}