

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
                <a href="">Sell Report</a>
            </li>
            <li>
                <a href="../admin/admininventory.php">Check Inventory</a>
            </li>
        </ul>
    </aside>
    <div class="content1">
    <h1> Sell Report </h1>
    </div>
    <table class="center" width="50%" cellspacing="7">
  <tr>
    <br><th>ID</th>
    <th>Parts Name</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Total</th>
    <th>Action</th>
  </tr>
    </table>

    <?php
    // button haru ko comment hatayesi aafai set hunxa. button ko css admin.css ma xa 
  //for action button in sell report
  //this is update and delete button 
  //echo "<td><a href='#'><input type='submit' value='Delete' class='delete'></a></td>";
  //echo "<td><a href='#'><input type='submit' value='Update' class='update'></a></td>";

  //Every bill generate garesi and save ma click garesi id,partsname,qty,price and grandtotal chai adminreport.php ma aauna paryo.(To show sell report)

  // update report ko page chai authen folder ma xa and tyo update ma click garesi adminreport.php ko table ma aauna paryo. 
  ?>


</body>
</html>