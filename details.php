<!DOCTYPE html>
<html>
  <head>
    <title>personal details</title>
    <link rel="stylesheet" href="details.css">
  </head>
  <body>
    <form action="Send_form_data.php"  method="post">
      <div class="details">
      <h2>Enter Your Details</h2>
      <div class="info">
        <input class="fname" type="text" name="name" placeholder="Full name" required>
        <input class="fname" type="email" name="email" placeholder="Email" required>
        <input class="fname" type="text" name="age" placeholder="Age" required>
        <br>
        <br>
        <br>
        <label class="fname" for="gender"> Select you gender</label>
        <select name="gender">
          <option  value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>
      
      <button class="submit" name="submit" type="submit" value="submit" href="payment.html">Next</button>
    </div>
    </div>
    </form>
      
      
  </body>
</html>