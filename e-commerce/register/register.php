
<?php
    
    require '../fungsi.php';
    session_start();

    if(isset($_POST["submit"])){
        if(register($_POST) > 0 ){
            $_SESSION["login"] = true;
            header("Location:../homepage/index.php");
            exit();
        }else{
            echo "
            <script>
                alert('tidak berhasil')
            </script>
            ";
        }
    }

            
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Righteous&family=Secular+One&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="./../img/e-commerce-logo.png">
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
                'f4f8':'#f4f4f8'
            },
            }
          }
        }
      </script>
</head>
<body>
        
    <button class="w-9 h-9 m-8 rounded-full hover:bg-deac ">
        <a href="./../homepage/index.php">
            <img src="./../img/icons8-go-back-64.png" alt=""class="w-9">
           </a>
      </button>

        <h1 class="text-5xl text-2810 font-SO mt-14 ml-28 ">Selamat datang di Tokonuaing!!</h1>
        <p class=" ml-28 mt-9">E-commece ter the best di Jawa</p>
    <img src="./../img/Tablet login-amico.png" alt="" class="w-1/4 absolute left-1/4 top-1/3">
    <!-- container -->
    <div class="absolute right-0 top-0 bottom-0 w-1/4 bg-f4f8 flex items-center">
           
            <form action="" method="post" class="flex w-full justify-center flex-col p-14 absolute bottom-0 top-0" >
                <div class="w-full">
                    <h1 class="font-Rt flex justify-center mb-14 text-4xl   ">
                        Sign Up
                </h1>
               <div class="flex flex-col space-y-4">
                 <!-- usr name -->
                 <input type="text" name="username" id="username" placeholder="username"  required autocomplete="off" 
                 class="border-2 border-white w-full p-2 m-1 rounded-lg 
                 bg-none outline-none focus:border-9754 focus:border-2">
                 <!-- email -->
                 <div class="group h-14">
                     <input type="email" name="email" id="email" placeholder="email" autocomplete="off" class=" border-2 border-white w-full p-2 m-1 rounded-lg bg-none focus:outline-none focus:border-9754 focus:border-2 invalid:text-red-500 focus:invalid:border-red-500 peer">
                         <p class="mx-3 my-1 text-xs text-red-500 invisible peer-invalid:visible">Email invalid </p>
                     </div>
                 <!-- pass -->
                 <div class="group">
                  <input type="password" name="password" id="pwd" placeholder="password" required autocomplete="off"
                         class="border-2 border-white w-full p-2 m-1 rounded-lg 
                         bg-none outline-none focus:border-9754 focus:border-2 peer">
                     <img src="./../img/icons8-eye-24.png" alt="" id="lock" class="z-[2] w-6 absolute right-4 -mt-10 mr-12 invisible peer-focus:visible" >
                         <input type="checkbox" onclick="hideAndShow()" class=" opacity-0 absolute w-[30px] h-[30px] right-4 -mt-10 mr-12 z-30">
                        <script src="./../function.js"></script>
                    </div>
                     <!-- confirm pass -->
                     <input type="password" name="conpass" id="conass"placeholder=" confirm password" required autocomplete="off"
                     class="border-2 border-white w-full p-2 m-1 rounded-lg 
                     bg-none outline-none focus:border-9754 focus:border-2">
                     
                     <!-- button -->
                     <button type="submit" name="submit" 
                     class="flex justify-center items-center 
                     w-1/3 mt-7 py-2 rounded-full bg-2810 text-deac 
                     hover:bg-deac hover:text-2810 hover:sadow-lg 
                     hover:shadow-violet-200">
                    confirm
                 </button>
               </div>
            </form>
        </div>
    </div>
</body>
</html>