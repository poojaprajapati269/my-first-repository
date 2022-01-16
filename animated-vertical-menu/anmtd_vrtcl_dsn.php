<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>html Buttons</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script>
		//For Demo only
		var links = document.getElementsByClassName('link')
		for(var i = 0; i <= links.length; i++)
		   addClass(i)


		function addClass(id){
		   setTimeout(function(){
		      if(id > 0) links[id-1].classList.remove('hover')
		      links[id].classList.add('hover')
		   }, id*750) 
		}
	</script>
</head>
<body>
	<div class="container">
	  <div class="link text">
	    Home</div>
	  <div class="link text">
	    Project</div>
	  <div class="link text">
	    About</div>
	  <div class="link text">
	    Contact</div>
	</div>
</body>
</html>