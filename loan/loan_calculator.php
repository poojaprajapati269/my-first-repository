<!DOCTYPE html>
<head>
	<title>Loan Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="container">
    	<div class="calculator">
	        <h1>Loan Calculator</h1>
	  
	        <p>Amount (₹)     :
	            <input id="amount" type="number" 
	            onkeyup="Calculate()">
	        </p>
	  
	        <p>Interest Rate (Yearly)  :
	            <input id="rate" type="number" 
	            onkeyup="Calculate()">
	        </p>
	  
	        <p>Months to Pay :
	            <input id="months" type="number" 
	            onkeyup="Calculate()">
	        </p>
	  
	        <h2 id="total">EMI : (₹)</h2>
    	</div>
    </section>
  
    <script src="script.js"></script>
</body>
</html>