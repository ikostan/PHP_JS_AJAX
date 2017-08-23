<?php

echo '
	<div id="menu">
		<span class="mitem"><a href="../index.html">Home</a></span>
		<span class="mitem"><a href="../showtab/showtable.html">Show All Tables</a></span>
		<span class="mitem"><a href="../showprice/showprice.html">Show Price</a></span>
		<span class="mitem"><a href="../showcust/showcustomer.html">Find a Customer: Ajax</a></span>
		<span class="mitem"><a href="../showcust/showcust.php">Find a Customer: PHP</a></span>
	</div><h1>Books Catalog Search</h1>

  <form action="showprice.php" method="post">
  
  <p><strong>Enter Search Price:</strong><br />
  <input name="searchprice" type="text" size="40"></p>
  
  <p>
  <strong>Choose Search Type:</strong><br />
  	<input type="radio" name="searchterm" value="above" checked>Above search price<br>
  	<input type="radio" name="searchterm" value="below">Below search price<br>
  </p>

  <p><input type="submit" name="submit" value="Search"></p>
  </form>
  
  <h2>Search Results</h2>'

?>