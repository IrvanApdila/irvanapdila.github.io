<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="cart.css">
    <title>VAN STORE - Toko Pakaian</title>
    <style>
    </style>
  </head>
  <body>
    <header>
      <h1>VAN STORE</h1>
      <nav>
      <div>
          <a href="admin.php">Beranda</a>
          <a href="aboutus.php">About Us</a>
          <a href="cart.php">kalkulator</a>
		  <a href="index.php">LOGOUT</a>
          
        </div>
	<style>
		label {
			display: block;
			margin-top: 10px;
		}

		input, select {
			margin-top: 5px;
			padding: 5px;
		}

		button {
			margin-top: 10px;
			padding: 5px;
			background-color: #008CBA;
			color: #FFF;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
	</style>
</header>
<main>
<div>
	<label for="angka1">Angka Pertama</label>
	<input type="number" id="angka1" name="angka1">

	<label for="angka2">Angka Kedua</label>
	<input type="number" id="angka2" name="angka2">

	<label for="operator">Operator</label>
	<select id="operator" name="operator">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	</select>

	<button onclick="hitung()">Hitung</button>

	<label for="hasil">Hasil</label>
	<input type="number" id="hasil" name="hasil" disabled>
	
	<script>
		function hitung() {
			var angka1 = parseFloat(document.getElementById("angka1").value);
			var angka2 = parseFloat(document.getElementById("angka2").value);
			var operator = document.getElementById("operator").value;
			var hasil;

			switch(operator) {
				case "+":
					hasil = angka1 + angka2;
					break;
				case "-":
					hasil = angka1 - angka2;
					break;
				case "*":
					hasil = angka1 * angka2;
					break;
				case "/":
					hasil = angka1 / angka2;
					break;
				default:
					alert("Operator yang dipilih tidak valid");
					return;
			}

			document.getElementById("hasil").value = hasil;
		}
	</script>
    </main>
</div>
</html>
