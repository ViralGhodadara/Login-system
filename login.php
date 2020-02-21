<?php
    require "CONNECTION.PHP";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            background-color: beige;
        }
        ::placeholder{
            font-family: verdana;
        }
        .heading{
            font-family: verdana;
            font-size: 28px;
            margin-left: 35%;
            /* text-align: center; */
            color: #54579e;
        }
        .cls{
            margin-top: 10px;
        }
        label{
            font-family: verdana;
            margin-left: 32px;
        }
        .container{
            padding-left: 10px;
            padding-top: 50px;
            margin-left: 30%;
            margin-top: 5%;
            background-color: white;
            height: 170px;
            width: 420px;
        }
        .btn{
            margin-left: 8%;
            height: 28px;
            width: 339px;
            background-color: #6f49ae;
            border: 1px solid #6f49ae;
            border-radius: 3%;
            color: white;
            font-family: verdana;
            font-size: 18px;
        }
        .box{
            height: 17px;
            width: 235px;
        }
    </style>
</head>
<body>
<h3 class="heading">Please log in here</h3>
    <div class="container">
        <form method="post">
            <div closs="cls">
                <table class="tbl">
                    <tr>
                        <label>Username : </label><input type="text" class="box" placeholder="Username" name="uname" required><br><br>
                    </tr>
                    <tr>
                        <label>Password : </label><input type="password" class="box" placeholder="Password" name="pass" required><br><br>
                    </tr>
                    <tr>
                        <!-- <input type="button" name="btn" value="Log in" class="btn"> -->
                        <button class="btn" name="veer">Log in</button>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</body>
</html>

<?php

    $username = $_POST['uname'];
    $password = $_POST['pass'];

    // echo $username. "\nand\n". $password;

    if(isset($_POST['veer'])){

        $select_query = "SELECT * FROM sign_up WHERE '$username' = USERNAME AND '$password' = PWD";

        $run_query = mysqli_query($conn, $select_query);

        $num = mysqli_num_rows($run_query);

        if($num == 1){
            header('location: home.html');
            exit();
        }
        else{
            echo '<script>alert("Username or password incorect please try again");</script>';
        }
    }
?>