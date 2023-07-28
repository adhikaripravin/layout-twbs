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
    <h1> Update Sell Report </h1>
    </div>
    <div class="container">
  <form action="../auth/updatecategory.php" method="POST">
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
        <label for="parts">Parts Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="parts" value="" name="parts" placeholder="Enter part name">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="qty"> Quantity</label>
      </div>
      <div class="col-75">
        <input type="text" id="qty" value="" name="qty" placeholder="Enter qty">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="price"> Price</label>
      </div>
      <div class="col-75">
        <input type="text" id="price" value="" name="price" placeholder="Enter price">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="total"> Total</label>
      </div>
      <div class="col-75">
        <input type="text" id="total" value="" name="total" placeholder="Enter Total AMT">
      </div>
    </div>

    
    <div class="row">
      <button type="submit" value="Update" name="update" id="update">Update</button>
    </div>
  </form>
</div>

</body>
</html>