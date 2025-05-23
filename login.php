<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');
        *{
            font-family:"Quicksand", sans-serif;
        }
        body {
            background:url('./images/g.jpg');
            background-repeat: no-repeat;
            backdrop-filter: blur(10px);
            background-size:cover;
            /* background-position-x: 3em; */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .main {
            /* background: #ffffff; */
            padding: 2.5rem;
            border-radius: 8px;
            /* box-shadow: 0 4px 500px rgba(219, 216, 22, 0.59); */
            /* border: 1px solid red; */
            width: 100%;
            max-width: 700px;
            margin-left: 5%;
        }

        form h1 {
            text-align: center;
            text-transform: uppercase;
            font-size: 3.5rem;
            /* margin-bottom: 1.5rem; */
            color: black;
        }
        form h1:hover{
            color: blue;
            transition: 0.4s;
        }

        .inputs {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        input[type="text"],
        input[type="password"] {
            padding: 0.75rem 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            background-color: #fafafa;
            transition:border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: blue;
            outline: none;
        }

        input[type="submit"] {
            padding: 0.75rem 1rem;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
        .message{
            margin-left: 3%;
            color: wheat;
            text-transform:capitalize;
        }
    </style>
</head>
<body>
    <div class="main">
        <form action="" method="post">
            <h1>Login</h1>
            <div class="inputs">
                <input type="text" name="username" placeholder="Username"> 
                <input type="password" name="password" placeholder="Password">

                <input type="submit" name=login value="Login">
            </div>
        </form>
    </div>

    <?php
    include 'conn.php';
        if(isset($_POST['login'])){
            $uname=$_POST['username'];
            $pwd=$_POST['password'];
            if(($uname=='Gautam' && $pwd=='123')){
                session_start();
                $_SESSION['username'] = $uname;
                echo"<script>alert('Welcome $uname');
                window.location.href='dashboard.php';
                </script>";
            }
            else{
                echo"<script>alert('🚨User not Registered🚨');
                window.location.href='login.php';
                </script>";
            }
        
        }
        echo"</div>";
    ?>
</body>
</html>
