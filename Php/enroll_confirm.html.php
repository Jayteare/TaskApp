<!DOCTYPE html>
<?php include 'shiftconfirm.php'; ?>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="stylesheets/styles.css">
    <title>Enrollment Confirmation</title>
  </head>
  <body>
    <div class="shift-body">
    Confirming enrollment in shift:<br><br>
    <?php foreach($result as $row){ ?>
    Shift Day: <?php echo $row['date'] ?> <br>
    Shift Time: <?php echo $row['time_start'] ?> to <?php echo $row['time_end'] ?> <br>
    <form action="462input_handler.php" method="post">
      <input class= "shift-button" type="submit" name="shift_enroll_confirmation" value="Confirm"><br><br>
    </form>
  </div>
  <?php } ?>
  </body>
</html>
