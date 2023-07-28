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
    <h1> Inventory Check </h1>
    </div>
    <table class="center" width="50%" cellspacing="7">
  <tr>
    <br><th>ID</th>
    <th>Category</th>
    <th>Product Name</th>
    <th>Remaining Quantity</th>
    <th>Action</th>
  </tr>
  <?php
  // button haru ko comment hatayesi aafai set hunxa. button ko css admin.css ma xa 
  //for action button in inventory check
  //this is update and delete button 
  //echo "<td><a href='#'><input type='submit' value='Delete' class='delete'></a></td>";
  //echo "<td><a href='#'><input type='submit' value='Update' class='update'></a></td>";

  // jun jun parts ko bill generate garyo tehi parts ko qty haru kam hudai janu paryo. 
  //jun jun parts ko qty increase or decrease hunxa tyo sab admininventory.php page ko table ma aauna paryo.

  // update inventory ko page chai authen folder ma xa and tyo update ma click garesi admininventory.php ko table ma aauna paryo. 
  ?>
    </table>

    


</body>
</html>