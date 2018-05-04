<?php
  session_start();
  include 'initiate_db.php';
  include 'date_lookup.php';
  //Sunday
  $query = "SELECT T1.company_id, T1.idshift, date, TIME_FORMAT(time_start, '%h:%i%p') as time_start, TIME_FORMAT(time_end, '%h:%i%p') as time_end, workers_needed, DAYOFWEEK(date)
            FROM created_shifts T1
              LEFT JOIN queued_shifts T2 ON T1.idshift = T2.idshift
            WHERE DAYOFWEEK(date) = 1 AND date >= '".$daterange[0]."' AND date <= '".$daterange[1]."' AND T1.company_id = '".$_SESSION['company_id']."' AND T2.idshift IS NULL ";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $day1result = $stmt->fetchAll();
  //Monday
  $query = "SELECT T1.company_id, T1.idshift, date, TIME_FORMAT(time_start, '%h:%i%p') as time_start, TIME_FORMAT(time_end, '%h:%i%p') as time_end, workers_needed, DAYOFWEEK(date)
            FROM created_shifts T1
              LEFT JOIN queued_shifts T2 ON T1.idshift = T2.idshift
            WHERE DAYOFWEEK(date) = 2 AND date >= '".$daterange[0]."' AND date <= '".$daterange[1]."' AND T1.company_id = '".$_SESSION['company_id']."' AND T2.idshift IS NULL ";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $day2result = $stmt->fetchAll();
  //Tuesday
  $query = "SELECT T1.company_id, T1.idshift, date, TIME_FORMAT(time_start, '%h:%i%p') as time_start, TIME_FORMAT(time_end, '%h:%i%p') as time_end, workers_needed, DAYOFWEEK(date)
            FROM created_shifts T1
              LEFT JOIN queued_shifts T2 ON T1.idshift = T2.idshift
            WHERE DAYOFWEEK(date) = 3 AND date >= '".$daterange[0]."' AND date <= '".$daterange[1]."' AND T1.company_id = '".$_SESSION['company_id']."' AND T2.idshift IS NULL ";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $day3result = $stmt->fetchAll();
  //Wednesday
  $query = "SELECT T1.company_id, T1.idshift, date, TIME_FORMAT(time_start, '%h:%i%p') as time_start, TIME_FORMAT(time_end, '%h:%i%p') as time_end, workers_needed, DAYOFWEEK(date)
            FROM created_shifts T1
              LEFT JOIN queued_shifts T2 ON T1.idshift = T2.idshift
            WHERE DAYOFWEEK(date) = 4 AND date >= '".$daterange[0]."' AND date <= '".$daterange[1]."' AND T1.company_id = '".$_SESSION['company_id']."' AND T2.idshift IS NULL ";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $day4result = $stmt->fetchAll();
  //Thursday
  $query = "SELECT T1.company_id, T1.idshift, date, TIME_FORMAT(time_start, '%h:%i%p') as time_start, TIME_FORMAT(time_end, '%h:%i%p') as time_end, workers_needed, DAYOFWEEK(date)
            FROM created_shifts T1
              LEFT JOIN queued_shifts T2 ON T1.idshift = T2.idshift
            WHERE DAYOFWEEK(date) = 5 AND date >= '".$daterange[0]."' AND date <= '".$daterange[1]."' AND T1.company_id = '".$_SESSION['company_id']."' AND T2.idshift IS NULL ";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $day5result = $stmt->fetchAll();
  //Friday
  $query = "SELECT T1.company_id, T1.idshift, date, TIME_FORMAT(time_start, '%h:%i%p') as time_start, TIME_FORMAT(time_end, '%h:%i%p') as time_end, workers_needed, DAYOFWEEK(date)
            FROM created_shifts T1
              LEFT JOIN queued_shifts T2 ON T1.idshift = T2.idshift
            WHERE DAYOFWEEK(date) = 6 AND date >= '".$daterange[0]."' AND date <= '".$daterange[1]."' AND T1.company_id = '".$_SESSION['company_id']."' AND T2.idshift IS NULL ";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $day6result = $stmt->fetchAll();
  //Saturday
  $query = "SELECT T1.company_id, T1.idshift, date, TIME_FORMAT(time_start, '%h:%i%p') as time_start, TIME_FORMAT(time_end, '%h:%i%p') as time_end, workers_needed, DAYOFWEEK(date)
            FROM created_shifts T1
              LEFT JOIN queued_shifts T2 ON T1.idshift = T2.idshift
            WHERE DAYOFWEEK(date) = 7 AND date >= '".$daterange[0]."' AND date <= '".$daterange[1]."' AND T1.company_id = '".$_SESSION['company_id']."' AND T2.idshift IS NULL ";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $day7result = $stmt->fetchAll();
?>
