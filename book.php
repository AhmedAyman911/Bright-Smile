<!DOCTYPE html>
<html>
<head>
  <?php
        if(isset($_POST['book']))
        {
            require_once("book.inc.php");
        }
  ?>
    <link rel="stylesheet" href="Book.css">
    <meta charset="UTF.8">
    <title>Booking</title>
    <meta name="description" content="Booking">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js">
    </script>
</head>
<body>
    <br>
    <div id="d">
      <h1>Book Your Appointment</h1>
    </div>
    <br>
    <br>
    <form method="POST" action="">
        <label for="fname" class="f">First name:</label><br>
        <input type="text" class="ff" name="fname">
        <br>
        <br>
        <br>
        <br>
        <label for="lname" class="f">Last name:</label>
        <br>
        <input type="text" class="ff" name="lname" >
        <br>
        <br>
        <br>
        <br>
        <label for="dr" class="f">Choose the doctor</label>
        <br>
        <select name="drs" class="ff">
          <option value="Mohamed">Dr.Mohamed Helal</option>
          <option value="dina">Dr.Dina</option>
          <option value="Badr">Dr.Badr Abdel-Hamid</option>
          <option value="amr">Dr.Amr</option>
        </select>
        <br>
        <br>
        <br>
        <br>
        <label for="day" class="f">Choose the day</label>
        <br>
        <select name="day" class="ff">
            <option value="sa">Saturday</option>
            <option value="su">Sunday</option>
            <option value="mo">Monday</option>
            <option value="tu">Tuesday</option>
            <option value="we">Wednesday</option>
            <option value="th">Thursday</option>
          </select>
          <br>
          <br>
          <br>
          <br>
        <label for="hour" class="f">Enter the hour you want</label>
        <br>
        <input type="text" class="ff" name="hour">
        <br>
        <br>
        <br>
        <button type="book" name="book" id="bo">Book</button>
      </form> 
</body>
</html>