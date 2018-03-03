<?php
  session_start();
  include 'initiate_db.php';
  //Activated when Login button is pressed on index.html.php
  if(isset($_POST['login_submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    //Query to check if User/Pass combo is in Employee table
    $query = "SELECT COUNT(*), username, password, fname, lname FROM (SELECT username, password, fname, lname FROM employees WHERE username = '".$username."' && password = '".$password."') AS x";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();
    //Query to check if User/Pass combo is in Manager table
    $manquery = "SELECT COUNT(*), username, password, fname, lname FROM (SELECT username, password, fname, lname FROM managers WHERE username = '".$username."' && password = '".$password."') AS x";
    $manstmt = $db->prepare($manquery);
    $manstmt->execute();
    $manresult = $manstmt->fetchAll();
    /*
    Loop checks query results to determine if user in the Employee table, if
    not checks results of Manager table, redirecting to appropriate homepage.
    If in neither table, user is redirected to login screen.
    */
    foreach ($result as $row){
      if($row['COUNT(*)'] > 0){
        $_SESSION['cur_user'] = $username;
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['lname'] = $row['lname'];
        header('Location:http://localhost/462Project/employee_homepage.html.php');
      }else{
        foreach($manresult as $manrow){
          if($manrow['COUNT(*)'] > 0){
            $_SESSION['cur_user'] = $username;
            $_SESSION['fname'] = $manrow['fname'];
            $_SESSION['lname'] = $manrow['lname'];
            header('Location:http://localhost/462Project/manager_homepage.html.php');
          }else{
            header('Location:http://localhost/462Project/index.html.php');
          }
        }
      }
    }
  }

  //Activated when "Create New Employee Account" is pressed on index.html.php
  if(isset($_POST['create_employee_submit'])){
	  $new_employee_username=$_POST['new_employee_username'];
	  $new_employee_password=$_POST['new_employee_password'];
    $new_employee_fname=$_POST['new_employee_fname'];
	  $new_employee_lname=$_POST['new_employee_lname'];
    $new_employee_pin=$_POST['new_employee_pin'];
	  $new_employee_email=$_POST['new_employee_email'];
    $new_employee_phone=$_POST['new_employee_phone'];
    /*
    Query determines if username provided is already in database, if
    so currently submitted values are stored in $_SESSION to be displayed on
    create_new_employee.html.php
    */
    $checkquery = "SELECT COUNT(*) FROM (SELECT username FROM employees WHERE username = '".$new_employee_username."') AS x";
    $checkstmt = $db->prepare($checkquery);
    $checkstmt->execute();
    $checkresult = $checkstmt->fetchAll();

    foreach ($checkresult as $checkrow) {
      if($checkrow['COUNT(*)'] < 1){
        /*
        Query determines if PIN provided matches an existing manager's personal
        PIN. If PIN doesn match currently submitted values are stored in
        $_SESSION to be displayed on create_new_employee.html.php
        */
        $query = "SELECT COUNT(*) FROM (SELECT pin FROM managers WHERE pin = '".$new_employee_pin."') AS x";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach($result as $row){
          if($row['COUNT(*)'] > 0){
            $query = "INSERT INTO employees VALUES ('".$new_employee_username."', '".$new_employee_password."', '".$new_employee_fname."', '".$new_employee_lname."', '".$new_employee_pin."', '".$new_employee_email."', '".$new_employee_phone."')";
    	      $stmt = $db->prepare($query);
    	      $stmt->execute();
    	      header('Location:http://localhost/462Project/index.html.php');
          }else{
            $_SESSION['newuser']=$new_employee_username;
            $_SESSION['newpass']=$new_employee_password;
            $_SESSION['newfname']=$new_employee_fname;
            $_SESSION['newlname']=$new_employee_lname;
            $_SESSION['newemail']=$new_employee_email;
            $_SESSION['newphone']=$new_employee_phone;
            header('Location:http://localhost/462Project/create_new_employee.html.php');
          }
        }
      }else{
        $_SESSION['newpass']=$new_employee_password;
        $_SESSION['newfname']=$new_employee_fname;
        $_SESSION['newlname']=$new_employee_lname;
        $_SESSION['newpin']=$new_employee_pin;
        $_SESSION['newemail']=$new_employee_email;
        $_SESSION['newphone']=$new_employee_phone;
        header('Location:http://localhost/462Project/create_new_employee.html.php');
      }
    }
  }
?>
