<?php

	echo ' 
	<div id="menu">
		<span class="mitem"><a href="../index.html">Home</a></span>
		<span class="mitem"><a href="../showtab/showtable.html">Show All Tables</a></span>
		<span class="mitem"><a href="../showprice/showprice.html">Show Price</a></span>
		<span class="mitem"><a href="../showcust/showcustomer.html">Find a Customer: Ajax</a></span>
		<span class="mitem"><a href="../showcust/showcust.php">Find a Customer: PHP</a></span>
	</div>
	
	<h1>Customers Search: PHP implementation</h1>

  	<form action="showcust.php" method="post">
  
  	<p><strong>Enter Telephone Number:</strong><br />
  	<input name="searchterm" id="searchterm" type="text" size="12"></p>

  	<p><input type="submit" name="submit" value="Search"></p>
  	</form>';

?>