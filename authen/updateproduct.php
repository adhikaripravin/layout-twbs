
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../admin/admin.css">

</head>
<body>
    <header class="header">
        <a href="../admin/admindashboard.php"> Admin Dashboard </a>
        <div class="logout">
            <a href="../admin/adminlogin.php">Logout</a>
        </div>
    </header>
    <aside>
        <ul>
        <li>
                <a href="../admin/admindashboard.php">Dashboard</a>
            </li>
            <li>
                <a href="../admin/admincategory.php">Category</a>
            </li>
            <li>
                <a href="../admin/adminproduct.php">Product</a>
            </li>
            <li>
                <a href="../admin/adminenquiry.php">Enquiry</a>
            </li>
            <li>
                <a href="../admin/admininvoice.php">Invoice</a>
            </li>
            <li>
                <a href="../admin/adminreport.php">Sell Report</a>
            </li>
            <li>
                <a href="../admin/admininventory.php">Check Inventory</a>
            </li>
        </ul>
    </aside>
    <div class="content1">
    <h1> Update Parts </h1>
    </div>
    <div class="container">
  <form action="../auth/updateproduct.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="id">ID</label>
      </div>
      <div class="col-75">
        <input type="text" id="id" value="" name="id" placeholder="Enter ID">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="p_type">Product Type</label>
      </div>
      <div class="col-75">
        <select id="p_type" name="p_type">
          <option value="interior">Interior Parts</option>
          <option value="exterior">Exterior Parts</option>
          
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="p_name">Product Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="p_name" value="" name="p_name", placeholder="Enter Product Name">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="qty">Product Quantity</label>
      </div>
      <div class="col-75">
        <input type="text" id="qty" value="" name="qty", placeholder="Enter Product Quantity">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="product_price">Price</label>
      </div>
      <div class="col-75">
        <input type="text" id="product_price" value="" name="product_price", placeholder="Enter Price">
      </div>
    </div>
    
    
    <div class="row">
      <button type="submit" value="Update" name="update" id="update">Update</button>
    </div>
  </form>
</div>

</body>
</html>



