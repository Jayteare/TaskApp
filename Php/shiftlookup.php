<?php
  session_start();
  include 'initiate_db.php';

  //Sunday
  $query = "SELECT company_id, idshift, date, TIME_FORMAT(time_start, '%H:%i') as time_start, TIME_FORMAT(time_end, '%H:%i') as time_end, workers_needed, DAYOFWEEK(date)
            FROM created_shifts
            WHERE DAYOFWEEK(date) = 1 AND company_id = '".$_SESSION['company_id']."' ";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $day1result = $stmt->fetchAll();

  //Monday
  $query = "SELECT company_id, idshift, date, TIME_FORMAT(time_start, '%H:%i') as time_start, TIME_FORMAT(time_end, '%H:%i') as time_end, workers_needed, DAYOFWEEK(date)
            FROM created_shifts
            WHERE DAYOFWEEK(date) = 2 AND company_id = '".$_SESSION['company_id']."' ";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $day2result = $stmt->fetchAll();

  //Tuesday
  $query = "SELECT company_id, idshift, date, TIME_FORMAT(time_start, '%H:%i') as time_start, TIME_FORMAT(time_end, '%H:%i') as time_end, workers_needed, DAYOFWEEK(date)
            FROM created_shifts
            WHERE DAYOFWEEK(date) = 3 AND company_id = '".$_SESSION['company_id']."' ";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $day3result = $stmt->fetchAll();

  //Wednesday
  $query = "SELECT company_id, idshift, date, TIME_FORMAT(time_start, '%H:%i') as time_start, TIME_FORMAT(time_end, '%H:%i') as time_end, workers_needed, DAYOFWEEK(date)
            FROM created_shifts
            WHERE DAYOFWEEK(date) = 4 AND company_id = '".$_SESSION['company_id']."' ";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $day4result = $stmt->fetchAll();

  //Thursday
  $query = "SELECT company_id, idshift, date, TIME_FORMAT(time_start, '%H:%i') as time_start, TIME_FORMAT(time_end, '%H:%i') as time_end, workers_needed, DAYOFWEEK(date)
            FROM created_shifts
            WHERE DAYOFWEEK(date) = 5 AND company_id = '".$_SESSION['company_id']."' ";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $day5result = $stmt->fetchAll();

  //Friday
  $query = "SELECT company_id, idshift, date, TIME_FORMAT(time_start, '%H:%i') as time_start, TIME_FORMAT(time_end, '%H:%i') as time_end, workers_needed, DAYOFWEEK(date)
            FROM created_shifts
            WHERE DAYOFWEEK(date) = 6 AND company_id = '".$_SESSION['company_id']."' ";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $day6result = $stmt->fetchAll();

  //Saturday
  $query = "SELECT company_id, idshift, date, TIME_FORMAT(time_start, '%H:%i') as time_start, TIME_FORMAT(time_end, '%H:%i') as time_end, workers_needed, DAYOFWEEK(date)
            FROM created_shifts
            WHERE DAYOFWEEK(date) = 7 AND company_id = '".$_SESSION['company_id']."' ";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $day7result = $stmt->fetchAll();


?>
