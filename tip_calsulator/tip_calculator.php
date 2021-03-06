<!DOCTYPE html>
<head>
	<title>Tip Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		
		<div class="wrapper">
			<h1>TIP CALCULATOR</h1>
			<section class="billWrapper">
			<p>Bill Amount</p>
			<input type="text"
			onkeyup="calculateTip()" 
			id="amount"
			placeholder="Amount to be paid"> ₹

			<p>How was the service ?</p>
			<select id="services" onchange="calculateTip()">
				<option selected disabled hidden>Select</option>
				<option value="0.25">25% - Top Notch</option>
				<option value="0.20">20% - Excellent</option>
				<option value="0.15">15% - Good</option>
				<option value="0.10">10% - Bad</option>
				<option value="0.05">5% - Worst</option>
			</select>

			<p>Total number of persons</p>
			<input type="text"
			onkeyup="calculateTip()"
			id="persons"
			placeholder="Number of people sharing the bill">

		</div>

		<div class="tip"> 
			<p>Tip Amount</p> 
			<span id="total">0 </span> ₹
			<span id="each">each</span>
		</div>
		</section>
	</div>
  
    <script src="script.js"></script>
</body>
</html>