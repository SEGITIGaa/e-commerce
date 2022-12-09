
<?php


require '../fungsi.php';

session_start();

if( !isset($_SESSION["login"]) ){
    $_SESSION["login"] = false;
}

// if( isset($_SESSION["login"]) ){
//     $_SESSION["login"] = true;
// }




$produk = ambil("SELECT * FROM produk");

// $kategori = ambil("SELECT * FROM kategori");

// if(isset($_POST["search"]) ){
//     $search = $_POST["search"];
//     echo "<script>
//     document.location.href = 'cari.php?search=$search';
//     </script>";
// }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Righteous&family=Secular+One&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>

        <style type="text/tailwindcss">
            *{
                margin: 0;
                padding: 0;
                font-family: 'Poppins', sans-serif;
            }
        </style>
         <script>
            tailwind.config = {
              theme: {
                extend: {
                    fontFamily: {
                        Rt : 'Righteous',
                        popins: 'Poppins',
                        SO : 'Secular One'
                    },
                        backgroundImage: {
                    'ungu': "url('/img/login-bg.png')",
                    'fluid':"url('/img/fluid.png')",
                    'lock': "url('/img/icons8-lock-50.png')"
                },
                    colors: {
                    'deac': '#deacf5',
                    '9754': '#9754cb',
                    '6237': '#6237a0',
                    '2810': '#28104e',
                    'f4f8':'#f4f4f8',
                    'd9': 'd9d9d9'
                },
                }
              }
            }
          </script>
    </head>
    <body class="overflow-y-hidden ">
        <!-- header -->
        <div class=" flex items-center fixed w-full h-24 bg-f4f8">

            <img src="../img/homepage-logo.png" alt="" class="ml-9 mr-4 w-40">

            <!-- search bar & icon -->

            
            <form action="" class="flex w-2/5 h-11 items-center">
                <img src="./../img/icons8-search-30.png" alt="" class="left-56 absolute w-5 ">
                <input type="search" name="search" placeholder="search" autofocus class=" left-56 w-full h-11 px-12 rounded-lg placeholder:text-2810 placeholder:font-thin placeholder:text-base focus:outline-none focus:border-2 focus:border-deac">
                <!-- <img src="./../img/icons8-cancel-32.png" alt="" class="relative right-16 w-6"> -->
            </form>
            
            <!-- cart & like icon -->
            <a href="./../cart/cart.html" target="_self" class="cart-logo">
                <img src="./../img/icons8-shopping-cart-50.png" alt="" class=" w-8 z-20 ml-40 order-2">
            </a>
            <a href="#" target="_self" class="lope-logo">
                <img src="./../img/icons8-heart-50.png" alt="" class=" w-8 z-20 ml-11 order-3">
            </a>
            
            <!-- profile -->
            <?php // if($_SESSION["login"] === true) : ?>  
            <div class="w-11 absolute right-20">
               <a href="profile.html">
                <img src="./../img/casual-life-3d-profile-picture-of-man-in-green-shirt-and-orange-hat.png" alt="">
               </a>
            </div>
            <?php // endif ; ?>

            <!-- login & register -->
            <?php if($_SESSION["login"] === false) : ?>  
                <div class="absolute right-20 flex">
                    <button class="bg-deac py-2 px-3 rounded-l-xl hover:bg-deac hover:shadow-md hover:shadow-violet-300" >
                        <a href="../login/login.php">Login</a>
                    </button>
                    <button class="py-2 px-1 bg-9754 border-9754 border-4 rounded-r-xl">
                        <a href="../register/register.php">Sign Up</a>
                    </button>
                </div>
            <?php endif ; ?>

            <div class="hamburger_menu">
                <input type="checkbox" name="" id="input" onclick="popup()">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="absolute top-28 left-0 right-0 bg-d9d9 border-2 z-10 grid grid-flow-col scroll-auto overflow-y-auto overscroll-auto overscroll-x-contain snap-mandatory p-8 gap-14">
            <a href="./../kategori/kategori.html" class="text-2810 text-sm">
                <button class="flex py-1 px-5 justify-center items-center gap-4 hover:bg-deac hover:rounded-full">
                    <img class="w-8" src="./../img/icons8-buying-64.png" alt="">
                    Toserba
                </button>
            </a>

            <a href="#" class="text-2810 text-sm">
                <button class="flex py-1 px-5 justify-center items-center gap-4 hover:bg-deac hover:rounded-full">
                    <img class="w-8" src="./../img/icons8-tools-64.png" alt="">
                    Perkakas
                </button>
            </a>

            <a href="#" class="text-2810 text-sm">
                <button class="flex py-1 px-5 justify-center items-center gap-4 hover:bg-deac hover:rounded-full">
                    <img class="w-8" src="./../img/icons8-t-shirt-64.png" alt="">
                    Pakaian
                </button>
            </a>

            <a href="#" class="text-2810 text-sm">
                <button class="flex py-1 px-5 justify-center items-center gap-4 hover:bg-deac hover:rounded-full">
                    <img class="w-8" src="./../img/icons8-sofa-64.png" alt="">
                    Furnitur
                </button>

            </a>

            <a href="#" class="text-2810 text-sm">
                <button class="flex py-1 px-5 justify-center items-center gap-4 hover:bg-deac hover:rounded-full">
                    <img class="w-8" src="./../img/icons8-multiple-devices-64.png" alt="">
                    Gadget
                </button>
            </a>

            <a href="#" class="text-2810 text-sm">
                <button class="flex py-1 px-5 justify-center items-center gap-4 hover:bg-deac hover:rounded-full">
                    <img class="w-8" src="./../img/icons8-cycling-64.png" alt="">
                    Olahraga
                </button>
            </a>

        </div>
        
        <!-- benner iklan -->
        <div class="w-1/3 h-52 absolute top-64 left-28 rounded-xl bg-f4f8">

        </div>

        <div class="">
        <h1 class="absolute top-2/3 left-44 text-2xl font-extrabold">Recomended</h1>
        <ul class="produk">
            <?php foreach($produk as $produknya) : ?>
            <li>
                <div class="isi">
                    <a href="produk.php?id=<?= $produknya["id"] ?>">
                        <img src="img/<?= $produknya["img"] ?>">
                        <h4 ><?= $produknya["namaProduk"] ?></h4>
                        <h3>💰 <?= $produknya["hargaProduk"] ?></h3>
                    </a>
                </div>
            </li>
            <li>
                <div class="isi">
                    <a href="produk.php?id=<?= $produknya["id"] ?>">
                        <img src="img/<?= $produknya["img"] ?>">
                        <h4 ><?= $produknya["namaProduk"] ?></h4>
                        <h3>💰 <?= $produknya["hargaProduk"] ?></h3>
                    </a>
                </div>
            </li>   
            
            <?php endforeach ; ?>
        </ul>
        </div>

        <div class="tab-nav">

            <div class="menu-tab-nav">
                <ul class="menu">
                    <li class="menuItem">
                        <a href="#">
                            <img src="./../img/icons8-settings-24.png" alt="">
                            settigs
                        </a>
                    </li>

                </ul>
            </div>

            <script src="./../function.js"></script>
            <!-- <nav>
                <ul>
                    <li>
                        <a href="../homepage/index.html" target="_self">
                            <img src="./../img/icons8-top-menu-50.png" alt="">
                        </a>
                    </li>

                    <li>
                        <a href="#" target="_self">
                            <img src="./../img/icons8-heart-50.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_self">
                           <img src="./../img/icons8-shopping-cart-50.png" alt="">
                        </a>
                    </li>
                </ul>
            </nav> -->
        </div>

    </body>
</html>