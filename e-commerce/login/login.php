<?php
    require '../fungsi.php';
    session_start();

    $error = false;

    if(isset($_POST["submit"])){
        $gmail = $_POST["email"];
        $password = $_POST["password"];
        $result = mysqli_query($conn,"SELECT * FROM user WHERE gmail = '$gmail' ");

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            
            if(password_verify($password,$row["password"])){
                $_SESSION["login"] = true ;
                header("Location:../homepage/index.php");
                exit();
            }
        }

        $error = true;
    }

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Righteous&family=Secular+One&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

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
        }
        }
      }
    }
  </script>

</head>
<body class="font-popins">
    <!-- container -->
    <div class="container">
        <button class="w-9 h-9 m-8 rounded-full hover:bg-deac ">
            <a href="./../homepage/index.php">
                <img src="./../img/icons8-go-back-64.png" alt=""class="w-9">
               </a>
          </button>
        <div class="" >
            <h1 class="text-5xl text-[#28104e] font-SO mt-[120px] ml-28">Selamat datang kembali!!</h1>
            <h3 class=" ml-28 mt-9">Silahkan masuk ke akun anda</h3>
            <!-- image -->
            <img src="./../img/Login-amico.png" alt="" class=" w-1/4 absolute left-1/4 top-1/3">
        </div>
        <!-- form -->
    <form action="" method="post" class="flex flex-col w-1/4 p-16 justify-center absolute right-0 top-0 bottom-0 bg-[#f4f4f8] ">
        <!-- Logn title -->
        <h1 class="font-Rt text-center mt-[5%] mb-[5%] text-4xl">Login</h1>

        <!-- email -->
        <div class="group">
        <input type="email" name="email" id="email" placeholder="email" autocomplete="off" class=" border-2 border-[#fff] w-full p-3 m-1 rounded-[8px] bg-none  focus:outline-none focus:border-[#9754cb] focus:border-2 invalid:text-red-500 focus:invalid:border-red-500 peer">
            <p class="mx-3 my-1 text-sm text-red-500 invisible peer-invalid:visible">Email invalid </p>
        </div>
        <!-- password -->
        <div class="flex relative group">
            <input type="password" name="password" id="pwd" placeholder="password"  autocomplete="off" class="border-2 border-[#fff] -mr-1 w-full p-3 m-1 rounded-lg bg-none outline-none focus:border-[#9754cb] focus:border-2 peer">
            <img src="./../img/icons8-eye-24.png" alt="" id="lock" class="z-[2] w-[24px] absolute right-[4%] top-5 invisible peer-focus:visible" >
            <input type="checkbox" onclick="hideAndShow()" class=" opacity-0 absolute w-[30px] h-[30px] bg-lock right-[5%] top-4 z-30">
            <script src="./../function.js"></script>
        </div>

        <!-- kalau password/gmail salah -->
        <?php if($error === true) : ?>
        <p style="color:red">Gmail/Password Salah</p>
        <?php endif ; ?>
        <!-- Submit button -->
        <button type="submit" name="submit" class=" w-1/3 py-3 rounded-full border-none bg-[#28104e] relative left-1 top-6 text-xs text-[#deacf5] font-medium cursor-pointer hover:bg-[#deacf5] hover:text-[#28104e] hover:shadow-lg hover:shadow-violet-200">
         Login
        </button>

        <!-- switch to registe page -->
        <h4 class="flex justify-center relative -bottom-40 font-semibold">Belum punya akun? <a href="../register/register.html" target="_self" class="underline font-light ml-2"> Sing Up</a></h4>
    </form>

   

    </div>

    <!-- <script>
       function hideAndShow() {
        var hide = document.getElementById("pwd");
        if (hide.type === "password") {
            hide.type = "text";
        }else{
            hide.type = "password";
        }
       }
    </script> -->
</body>
</html>