<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body>

		<div class="divs">
		   <div class="row">
			  <div class="column" style="background-color:#aaa;">
			    <h2>Column 1</h2>
			    <p>Some text..</p>
			  </div>
			  <div class="column" style="background-color:#bbb;">
			    <h2>Column 2</h2>
			    <p>Some text..</p>
			  </div>
			</div>

			<div class="row">
			  <div class="column" style="background-color:#ccc;">
			    <h2>Column 3</h2>
			    <p>Some text..</p>
			  </div>
			  <div class="column" style="background-color:#ddd;">
			    <h2>Column 4</h2>
			    <p>Some text..</p>
			  </div>
			</div>

			<div class="row">
			  <div class="column" style="background-color:#ccc;">
			    <h2>Column 5</h2>
			    <p>Some text..</p>
			  </div>
			  <div class="column" style="background-color:#ddd;">
			    <h2>Column 6 </h2>
			    <p>Some text..</p>
			  </div>
			</div>
		</div>
		<button id="refresh">Refresh</button>

</body>
</html>
<script>
	
jQuery("reload").click(function() {
  var div = jQuery(".divs div:first").remove();
  jQuery(".divs").append(div);
  e.preventDefault();
});

</script>