<?php

?>

<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise #13</title>
    <link rel="stylesheet" href="static/css/homeStyle.css" />    
 </head>
 <body>
    <!--Begin Header-->
    <header class="navigation">
        <div>Logo</div>
        <div>Menu</div>
    </header>
    <!--End Header-->
    
    <!-- Begin Content-->
    <section class="content sample-bg">
        <div style="background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Flag_of_Djibouti.svg/1200px-Flag_of_Djibouti.svg.png); background-size: cover;">Djibouti</div>
        <div style="background: url(https://cdn.britannica.com/56/2756-004-54509464/Flag-Mongolia.jpg); background-size: cover;">Mongolia</div>
        <div style="background: url(https://cdn11.bigcommerce.com/s-hhbbk/images/stencil/1280x1280/products/744/38228/NKOR0001__65954.1580520451.png?c=2); background-size: cover;">North Korea</div>
    </section>

    <section class="content">
        <form action="connect.php" method="POST">
            <label for="user">User:</label> <br>
            <input type="text" name="name" id="name" required/> <br>
            
            <label for="email">Email:</label> <br>
            <input type="email" name="email" id="email" required/> <br>

            <label for="password">Password:</label> <br>
            <input type="password" name="password" id="password" required/> <br>

            <label for="bday">Birth date:</label> <br>
            <input type="date" name="bday" id="bday" required/> <br> <br>

            <input type="submit" name="submit" id="submit" required/>
        </form>
    </section>

    <!-- End Content-->
    
    <!-- Begin Footer-->
    <footer class="footer">
        <div>Foot Block #1</div>
        <div>Foot Block #2</div>
    </footer>
    <!-- End Footer-->
 </body>
</html>
