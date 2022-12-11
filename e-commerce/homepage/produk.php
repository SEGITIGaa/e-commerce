<?php
require '../fungsi.php';

session_start();

if( !isset($_SESSION["login"]) ){
    $_SESSION["login"] = false;
}
$produk = ambil("SELECT * FROM produk");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>produk</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link
            rel="preconnect"
            href="https://fonts.gstatic.com"
            crossorigin="crossorigin">
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Righteous&family=Secular+One&display=swap"
            rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>

        <style type="text/tailwindcss">
            * {
                margin: 0;
                padding: 0;
                font-family: 'Poppins', sans-serif;
            }
            *::-webkit-scrollbar {
                display: none;
            }
        </style>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            Rt: 'Righteous',
                            popins: 'Poppins',
                            SO: 'Secular One'
                        },
                        backgroundImage: {
                            'ungu': "url('/img/login-bg.png')",
                            'fluid': "url('/img/fluid.png')",
                            'lock': "url('/img/icons8-lock-50.png')"
                        },
                        colors: {
                            'deac': '#deacf5',
                            '9754': '#9754cb',
                            '6237': '#6237a0',
                            '2810': '#28104e',
                            'f4f8': '#f4f4f8',
                            'd9': 'd9d9d9'
                        }
                    }
                }
            }
        </script>
    </head>
    <body>
        <div class=" flex items-center fixed w-full h-24 bg-f4f8 z-40">

            <a href="./../homepage/index.php">
                <img src="../img/homepage-logo.png" alt="" class="ml-9 mr-4 w-40">
            </a>

            <!-- search bar & icon -->

            <form action="" class="flex w-2/5 h-11 items-center">
                <img src="./../img/icons8-search-30.png" alt="" class="left-56 absolute w-5 ">
                <input
                    type="search"
                    name="search"
                    placeholder="search"
                    autofocus="autofocus"
                    class=" left-56 w-full h-11 px-12 rounded-lg placeholder:text-2810 placeholder:font-thin placeholder:text-base focus:outline-none focus:border-2 focus:border-deac">
                <!-- <img src="./../img/icons8-cancel-32.png" alt="" class="relative right-16
                w-6"> -->
            </form>

            <!-- cart & like icon -->
            <a href="./../cart/cart.html" target="_self" class="cart-logo">
                <img
                    src="./../img/icons8-shopping-cart-50.png"
                    alt=""
                    class=" w-8 z-20 ml-40 order-2">
            </a>
            <a href="#" target="_self" class="lope-logo">
                <img src="./../img/icons8-heart-50.png" alt="" class=" w-8 z-20 ml-11 order-3">
            </a>

            <!-- profile -->
            <?php if($_SESSION["login"] === true) : ?>
            <div class="w-11 absolute right-20">
                <a href="profile.html">
                    <img
                        src="./../img/casual-life-3d-profile-picture-of-man-in-green-shirt-and-orange-hat.png"
                        alt="">
                </a>
            </div>
            <?php endif ; ?>

            <!-- login & register -->
            <?php if($_SESSION["login"] === false) : ?>
            <div class="absolute right-20 flex">
                <button
                    class="border-4 border-9754 py-2 px-3 mr-2 rounded-xl font-bold text-9754 hover:shadow-md hover:shadow-violet-300">
                    <a href="../login/login.php">Login</a>
                </button>
                <button
                    class="py-2 px-1 bg-9754 border-9754 font-bold text-f4f8 border-4 rounded-xl hover:shadow-md hover:shadow-violet-300">
                    <a href="../register/register.php">Sign Up</a>
                </button>
            </div>
            <?php endif ; ?>

            <!-- <div class="hamburger_menu"> <input type="checkbox" name="" id="input"
            onclick="popup()"> <span></span> <span></span> <span></span> </div> -->
        </div>
        <div class="flex border-4">
            <!-- container 1 -->
            <div >
                <img
                    src="./../img/durek.jfif"
                    alt=""
                    class="absolute top-52 left-12 w-96 h-96 rounded-xl hover:border-4 hover:border-slate-500">
            </div>
            <!-- container 2 -->
            <div class="absolute top-52 left-1/3 w-1/3 h-2/3 p-5 container border-2">
                <h1 class="font-bold text-4xl">Permen mint</h1>
                <h3 class="text-slate-600 text-2xl mb-6 p-2 flex gap-2 font-semibold items-center">
                        <img src="./../img/icons8-price-tag-48.png" alt="" class="w-5 h-5 ">12.000</h3>
              <div class="">
              <h1 class="font-semibold text-lg border-t-4 border-b-4 p-3">Deskripsi produk</h1>
              <div class="pt-3">
                  <h4 class="font-semibold text-slate-800 text-lg">kondisi : bekas gigit 1x</h4>
                  <h4 class="font-semibold text-slate-800 text-lg">kategori : olahraga</h4>
                  <p class="pt-5">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime nisi sequi qui doloremque totam quos necessitatibus consequatur. Praesentium molestiae ea velit neque ipsam quia possimus ducimus sit quibusdam! Accusamus, labore?
                  </p>
              </div>
              </div>
            </div>
        </div>
    </body>
</html>