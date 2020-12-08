<!DOCTYPE html>
<html>
<body>
    
    <link rel="stylesheet" type="text/css" href="navigationCSS.css">


<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="inventory">Products</a>
  <a href="storage.html">Storage</a>
  <a href="reminder/reminder.html">Reminders</a>
</div>

<div class="header">
<h1> Welcome to <?php echo $_POST['name']; ?> virtual business!</h1><br>
</div>
<br><br><br><br><br><br><br>
<div class="row">
<div class="column">
    <h2>Business Type</h2>
<?php echo $_POST["type"]; ?><br>
</div>

<div class="column">
    <h2>Business Owner</h2>
<?php echo $_POST["owner"]; ?><br>
</div>

<div class="column">
    <h2>About</h2>
<?php echo $_POST["about"]; ?><br>
</div>
</div>
<br><br><br><br><br><br><br><br>

<div class="footer">
<p>Address: <?php echo $_POST['address']; ?><br></p>
</div>

</body>
</html>




