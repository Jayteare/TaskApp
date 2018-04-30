<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php
//including the database connection file
include_once("initiate_db.php");
 
if(isset($_POST['Submit'])) {    
	$day=$_POST['day'];
	$starttime=$_POST['starttime'];
	$endtime=$_POST['endtime'];
	$numreq=$_POST['numreq'];
        
    // checking empty fields
    if(empty($day) || empty($starttime) || empty($endtime) || empty($numreq)) {                
                
        if(empty($day)) {
            echo "<font color='red'>Day field is empty.</font><br/>";
        }
        
        if(empty($starttime)) {
            echo "<font color='red'>Start time field is empty.</font><br/>";
        }
		
		if(empty($endtime)) {
            echo "<font color='red'>End time field is empty.</font><br/>";
        }
		
		if(empty($numreq)) {
            echo "<font color='red'>Number of available Shits field is empty.</font><br/>";
        }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($conn, "INSERT INTO shifts(day,starttime,endtime,numreq) VALUES('$day','$starttime','$endtime','$numreq')");
        
        //display success message
        echo "<font color='green'>Data Added Successfully.";
        echo "<br/><a href='create_shifts.php'>View Result</a>";
    }
}
?>
</body>
</html>
