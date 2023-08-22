<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- font google main -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700;800&family=Oxygen:wght@300;400;700&family=Princess+Sofia&family=Roboto:wght@100&family=Work+Sans:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- font google secondary -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Lobster&family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700;800&family=Oxygen:wght@300;400;700&family=Princess+Sofia&family=Roboto:wght@100&family=Work+Sans:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!--fontawesome -->
    <script
    src="https://kit.fontawesome.com/306f44334f.js"crossorigin="anonymous"></script>
    <!-- normalize css -->
    <link rel="stylesheet" href="../normalize.css">
    <!-- bootstrap & file css -->
    <link rel="stylesheet" href="../bootstrap-4.0.0-dist/css/bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light navbar-light sticky-top">
        <a class="navbar-brand " href="#">Bondi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <i class="fa-solid fa-bars" style="color: #ffffff"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <div class="p">
                <li class="nav-item active">
                    <a class="nav-link" href="./index.php">Products</a>
                </li>
            </div>
            <div class="p">
                <li class="nav-item">
                    <a class="nav-link" href="../client/register.php">Register</a>
                </li>
            </div>
            <div class="l">
                <li class="nav-item">
                   <a class="nav-link" href="login.html">Login</a>
                </li>
             </div>
         </ul>   
        </div>
    </nav>
    <div class="f">
        <form action="index.php" method="post">
            <header>create products</header>
            <div class="in">
                <label for="n">
                    <input type="text" name="name" id="n" placeholder="name" required>
                </label>
            </div>
            <div class="in">
                <label for="p">
                    <input type="number" name="size" id="p" placeholder="size" required>
                </label>
            </div>
            <div class="in">
                <label for="f"> 
                    <input type="text" name="color" id="f" placeholder="color" required>
                </label>
            </div>
            <div class="in">
                <label for="c"> 
                    <input type="number" name="count_in_stock" id="c" placeholder="count_in_stock" required>
                </label>
            </div>
            <div class="for">
                <a href="#">All products</a>
            </div>
            <hr>
            <div class="b">
                <input type="submit" value="create" class="s">
            </div>
            
        </form>
    </div>

    <style>*{
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    text-transform: capitalize;
}
:root{
    --background-color:rgb(25, 149, 134);
    --section_one-color:#f6f6f6;
    --section_two-color: #ffffff;
    --text-color: #000000;
    --text-hover-color:#d9d8d8;
    --shadow-color:rgba(0,0,0,0.1) ;
    --transtion:0.2s;
}
body{
    font-family: 'Noto Sans', sans-serif;
    /* font-family: 'Lobster', cursive; */
    background-color: var(--section_one-color) !important;
}
.navbar{
    background-color: var(--background-color) !important;
}
.navbar-brand{
    color: var(--section_two-color) !important;
    font-size: 40px !important;
    font-weight: 700;
    font-family: 'Lobster', cursive;
    transition: var(--transtion);

}
.navbar-brand:hover{
    color: var(--text-hover-color) !important;
}
.nav-link{
    color: var(--section_two-color) !important;
    margin-left: 20px !important;
    font-size: 24px !important;
    font-weight: 500;
    transition: var(--transtion);
    position: relative;
}
.p .nav-link::before{
    content: "";
    position: absolute;
    width: 70px;
    height: 2px;
    background: transparent;
    left: 9px;
    bottom:5px;
    transition: var(--transtion);
}
.p .nav-link:hover::before{
    content: "";
    position: absolute;
    width: 120px;
    height: 2px;
    background:#c4c4c4;
    left: 9px;
    bottom:5px;
}
.l .nav-link::before{
    content: "";
    position: absolute;
    width: 70px;
    height: 2px;
    background: transparent;
    left: 9px;
    bottom:5px;
    transition: var(--transtion);
}
.l .nav-link:hover::before{
    content: "";
    position: absolute;
    width: 80px;
    height: 2px;
    background:#c4c4c4;
    left: 9px;
    bottom:5px;
}
.navbar-toggler{
    font-size: 40px !important;
}
.f{
    display: flex;
    justify-content: center;
    align-items: center !important;
    height: calc(100vh - 50px);
}
@media (max-width:767px){
    .f{
        height: calc(100vh -50px);
    }
}
@media (max-width:300px){
    .f{
        height: 100vh;
    }
}
form{
    width: 500px;
    height: 480px;
    border: solid 1px var(--section_one-color);
    border-radius: 25px;
    box-shadow: 0 0 0 2px rgba(160, 164, 164, 0.333) ;
    /* border-top-left-radius: 25px;
    border-bottom-right-radius: 25px; */
    background-color: var(--section_two-color) ;
    transition: var(--transtion);
}
@media (max-width:767px){
    form{
        width: 300px;
    }
}
@media (max-width:300px){
    form{
        width: 250px;
    }
}
form:hover{
    box-shadow: 0 0 0 2px rgba(25, 149, 134, 0.733) ;
}
form header{
    text-align:center;
    padding: 15px 0;
    font-size: 40px;
    font-family: 'Lobster', cursive;
}
@media (max-width:300px){
    form header{
        font-size:28px
    }
}

.in{
    display: flex;
    padding: 15px 15px 5px ;
}
.in input{
    border: none;
    border-bottom:1px solid rgba(128, 128, 128, 0.224);
    padding: 6px ;
    width: 450px;
    transition: var(--transtion);
}
@media (max-width:767px){
    .in input{
        width: 250px;
    }
}
@media (max-width:300px){
    .in input{
        width: 200px;
    }
}
.in input:hover{
    border: none;
    border-bottom:2px solid black;
}
::-webkit-input-placeholder {
    color:rgb(20, 90, 82);
    font-size: 20px;
}
  
:-ms-input-placeholder { 
    color:rgb(20, 90, 82);
    font-size: 20px;
}
  
  ::placeholder {
    color: rgb(20, 90, 82);
    font-size: 20px;
}
.for{
    text-align: center;
    font-size: 20px; 
    margin: 6px 0;
}
.for a{
    text-decoration: none;
    color: rgb(20, 90, 82);
}
.for a:hover{
    cursor:wait;
    color: var(--background-color);
}
hr {
    opacity: 10%;
}
.b{
    display: flex;
    justify-content: center;
    padding: 20px 0;
}
.b .s{
    border: 1px solid seagreen;
    border-radius: 12px;
    width: 90px;
    background-color: var(--section_two-color);
    transition: var(--transtion);
}
.b .s:hover{
    background-color: var(--background-color);
    color: white;
    font-size: 20px;
}</style>










    <!-- script sources -->
    <script src="../bootstrap-4.0.0-dist/js/bootstrap.js"></script>
    <script src="../bootstrap-4.0.0-dist/js/cdnjs.cloudflare.com_ajax_libs_popper.js_1.11.0_umd_popper.min.js"></script>
    <script src="../bootstrap-4.0.0-dist/js/code.jquery.com_jquery-3.7.0.min.js"></script>
</body>
</html>




<?php


if(isset($_POST["name"])){
$connection = mysqli_connect("127.0.0.1", "root", "", "ecommerce");
$name = $_POST['name'];
$size = $_POST['size'];
$color = $_POST['color'];
$count_in_stock = $_POST['count_in_stock'];



$query = "INSERT INTO `product_create`
(`name`,`size`,`color`,`count_in_stock`)
VALUES
('$name','$size','$color','$count_in_stock');
";

$result = mysqli_query($connection,$query);

}


