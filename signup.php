<?php
    require "connection.php";
    // ob_start();
?>

<?php

    $username=$first_name=$sure_name=$email=$password=$barde_date=$barde_month=$barde_year=$gender="";


    if(isset($_POST['btn']))
    {
        $username = $_POST['username'];
        $first_name = $_POST['first_name'];
        $sure_name = $_POST['sure_name'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $barde_date = $_POST['date'];
        $barde_month = $_POST['month'];
        $barde_year = $_POST['year'];
        $gender = $_POST['gender'];
        
        $insert_username = "SELECT * FROM sign_up WHERE USERNAME = '$username'";
        
        $run_query = mysqli_query($conn, $insert_username);

        $num = mysqli_num_rows($run_query);

        if($num==1)
        {
            echo '<script type="text/javascript">';
            echo 'alert("Username already exist please try again")';
            echo '</script>';
        }
        else
        {
            $insert_query = "INSERT INTO sign_up (USERNAME, FIRST_NAME, SURE_NAME, EMAIL, PWD, BIRTH_DATE, BIRTH_MONTH, BIRTH_YEAR, GENDER) VALUES('$username', '$first_name', '$sure_name', '$email', '$password', '$barde_date', '$barde_month', '$barde_year', '$gender')";

            $run_insert_query = mysqli_query($conn, $insert_query);

        //   echo $insert_query. $run_insert_query;

            // redirect("home.php");
            header('location: ./home.html');
        // die();
            // ob_end_flush();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="sign_up_style.css">
</head>
<body>
    <div class="hdg">
        <h3>Please sign in here</h3>
    </div>
    <div class="main">
        <form action="" method="post">
            <table class="table">
                <tr>
                    <td>
                        <label class="lb">Username : </label><input type="text" required class="box" placeholder="Username" name="username">
                    </td>
                    <td>
                        <br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="lb">First name : </label><input type="text" name="first_name" required class="box" placeholder="First name">
                    </td> 
                    <td>
                        <br><br>
                    </td>         
                </tr>
                <tr>
                    <td>
                        <label class="lb">Surename : </label><input type="text" name="sure_name" required class="box" placeholder="Surename">
                    </td>     
                    <td>
                        <br><br>
                    </td>     
                </tr>
                <tr>
                    <td>
                        <label class="lb">Email : </label><input type="text" name="email" required class="box" placeholder="Mobile number or email address">
                    </td>     
                    <td>
                        <br><br>
                    </td>     
                </tr>
                <tr>
                    <td>
                        <label class="lb">Password : </label><input type="password" required class="box" name="pass" placeholder="Password">
                    </td>     
                    <td>
                        <br><br>
                    </td>     
                </tr>
                <tr>
                    <td>
                        <label class="lb" required name="date_of_birth">Birth of date : </label>
                        <select name="date" required>
                            <option value="">Date</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                        <select name="month" required>
                            <option value="">Month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                        <select name="year" required>
                            <option value="">Year</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                        </select>
                    </td>     
                    <td>
                        <br><br>
                    </td>     
                </tr>
                <tr>
                    <td>
                        <label class="lb" required name="gender">Gender : </label>
                            <input type="radio" value="male" required name="gender"><lable class="lb">Male</label>
                            <input type="radio" value="female" required name="gender"><lable class="lb">Female</label>
                            <input type="radio" value="other" required name="gender"><lable class="lb">Other</label>
                    </td>     
                    <td>
                        <br><br>
                    </td>     
                </tr>
                <tr>
                    <td>
                        <button class="btn" name="btn">Create an account</button>
                    </td> 
                    <td>
                        <br><br>
                    </td>         
                </tr>
                <tr>
                    <td>
                        <br>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>

