<!DOCTYPE html>
<html lang = "en_GB">
    <head>
    <meta name = " viewport" content = "width=device-width, initial-scale = 1">
     <link href = "https://fonts.googleapis.com/css?family = Galada" rel = 'stylesheet'>
     <title> Transitive Health </title>
     <style type="text/css">

        /*Login*/
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #06c57f;
            color: white;
            padding: 10px 20px;
            margin: 5px 0;
            border: none;
            cursor: pointer;
            width: 30%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            border: 1px solid #888;
            width: 80%;
        }

        /* Close Button for Login*/

        .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s;
        }

        @-webkit-keyframes animatezoom {
            from {-webkit-transform: scale(0)}
            to {-webkit-transform: scale(1)}
        }

        @keyframes animatezoom {
            from {transform: scale(0)}
            to {transform: scale(1)}
        }

        /*Allow for different style on smaller screens*/

        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }

        .container {
            position: relative;
            width: 100%;
            max-width: 400px;
        }

        .container img {
            width: 100%;
            height: auto;
        }

        .container .btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: green;
            color: purple;
            font-size: 16px;
            padding: 12px 24px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
        }

        .container .btn:hover {
            background-color: black;
        }
        body {
            margin: 0;
            font-family: Galada, Trebuchet MS, sans-serif;
            background-color: white;
        }

        /* Top navigation bar (or menu)*/

        .topnav {
            overflow: hidden;
            background-color: indigo;
        }

        .topnav a {
            float: left;
            display: block;
            color: ivory;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: whitesmoke;
            color: forestgreen;
        }

        .topnav a.active {
            background-color: lavenderblush;
            color: indigo;
        }

        .topnav .search-container {
            float: right;
        }

        .topnav input[type=text] {
            padding: 6px;
            margin-top: 8px;
            /*margin-right: 50px;
            width: 500px;*/
            border: none;
            font-size: 17px;
        }

        .topnav .search-container button {
            float: right;
            padding: 6px;
            margin-top: 8px;
            margin-right: 16px;
            background: #06c57f;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }

        .topnav .search-container button:hover {
            background: skyblue;
        }

        @media screen and (max-width: 600px) {
        .topnav .search-container {
            float: none;
        }
        .topnav a, .topnav input[type=text], .topnav .search-container button {
            float: none;
            display: block;
            text-align: left;
            width: 100%;
            margin: 0;
            padding: 14px;
        }
        .topnav input[type=text] {
            border: 1px solid #ccc;  
        }
    }
        
        * {box-sizing: border-box}
        .mySlides {display: none}
        img {vertical-align: middle;}


        /* Slideshow Container */


        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius:0 3px 3px 0;
            user-select: none;
        }

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }

        .text {
            color: #f2f2f2;
            background-color: indigo;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        .dot {
            cursor: pointer;
            height: 15px;
            width : 15px;
            margin: 0 12px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: green;
        }

        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        @media only screen and (max-width: 300px) {
            .prev, .next, .text {font-size: 12px}
        }

        h1 {
            font-size : 300%;
            color: forestgreen;
            }
        
        p{
            font-size : 125%;
            color: indigo;
            background-color: white;
            }
        
        h2 {
            font-size : 250%;
            color: forestgreen;
            background-color: white;
            }

        h3 {
            font-size : 175%;
            color: forestgreen;
            background-color: white;
            }

        textarea {
            background-color: white;
        }
        </style>
      </head>
      <body>

        <h1> <img src="Images/AdobeStock_80099127.jpeg" alt="Blueberries" title="Back to basics" width="200" height="150" align="middle" /> For Healthy Minds and Bodies </h1>

        <div class="topnav">
            <a class="active" href="#home">Home</a>
            <a href="#news">News</a>
            <a href="#consulation">Consultation</a>
            <a href="exercises.html">Exercises</a>
            <a href="contact.html">Contacts</a>
            <a href="about.html">About</a>
            <div class="search-container">
                <form action="/action_page.php">
                  <input type="text" placeholder="Search what you have in mind..." name="search">
                  <button type="submit">Submit</button>
                </form>
            </div>
        </div>

        <div style="padding-left:16px">
        
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

            <div id="id01" class="modal">
                <form class="modal-content animate" action="/action_page.php" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'"
                        class="close" title="Close Modal">&times;</span>
                        <img src="Images/avatar-1577909_1280.png" alt="'Avatar" class="avatar">
                     </div>

            <div class="container">
                <label for="uname"> <b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
                
                <label for="psw"> <b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

                <div class="container" style="background-color:white">
                <button type="button" onclick="document.getElementById('id01').style.display='none'"
                class="cancelbtn">Cancel</button>
                      <span class="psw"> Forgot <a href="#"> password?</a></span>
                  </div>
                </form>
            </div>

        <script>
            var modal = document.getElementById('id01');
            
            /*Once the user clicks anywhere outside of the modal, the login option is closed*/
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>

        <a href="registration_form.html">
            <button>Register</button>
        </a>

        <?php
        // Defining variables and setting variables to empty values
        $firstname = $last_name = $email = $gender = $password = $confirm_password = $interest = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $first_name = test_input($_POST["firstname"]);
            $last_name = test_input($_POST["lastname"]);
            $email = test_input($_POST["email"]);
            $gender = test_input($_POST["gender"]);
            $password = test_input($_POST["password"]);
            $confirm_password = test_input($_POST["confirm_password"]);
            $interest = test_input($_POST["interest"]);

        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            First Name: <input type="text" name="name"><br>
            Last Name: <input type="text" name="name"><br>
            E-mail: <input type="text" name="email"><br>
            Password: <input type="text" name="password"><br>
            Confirm Password: <input type="text" name="confirm_password"><br>
            Area of Interest: <textarea name="interest" rows="5" cols="40"></textarea>
            <br> <br>
            Gender:
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="other"> Other
            <br> <br>
            <input type="submit" name="submit" value="Submit">
        </form>



           



    </body>
</html>


