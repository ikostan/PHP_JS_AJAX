<?php

echo '
	<div id="menu">
		<span class="mitem"><a href="../index.html">Home</a></span>
		<span class="mitem"><a href="../showtab/showtable.html">Show All Tables</a></span>
		<span class="mitem"><a href="../showprice/showprice.html">Show Price</a></span>
		<span class="mitem"><a href="../showcust/showcustomer.html">Find a Customer: Ajax</a></span>
		<span class="mitem"><a href="../showcust/showcust.php">Find a Customer: PHP</a></span>
	</div>
	<h1>Webstore Search</h1>

  <form action="showtab.php" method="post">
  
  <p><strong>Choose Search Type:</strong><br />
  <select name="searchtype">
  <option value="books_review">Book Review</option>
  <option value="orders">Orders</option>
  <option value="order_items">Order-Items</option>
  <option value="books">Books</option>
  <option value="customers">Customers</option>
  </select>
  </p>

  <p><input type="submit" name="submit" value="Display"></p>
  </form>
  
  <h2>Search Results</h2>';

?>