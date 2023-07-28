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
        <a href=""> Admin Dashboard </a>
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
    <h1> Customer Enquiry for parts </h1>
    </div>
    <table class="center" width="50%" cellspacing="7">
  <tr>
    <br><th>ID</th>
    <th>Customer Name</th>
    <th>Phone Number</th>
    <th>Bike Model</th>
    <th>Query Parts</th>
    <th>Message</th>
    <th>Action</th>
  </tr>
  <?php
  //for action button in enquiry 
  //available or not available button should be in adminenquiry.php
  
// frontend to (contact us) ko form chai send ma click gare pachi admin panel ko enquiry ma aauna paryo

  ?>
    </table>

    


</body>
</html>