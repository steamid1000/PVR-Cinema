<?php
      include_once 'db_scripts/login.php';

        function get_post($conn,$var)
        {
            return $conn->real_escape_string($_POST[$var]);
        }
        $tablename =["spiderman1","spiderman2","spiderman3","bhim1","bhim2","bhim3","kings1","kings2","kings3"];
        $index=$_COOKIE['table'];

    if(isset($_POST['submit']))
    {    
         $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];

        $raw_Seats =  $_COOKIE['Seats'];
        $Selected_seats = array_map('intval',explode(',',$raw_Seats)); //* An array of selected seats

        for ($i=0; $i < count($Selected_seats); $i++) { 
            
            $sql = "UPDATE $tablename[$index] SET Age='$age' ,Name='$name' , Gender='$gender', Email='$email'  WHERE Seat_no='$Selected_seats[$i]'";
        if (mysqli_query($conn, $sql)) {
            echo "New record has been added successfully !";
        } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
        }
        }


        
     mysqli_close($conn);
}

            
            setcookie('Name',$name);
            setcookie('Email',$email);
        
            // $_SESSION["Mail"] = $email;
           
            function Redirect($url, $permanent = false) { //Redirects to given page
                header('Location: ' . $url, true, $permanent ? 301 : 302);
                exit();
                }
               Redirect('db_scripts/send_seats.php', false);

?>
