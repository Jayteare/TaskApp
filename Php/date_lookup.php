<?php
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
  $_SESSION['shift_date_display'] = null;
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
?>
