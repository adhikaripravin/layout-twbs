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
                <a href="">Category</a>
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
    <h1> Add Category </h1>
    </div>
    <div class="container">
  <form action="../auth/backendcategory.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="id">ID</label>
      </div>
      <div class="col-75">
        <input type="text" id="id" name="id" placeholder="Enter ID">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="p_type">Category Name</label>
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
        <label for="description">Description</label>
      </div>
      <div class="col-75">
        <input type="text" id="description" name="description" placeholder="Enter description">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="type">Type</label>
      </div>
      <div class="col-75">
        <select id="type" name="type">
          <option value="product">Product</option>
        </select>
      </div>
    </div>
    
    <div class="row">
      <button type="submit" value="Add" name="add" id="add">Add</button>
    </div>
  </form>
</div>

<table class="center" width="50%" cellspacing="7">
  <tr>
    <br><th>ID</th>
    <th>Category Name</th>
    <th>Description</th>
    <th>Type</th>
    <th>Date</th>
    <th>Action</th>
  </tr>

  <?php
  // button haru ko comment hatayesi aafai set hunxa. button ko css admin.css ma xa 
  //for action button in category 
  //this is update and delete button 
  //echo "<td><a href='#'><input type='submit' value='Delete' class='delete'></a></td>";
  //echo "<td><a href='#'><input type='submit' value='Update' class='update'></a></td>";

  // update category ko page chai authen folder ma xa and tyo update ma click garesi admincategory.php ko table ma aauna paryo. 
  ?>

  </table>
    
</body>
</html>