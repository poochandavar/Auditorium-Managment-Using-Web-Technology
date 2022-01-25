 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
        .check{
    background-color: #EFC050;
color: #fff;
padding: 10px 20px;
border: none;
font-size: 18px;
border-radius: 100px;
-webkit-border-radius: 100px;
-moz-border-radius: 100px;
-ms-border-radius: 100px;
-o-border-radius: 100px;
box-shadow: 7px 10px 12px rgba(0, 0, 0, .1);
cursor: pointer;
transition: all .3s;
-webkit-transition: all .3s;
-moz-transition: all .3s;
-ms-transition: all .3s;
-o-transition: all .3s;
}
.check:hover {
transform: scale(1.03);
-webkit-transform: scale(1.03);
-moz-transform: scale(1.03);
-ms-transform: scale(1.03);
-o-transform: scale(1.03);
box-shadow: 10px 12px 15px rgba(0, 0, 0, .3);
}
@media(max-width: 768px){
    .container .container-audi .container-form{
        width: 100%;
        margin-top: 0;
        
    }
}

    </style>

    <script type="text/javascript">
        function GetDays(){
                var endDate = new Date(document.getElementById("End_Date").value);
                var startDate = new Date(document.getElementById("Start_Date").value);
                return parseInt((endDate - startDate) / (24 * 3600 * 1000));
        }

        function cal(){
            if(document.getElementById("End_Date"))
            {
                    document.getElementById("numdays2").value=GetDays();
            }  
        }

       
    </script>

    <title>Booking For Auditorium</title>
</head>

<body>
    <div class="container">
        <div class="container-audi">
            <h2 class="heading">WELCOME TO SDMCET AUDITORIUM</h2>
            <h3 class="heading-days">About:</h3>
            <p>An auditorium is a room built to enable an audience to hear and watch performances.
               Our College Auditorium has more than 1000 seats. They have to fill the registration form in order to book the auditorium.The admin of the auditorium will check the availablity and confirm your booking for more information please contact the admin.
               Auditorium is avaliable from Monday to Friday(9am to 7pm) and on saturdays(9am-1pm). 
            </p>
            <hr>
            <h4 class="heading-email">E-mail us on : sdmcet.auditorium@gmail.com</h4>

            <button class="check"><a href="list.php">Check List</a></button>
        </div>

        <div class="container-form">        
            <form action="" method="POST">   
        <h2 class="heading heading-yellow">Enter the details below</h2>

        <div class="form-field">
                <label for="DeptName">Select your Department:</label>
        
        <select name="Department" id="DeptName">
            <option value="">--Please choose an option--</option>
            <option value="CSE">CSE</option>
            <option value="ISE">ISE</option>
            <option value="ME">ME</option>
            <option value="CIVIL">CIVIL</option>
            <option value="CHEMICAL">CHEMICAL</option>
            <option value="ECE">ECE</option>
            <option value="EEE">EEE</option>
        </select>
        </div>
        
        <div class="form-field">
        <label for="ActivityName">Activity Name:</label>
        <input type="text" name="ActivityName" required>
        </div>
        
        <div class="form-field" id="Auditorium">
            <div id="StartDate"><p><label class="form">Start Date:</label>
                <input type="date" class="textbox" id="Start_Date" name="StartDate" onchange="cal()" required></p>
            </div>  

            <div id="EndDate"><p><label class="form">End Date:</label>
                <input type="date" class="textbox" id="End_Date" name="EndDate" onchange="cal()" required></p>
            </div>
        </div>
        <div class="form-field">    
            <div id="numdays"><label class="form">Number of Days:</label>
                <input type="text" class="textbox" id="numdays2" name="NoOfDays">    
            </div>
        </div>
    
        <div class="form-field">
        <table>
            <tr>
                <th>Start Time:</th>
                <td>
                    <input type="time" id="appt" name="StartTime" min="09:00" max="19:00" required>
                </td>

                <th>End Time:</th>
                <td>
                    <input type="time" id="appt" name="EndTime" min="09:00" max="19:00" required>
                </td>
            </tr>
        </table>
        </div>
        <button class="btn" name="btn" >REGISTER</button>  
    </form>
    </div>

</div>
</body>
</html>

 <?php

 include 'dbcon.php';
 if (isset($_POST['btn'])) {
     $Department = $_POST['Department'];
     $ActivityName = $_POST['ActivityName'];
     $StartDate = $_POST['StartDate'];
     $EndDate = $_POST['EndDate'];
     $NoOfDays = $_POST['NoOfDays'];
     $StartTime = $_POST['StartTime'];
     $EndTime = $_POST['EndTime'];

     $insertquery = "insert into booking(Department, ActivityName, StartDate, EndDate, NoOfDays, StartTime, EndTime) values('$Department', '$ActivityName', '$StartDate', '$EndDate', '$NoOfDays', '$StartTime', '$EndTime')";

     $query = mysqli_query($con,$insertquery);
     if($query){
    ?>
    <script >
        alert("Inserted successful");
    </script>
    <?php
}else
{
    ?>
    <script >
        alert("Not inserted successful");
    </script>
    <?php
}

 }
?>