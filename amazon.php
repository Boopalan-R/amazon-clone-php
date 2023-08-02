<?php
require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
        *{
            padding: 0px;
            margin: 0px;
        }
        .nav{
            width: 100%;
            height: 80px;
            background: rgb(35, 35, 35);
        }
        .logo{
            width: 100px;
            height: 40px;
            margin-top: 20px;
            position: absolute;
            margin-left: 20px;
        }
        .logo img{
            width: 100%;
            height: 100%;
        }
        .user_details h5{
        font-size:14px;
        font-weight: 400;
        color: white;
        margin-left:180px;
        margin-top: 15px;
        }
        .user_details p{
        font-size:14px;
        font-weight: 700;
        color: white;
        margin-left:180px;
        margin-top: -10px;
        }
        .search_input{
            margin-left: 25px;
            margin-top: 15px;
            padding: 8px;
            background: gainsboro;
            font-size: 13px;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            border: solid 2px orange;
        }
        .input_search{
            padding: 8px;
            margin-left: -5px;
            width: 550px;
            font-size: 13px;

        }
        .search_btn{
            padding: 8px;
            background: orange;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            margin-left: -10px;
            font-size: 15px;
        }
        .india_flag{
            width: 25px;
            height: 15px;
            margin-top:30px;
            margin-left: 20px;
        }
        .language{
            background: transparent;
            font-weight: 600;
            font-size: 15px;
            color: white;
            margin-left: 5px;
            border: none;
            margin-top: 30px;
            height: 20px;
        }
        #user{
            margin-left: -120px;
        }
        .placeorder{
            margin-left: 40px;
            width: 80px;
            background: transparent;
            color: white;
            border: none;
            line-height: 20px;
            margin-top: -15px;
        }
        .placeorder span{
            font-weight: 600;
        }
        .cart{
            background: transparent;
            color: white;
            border: none;
            font-size: 40px;
            margin-top: 14px;
            margin-left: 40px;
        }
        .cart_btn{
            font-size: 18px;
            margin-left: 5px;
            font-weight: 600;
            background: transparent;
            color: white;
            border: none;
            font-family: Arial, Helvetica, sans-serif;
        }
        nav{
            width: 100%;
            height: 40px;
            background: rgb(35, 35, 35);
        }
        ul{
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        li{
            color: white;
            list-style: none;
        }
        .banner{
            width: 100%;
            height: 500px;
        }
        .banner img{
            width: 100%;
            height: 100%;
        }
        .products{
            display: flex;
            flex-wrap: wrap;
            gap: 80px;
            padding: 30px;
        }
        .products_list{
            width: 200px;
            height: 240px;
            border-radius: 10px;
            background: ghostwhite;
        }
        .pro_image{
            width: 100%;
            height: 120px;
            background: white;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .pro_image img{
            width: 100%;
            height: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .word{
            color: black;
            margin-left: 10px;
            font-size: 15px;
            margin-top: 5px;
        }
        .text2{
            color: black;
            margin-left: 10px;
            font-size: 13px;
        }
        .list{
            display: block;
            position: absolute;
            z-index: 1;
            background: white;
            padding: 8px;
            margin-left: 390px;
            width: 540px;
            margin-top: -25px;
            font-size: 13px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <!-- navbar -->
    <div class="nav">
        <div class="logo">
            <img src="https://pngimg.com/uploads/amazon/amazon_PNG11.png" alt="">
        </div>
        <!-- user message -->
        <div class="user_details">
            <h5>Hello</h5>
            <p>Select your address</p>
        </div>
        <!-- user message ends -->
        <!-- search -->
        <div class="search">
            <select name="" id="" class="search_input">
                <option value="">All</option>
            </select>
            <input type="search" onkeyup="search_function()" id="search_bar" class="input_search" placeholder="Search Amazon.in">
            <button class="search_btn"><i class="fa fa-search"></i></button>
        </div>
        <!-- search ends -->
        <!-- language starts -->
        <div class="india_flag">
            <img src="https://upload.wikimedia.org/wikipedia/commons/b/bc/Flag_of_India.png" alt="" width="100%" height="100%">
        </div>
        <select name="" id="" class="language">
            <option value="">EN</option>
        </select>
        <!-- language ends -->
        <div class="user_details" id="user">
            <h5>Hello,Sign in</h5>
            <p>Account & Lists</p>
        </div>
        <button class="placeorder">Return & <span>orders</span></button>
        <i class="fa fa-shopping-cart    cart"><button class="cart_btn">Cart</button></i>
    </div>
    <!-- navbar ends -->
    <!-- list -->
    <ul class="list" id="listofproduct">
        <li class="word">watch</li>
        <li class="word">watch for men</li>
        <li class="word">Mobile</li>
        <li class="word">Realme</li>
        <li class="word">Redmi</li>
        <li class="word">car washer</li>
        <li class="word">Bluetooth Speaker</li>
        <li class="word">Smart watch</li>
    </ul>
    <!-- list ends -->
    <!-- another nav -->
    <nav>
        <ul>
            <li>All</li>
            <li>Amazon mintv</li>
            <li>Sell</li>
            <li>Best seller</li>
            <li>Today Deals</li>
            <li>Mobiles</li>
            <li>New Releases</li>
            <li>Customer Service</li>
            <li>Electronics</li>
            <li>Git Ideas</li>
            <li>Home & Kitchen</li>
        </ul>
    </nav>
    <!-- nav ends -->
    <!-- banner starts -->
    <div class="banner">
            <img src="https://offerscouponsdeals.in/public/web/images/1540209419.jpg" alt="" id="img2">
    </div>
    <!-- banner ends -->
    <!-- products starts -->
    <div class="products">
    <?php
$i = 1;
$rows = mysqli_query($con, "SELECT * FROM amazonproducts ORDER BY id DESC")
?>
<?php foreach ($rows as $row) : ?>
        <div class="products_list">
            <div class="pro_image">
                <img src="img/<?php echo $row["image"]; ?>" alt="">
                <h4 class="word"><?php echo $row["name"]; ?></h4>
                <p class="text2">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <h4 class="word">Price: <?php echo $row["price"]; ?></h4>
            </div>
        </div> 
        <?php endforeach; ?>        
    </div>
    <!-- products ends -->
    <script>
        document.getElementById("listofproduct").style.display="none";
        function search_function(){
            document.getElementById("listofproduct").style.display="block";
            let input = document.getElementById("search_bar").value;
            input = input.toLowerCase();
            let x = document.getElementsByClassName("word");
            for (i = 0; i < x.length; i++) {
		if (!x[i].innerHTML.toLowerCase().includes(input)) {
			x[i].style.display="none";
            document.getElementById("text").innerHTML="no result";
		}   
		else {
			x[i].style.display="list-item";	
            document.getElementById("text").style.display="none";			
		}
	}
}
    </script>
</body>
</html>





