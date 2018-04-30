<?php
  session_start();
  include 'initiate_db.php';
  //This function takes a given date and provides the start/end date of the week of that selected date
  function weekStartEnd($week, $year)
  {
    $time = strtotime("1 January $year", time());
	  $day = date('w', $time);
	  $time += ((7*$week)+1-$day)*24*3600;
	  $startend[0] = date('Y-n-j', $time);
	  $time += 6*24*3600;
	  $startend[1] = date('Y-n-j', $time);
	  return $startend;
  }
  /*
    This conditional determines if a date has been selected by the user, if yes
    then that date is utilized to search for shifts, if not then the current date
    is used as a default.
  */
  if(isset($_SESSION['shift_date_display'])){
    $date = $_SESSION['shift_date_display'];
  }else{
    $date = date("Y-m-d");
  }
  $date = new DateTime($date);
  $foundWeek = $date->format("W");
  //Fixes discrepencies in which week is selected by date() function.
  if($date->format("D") != "Sun"){
    $foundWeek = $foundWeek-1;
  }
  $foundYear = $date->format("Y");
  /*
    Adjusts the start and end dates determined by weekStartEnd() function from a
    Monday-Sunday week view to a Sunday-Saturday week view.
  */
  $daterange = weekStartEnd($foundWeek, $foundYear);
  $daterange[0] = date('Y-n-j', strtotime("-1 day", strtotime($daterange[0])));
  $daterange[1] = date('Y-n-j', strtotime("-1 day", strtotime($daterange[1])));
  //Sunday
  $query = "SELECT T1.company_id, T1.idshift, date, TIME_FORMAT(time_start, '%H:%i') as time_start, TIME_FORMAT(time_end, '%H:%i') as time_end, workers_needed, DAYOFWEEK(date)
            FROM created_shifts T1
              LEFT JOIN queued_shifts T2 ON T1.idshift = T2.idshift
            WHERE DAYOFWEEK(date) = 1 AND date >= '".$daterange[0]."' AND date <= '".$daterange[1]."' AND T1.company_id = '".$_SESSION['company_id']."' AND T2.idshift IS NULL ";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $day1result = $stmt->fetchAll();
  //Monday
  $query = "SELECT T1.company_id, T1.idshift, date, TIME_FORMAT(time_start, '%H:%i') as time_start, TIME_FORMAT(time_end, '%H:%i') as time_end, workers_needed, DAYOFWEEK(date)
            FROM created_shifts T1
              LEFT JOIN queued_shifts T2 ON T1.idshift = T2.idshift
            WHERE DAYOFWEEK(date) = 2 AND date >= '".$daterange[0]."' AND date <= '".$daterange[1]."' AND T1.company_id = '".$_SESSION['company_id']."' AND T2.idshift IS NULL ";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $day2result = $stmt->fetchAll();
  //Tuesday
  $query = "SELECT T1.company_id, T1.idshift, date, TIME_FORMAT(time_start, '%H:%i') as time_start, TIME_FORMAT(time_end, '%H:%i') as time_end, workers_needed, DAYOFWEEK(date)
            FROM created_shifts T1
              LEFT JOIN queued_shifts T2 ON T1.idshift = T2.idshift
            WHERE DAYOFWEEK(date) = 3 AND date >= '".$daterange[0]."' AND date <= '".$daterange[1]."' AND T1.company_id = '".$_SESSION['company_id']."' AND T2.idshift IS NULL ";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $day3result = $stmt->fetchAll();
  //Wednesday
  $query = "SELECT T1.company_id, T1.idshift, date, TIME_FORMAT(time_start, '%H:%i') as time_start, TIME_FORMAT(time_end, '%H:%i') as time_end, workers_needed, DAYOFWEEK(date)
            FROM created_shifts T1
              LEFT JOIN queued_shifts T2 ON T1.idshift = T2.idshift
            WHERE DAYOFWEEK(date) = 4 AND date >= '".$daterange[0]."' AND date <= '".$daterange[1]."' AND T1.company_id = '".$_SESSION['company_id']."' AND T2.idshift IS NULL ";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $day4result = $stmt->fetchAll();
  //Thursday
  $query = "SELECT T1.company_id, T1.idshift, date, TIME_FORMAT(time_start, '%H:%i') as time_start, TIME_FORMAT(time_end, '%H:%i') as time_end, workers_needed, DAYOFWEEK(date)
            FROM created_shifts T1
              LEFT JOIN queued_shifts T2 ON T1.idshift = T2.idshift
            WHERE DAYOFWEEK(date) = 5 AND date >= '".$daterange[0]."' AND date <= '".$daterange[1]."' AND T1.company_id = '".$_SESSION['company_id']."' AND T2.idshift IS NULL ";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $day5result = $stmt->fetchAll();
  //Friday
  $query = "SELECT T1.company_id, T1.idshift, date, TIME_FORMAT(time_start, '%H:%i') as time_start, TIME_FORMAT(time_end, '%H:%i') as time_end, workers_needed, DAYOFWEEK(date)
            FROM created_shifts T1
              LEFT JOIN queued_shifts T2 ON T1.idshift = T2.idshift
            WHERE DAYOFWEEK(date) = 6 AND date >= '".$daterange[0]."' AND date <= '".$daterange[1]."' AND T1.company_id = '".$_SESSION['company_id']."' AND T2.idshift IS NULL ";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $day6result = $stmt->fetchAll();
  //Saturday
  $query = "SELECT T1.company_id, T1.idshift, date, TIME_FORMAT(time_start, '%H:%i') as time_start, TIME_FORMAT(time_end, '%H:%i') as time_end, workers_needed, DAYOFWEEK(date)
            FROM created_shifts T1
              LEFT JOIN queued_shifts T2 ON T1.idshift = T2.idshift
            WHERE DAYOFWEEK(date) = 7 AND date >= '".$daterange[0]."' AND date <= '".$daterange[1]."' AND T1.company_id = '".$_SESSION['company_id']."' AND T2.idshift IS NULL ";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $day7result = $stmt->fetchAll();
?>
