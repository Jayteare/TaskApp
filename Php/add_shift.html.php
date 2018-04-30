<!doctype html>
<html>
<head>
    <title>Add Shift</title>
</head>

<body>
    <a href="create_shifts.html.php">Home</a>
    <br/><br/>

    <form action="462input_handler.php" method="post">
        <table width="25%" border="0">

            <tr>
                <td>Date:</td>
                <td><input type="date" name="day" required></td>
            </tr>
            <tr>
                <td>Start Time:</td>
                <td><input type="time" name="starttime" required></td>
            </tr>

			<tr>
                <td>End Time:</td>
                <td><input type="time" name="endtime" required></td>
            </tr>

	     <tr>
                <td>Number Required</td>
                <td><input type="number" name="numreq" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="add_shift_submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>
