<?php
  session_start();
  include 'initiate_db.php';
  //Activated when Login button is pressed on index.html.php
  if(isset($_POST['login_submit']))
  {
	  $username=$_POST['username'];
    $password=$_POST['password'];
    //Query to check if User/Pass combo is in Employee table
    $empquery = "SELECT COUNT(*), username, password, fname, lname, company_pin FROM (SELECT username, password, fname, lname, company_pin FROM employees WHERE username = '".$username."' && password = '".$password."') AS x";
    $empstmt = $db->prepare($empquery);
    $empstmt->execute();
    $empresult = $empstmt->fetchAll();
    //Query to check if User/Pass combo is in Manager table
    $manquery = "SELECT COUNT(*), username, password, fname, lname, company_id FROM (SELECT username, password, fname, lname, company_id FROM managers WHERE username = '".$username."' && password = '".$password."') AS x";
    $manstmt = $db->prepare($manquery);
    $manstmt->execute();
    $manresult = $manstmt->fetchAll();

    $ownerquery = "SELECT COUNT(*), username, password, fname, lname, company_id FROM (SELECT username, password, fname, lname, company_id FROM owners WHERE username = '".$username."' && password = '".$password."') AS x";
    $ownerstmt = $db->prepare($ownerquery);
    $ownerstmt->execute();
    $ownerresult = $ownerstmt->fetchAll();
    /*
      Loop checks query results to determine if user in the Employee table, if
      not checks results of Manager table, if not in either it checks the Owner table, redirecting to appropriate homepage.
      If in none of the tables, user is redirected to login screen.
    */
    foreach ($empresult as $emprow){
      if($emprow['COUNT(*)'] > 0){
        $_SESSION['cur_user'] = $emprow['username'];
        $_SESSION['fname'] = $emprow['fname'];
        $_SESSION['lname'] = $emprow['lname'];
        $_SESSION['company_id'] = $emprow['company_pin'];
        $_SESSION['role'] = "Employee";
        header('Location:employee_homepage.html.php');
      }else{
        foreach($manresult as $manrow){
          if($manrow['COUNT(*)'] > 0){
            $_SESSION['cur_user'] = $manrow['username'];
            $_SESSION['fname'] = $manrow['fname'];
            $_SESSION['lname'] = $manrow['lname'];
            $_SESSION['company_id'] = $manrow['company_id'];
            $_SESSION['role'] = "Manager";
            header('Location:manager_homepage.html.php');
          }else{
            foreach($ownerresult as $ownerrow){
              if($ownerrow['COUNT(*)'] > 0){
                $_SESSION['cur_user'] = $ownerrow['username'];
                $_SESSION['fname'] = $ownerrow['fname'];
                $_SESSION['lname'] = $ownerrow['lname'];
                $_SESSION['company_id'] = $ownerrow['company_id'];
                $_SESSION['role'] = "Owner";
                header('Location:manager_homepage.html.php');
              }else{
                header('Location:index.html.login.php');
              }
            }
          }
        }
      }
    }
  }

  //Activated when "Submit" button is pressed on create_new_employee.html.php
  if(isset($_POST['create_employee_submit'])){
	  $_SESSION['new_employee_username']=$_POST['new_employee_username'];
	  $_SESSION['new_employee_password']=$_POST['new_employee_password'];
    $_SESSION['new_employee_fname']=$_POST['new_employee_fname'];
	  $_SESSION['new_employee_lname']=$_POST['new_employee_lname'];
    $_SESSION['new_employee_pin']=$_POST['new_employee_pin'];
	  $_SESSION['new_employee_email']=$_POST['new_employee_email'];
    $_SESSION['new_employee_phone']=$_POST['new_employee_phone'];
    /*
      Query determines if username provided is already in database, if
      so currently submitted values are stored in $_SESSION to be displayed on
      create_new_employee.html.php
    */
    $checkquery = "SELECT COUNT(*) FROM (SELECT username FROM employees WHERE username = '".$_SESSION['new_employee_username']."' AND company_pin = '".$_SESSION['new_employee_pin']."') AS x";
    $checkstmt = $db->prepare($checkquery);
    $checkstmt->execute();
    $checkresult = $checkstmt->fetchAll();

    foreach ($checkresult as $checkrow) {
      if($checkrow['COUNT(*)'] < 1){
        /*
          Query determines if PIN provided matches an existing manager's personal
          PIN. If PIN doesn't match, currently submitted values are stored in
          $_SESSION to be displayed on create_new_employee.html.php
        */
        $query = "SELECT COUNT(*) FROM (SELECT idcompany FROM company WHERE idcompany = '".$_SESSION['new_employee_pin']."') AS x";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach($result as $row){
          if($row['COUNT(*)'] > 0){
            $query = "INSERT INTO employees VALUES ('".$_SESSION['new_employee_username']."', '".$_SESSION['new_employee_password']."', '".$_SESSION['new_employee_fname']."', '".$_SESSION['new_employee_lname']."', '".$_SESSION['new_employee_pin']."', '".$_SESSION['new_employee_email']."', '".$_SESSION['new_employee_phone']."')";
    	      $stmt = $db->prepare($query);
    	      $stmt->execute();
            $_SESSION['new_employee_username']=null;
            $_SESSION['new_employee_password']=null;
            $_SESSION['new_employee_fname']=null;
            $_SESSION['new_employee_lname']=null;
            $_SESSION['new_employee_pin']=null;
            $_SESSION['new_employee_email']=null;
            $_SESSION['new_employee_phone']=null;
            $_SESSION['employeeCreateErrorMsg']=null;
    	      header('Location:index.html.php');
          }else{
            $_SESSION['employeeCreateErrorMsg']="Your PIN must be valid!";
            header('Location:create_new_employee.html.php');
          }
        }
      }else{
        $_SESSION['employeeCreateErrorMsg']="Your Username must be unique!";
        header('Location:create_new_employee.html.php');
      }
    }
  }

  //Activated when "Submit" button is pressed on create_new_company.html.php
  if(isset($_POST['create_company_submit'])){
	  $_SESSION['new_company_title']=$_POST['new_company_title'];
    $_SESSION['new_company_pin']=$_POST['new_company_pin'];
	  $_SESSION['new_owner_username']=$_POST['new_owner_username'];
    $_SESSION['new_owner_password']=$_POST['new_owner_password'];
    $_SESSION['new_owner_fname']=$_POST['new_owner_fname'];
    $_SESSION['new_owner_lname']=$_POST['new_owner_lname'];
    $_SESSION['new_owner_fullname']=$_POST['new_owner_fname'] . " " . $_POST['new_owner_lname'];
	  $_SESSION['new_owner_email']=$_POST['new_owner_email'];
    $_SESSION['new_owner_phone']=$_POST['new_owner_phone'];
    /*
      Query determines if company name provided is already in database, if
      so currently an error message is stored in $_SESSION to be displayed on
      create_new_company.html.php
    */
    $checkquery = "SELECT COUNT(*) FROM (SELECT name FROM company WHERE name = '".$_SESSION['new_company_title']."') AS x";
    $checkstmt = $db->prepare($checkquery);
    $checkstmt->execute();
    $checkresult = $checkstmt->fetchAll();

    foreach ($checkresult as $checkrow) {
      if($checkrow['COUNT(*)'] < 1){
        /*
          Query determines if PIN provided already exists. If PIN isn't unique an error message is stored in
          $_SESSION to be displayed on create_new_company.html.php
        */
        $query = "SELECT COUNT(*) FROM (SELECT idcompany FROM company WHERE idcompany = '".$_SESSION['new_company_pin']."') AS x";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach($result as $row){
          if($row['COUNT(*)'] > 0){
            $_SESSION['companyCreateErrorMsg']="Your company PIN must be unique!";
            header('Location:create_new_company.html.php');
          }else{
            /*
              These two queries create an entry in the company table and the owners table upon valid
              submission in create_new_company.html.php
            */
            $query = "INSERT INTO company VALUES ('".$_SESSION['new_company_pin']."', '".$_SESSION['new_company_title']."', '".$_SESSION['new_owner_fullname']."')";
            $stmt = $db->prepare($query);
            $stmt->execute();
            $query = "INSERT INTO owners VALUES ('".$_SESSION['new_owner_username']."', '".$_SESSION['new_owner_password']."', '".$_SESSION['new_owner_fname']."', '".$_SESSION['new_owner_lname']."', '".$_SESSION['new_owner_email']."', '".$_SESSION['new_owner_phone']."', '".$_SESSION['new_company_pin']."')";
            $stmt = $db->prepare($query);
            $stmt->execute();
            $_SESSION['companyCreateErrorMsg']=null;
            $_SESSION['new_company_title']=null;
            $_SESSION['new_company_pin']=null;
            $_SESSION['new_owner_username']=null;
            $_SESSION['new_owner_password']=null;
            $_SESSION['new_owner_fname']=null;
            $_SESSION['new_owner_lname']=null;
            $_SESSION['new_owner_pin']=null;
            $_SESSION['new_owner_email']=null;
            $_SESSION['new_owner_phone']=null;
            header('Location:index.html.php');
          }
        }
      }else{
        $_SESSION['companyCreateErrorMsg']="Your company name must be unique!";
        header('Location:create_new_company.html.php');
      }
    }
  }

  /*
    Activated when the "Confirm" button is selected on enroll_confirm.html.php.  A query is prepared that takes the currently
    selected "shiftid" from created_shifts and stores it along with the appropriate "company_id" and "username" in the queued_shifts
    table.
  */
  if(isset($_POST['shift_enroll_confirmation'])){
    $query = "INSERT INTO queued_shifts VALUES ('".$_SESSION['shift_enroll_id']."', '".$_SESSION['company_id']."', '".$_SESSION['cur_user']."', '".$_SESSION['fname']."', '".$_SESSION['lname']."')";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $_SESSION['shift_enroll_id'] = null;
    header('Location:employee_newshift.html.php');
  }
  //Stores a selected datein $_SESSION for use in shiftlokup.php after employee_newshift.html.php is reached
  if(isset($_POST['shift_date_submit'])){
    $_SESSION['shift_date_display'] = $_POST['shift_date_range'];
    header('Location:employee_newshift.html.php');
  }

  if(isset($_POST['add_shift_submit'])){
    $day=$_POST['day'];
  	$starttime=$_POST['starttime'];
  	$endtime=$_POST['endtime'];
  	$numreq=$_POST['numreq'];

    $query = "INSERT INTO created_shifts VALUES(default, '".$_SESSION['company_id']."', '".$day."', '".$starttime."', '".$endtime."', '".$numreq."')";
    $stmt = $db->prepare($query);
    $stmt->execute();

    header('Location:create_shifts.html.php');
  }

  if(isset($_POST['edit_shift_submit'])){
    $idshift = $_POST['idshift'];
    $day=$_POST['date'];
    $starttime=$_POST['time-start'];
	  $endtime=$_POST['time_end'];
    $numreq=$_POST['workers_needed'];

    $query = "UPDATE created_shifts SET date = '".$day."', time_start = '".$starttime."', time_end = '".$endtime."', workers_needed = '".$numreq."'  WHERE idshift= '".$shiftid."'";
    $stmt = $db->prepare($query);
    $stmt->execute();
    //redirectig to the display page. In our case
    header("Location: create_shifts.html.php");
  }
?>
