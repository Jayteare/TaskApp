<!DOCTYPE html>
<html>
<?php session_start(); ?>
  <head>
    <meta charset="utf-8">
    <title>Create New Employee</title>
  </head>
  <body>
    <?php if(isset($_SESSION['newuser'])){ //Displays when 462input_handler.php detects an incorrect PIN was entered ?>
      <form action="/462Project/462input_handler.php" method="post">
        Username:<br>
        <input type="text" name="new_employee_username" value="<?php echo $_SESSION['newuser'] ?>"><br>
        Password:<br>
        <input type="text" name="new_employee_password" value="<?php echo $_SESSION['newpass'] ?>" ><br>
        First Name:<br>
        <input type="text" name="new_employee_fname" value="<?php echo $_SESSION['newfname'] ?>"><br>
        Last Name:<br>
        <input type="text" name="new_employee_lname" value="<?php echo $_SESSION['newlname'] ?>"><br>
        Manager Pin:<br>
        <input type="text" name="new_employee_pin" value="INVALID PIN"><br>
        Email:<br>
        <input type="text" name="new_employee_email" value="<?php echo $_SESSION['newemail'] ?>"><br>
        Phone Number:<br>
        <input type="text" name="new_employee_phone" value="<?php echo $_SESSION['newphone'] ?>"><br><br>
        <input type="submit" name="create_employee_submit" value="Submit">
      </form>
      <?php
      $_SESSION['newuser']=null;
      $_SESSION['newpass']=null;
      $_SESSION['newfname']=null;
      $_SESSION['newlname']=null;
      $_SESSION['newemail']=null;
      $_SESSION['newphone']=null;
    }elseif(isset($_SESSION['newpin'])){ //Displays when 462input_handler.php detects an already taken username was entered.
      ?>
      <form action="/462Project/462input_handler.php" method="post">
        Username:<br>
        <input type="text" name="new_employee_username" value="USERNAME UNAVAILABLE"><br>
        Password:<br>
        <input type="text" name="new_employee_password" value="<?php echo $_SESSION['newpass'] ?>" ><br>
        First Name:<br>
        <input type="text" name="new_employee_fname" value="<?php echo $_SESSION['newfname'] ?>"><br>
        Last Name:<br>
        <input type="text" name="new_employee_lname" value="<?php echo $_SESSION['newlname'] ?>"><br>
        Manager Pin:<br>
        <input type="text" name="new_employee_pin" value="<?php echo $_SESSION['newpin'] ?>"><br>
        Email:<br>
        <input type="text" name="new_employee_email" value="<?php echo $_SESSION['newemail'] ?>"><br>
        Phone Number:<br>
        <input type="text" name="new_employee_phone" value="<?php echo $_SESSION['newphone'] ?>"><br><br>
        <input type="submit" name="create_employee_submit" value="Submit">
      </form>
    <?php
      $_SESSION['newpass']=null;
      $_SESSION['newfname']=null;
      $_SESSION['newlname']=null;
      $_SESSION['newpin']=null;
      $_SESSION['newemail']=null;
      $_SESSION['newphone']=null;
      }else{
    ?>
    <!-- Default screen displayed. -->
    <form action="/462Project/462input_handler.php" method="post">
			Username:<br>
			<input type="text" name="new_employee_username"><br>
			Password:<br>
			<input type="text" name="new_employee_password" ><br>
      First Name:<br>
			<input type="text" name="new_employee_fname"><br>
      Last Name:<br>
			<input type="text" name="new_employee_lname"><br>
      Manager Pin:<br>
			<input type="text" name="new_employee_pin"><br>
      Email:<br>
			<input type="text" name="new_employee_email"><br>
      Phone Number:<br>
			<input type="text" name="new_employee_phone"><br><br>
			<input type="submit" name="create_employee_submit" value="Submit">
	  </form>
  <?php } ?>
  </body>
</html>
