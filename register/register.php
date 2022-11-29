
<?php
            $conn = mysqli_connect('localhost','root','','ecommerce');
            if (isset($_POST['submit'])) {
                $username = htmlspecialchars( mysqli_real_escape_string($conn,$_POST['username']));
                $email = htmlspecialchars( mysqli_real_escape_string($conn,$_POST['email']));
                $password = htmlspecialchars (sha1($_POST['pwd']));
                

                $query = "INSERT INTO user VALUE('','$username','$email','$password')";
                mysqli_query($conn,$query);

                if (mysqli_affected_rows($conn)>0) {
                    echo "berhasil";
                } else {
                    echo "gagal";
                    echo "<br>";
                    echo mysqli_error($conn);
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
                'u100': '#deacf5',
                'u200': '#9754cb',
                'u300': '#6237a0',
                'u400': '#28104e',
                'pth200':'#f4f4f8'
            },
            }
          }
        }
      </script>
      <style >
        input{
            color: antiquewhite;
        }
      </style>
</head>
<body>
        
    
        <a href="./../login/login.html">
           <img src="./../img/icons8-go-back-64.png" alt="" class="w-[35px] m-8">
        </a>

        <h1 class="text-5xl text-u400 font-SO mt-32 ml-28 ">Selamat datang di Tokonuaing!!</h1>
        <p class=" ml-28 mt-9">E-commerce ter the best di Jawa</p>
    <img src="./../img/Tablet login-amico.png" alt="" class="w-1/4 absolute left-1/4 top-1/3">
    <!-- container -->
    <div class="absolute right-0 top-0 bottom-0 w-1/4 bg-pth200 flex items-center">
           
            <form action="" method="post" class="flex w-full justify-center flex-col p-14 absolute bottom-0 top-0" >
                <div class="w-full">
                    <h1 class="font-Rt flex justify-center mb-4 text-4xl   ">
                        Sign Up
                </h1>
               <div class="flex flex-col space-y-6">
                 <!-- usr name -->
                 <input type="text" name="username" id="username" placeholder="username"  required autocomplete="off" 
                 class="border-2 border-white w-full p-3 m-1 rounded-lg 
                 bg-none outline-none focus:border-u200 focus:border-2">
                 <!-- email -->
                 <div class="group h-14">
                     <input type="email" name="email" id="email" placeholder="email" autocomplete="off" class=" border-2 border-white w-full p-3 m-1 rounded-lg bg-none focus:outline-none focus:border-u200 focus:border-2 invalid:text-red-500 focus:invalid:border-red-500 peer">
                         <p class="mx-3 my-1 text-xs text-red-500 invisible peer-invalid:visible">Email invalid </p>
                     </div>
                 <!-- pass -->
                 <div class="group">
                     <input type="password" name="password" id="pwd" placeholder="password" required autocomplete="off"
                         class="border-2 border-white w-full p-3 m-1 rounded-lg 
                         bg-none outline-none focus:border-u200 focus:border-2 peer">
                     <img src="./../img/icons8-eye-24.png" alt="" id="lock" class="z-[2] w-6 absolute right-4 -mt-10 mr-12 invisible peer-focus:visible" >
                         <input type="checkbox" onclick="hideAndShow()" class=" opacity-0 absolute w-[30px] h-[30px] right-4 -mt-10 mr-12 z-30">
                     </div>
                     <!-- confirm pass -->
                     <input type="password" name="conpass" id="conass"placeholder=" confirm password" required autocomplete="off"
                     class="border-2 border-white w-full p-3 m-1 rounded-lg 
                     bg-none outline-none focus:border-u200 focus:border-2">
                     
                     <!-- button -->
                     <button type="submit" name="submit" 
                     class="flex justify-center items-center 
                     w-1/3 mt-6 py-2 rounded-full bg-u400 text-u100 
                     hover:bg-u100 hover:text-u400 hover:shadow-lg 
                     hover:shadow-violet-200">
                     confirm
                 </button>
               </div>
            </form>
        </div>
    </div>
    <script>
        function hideAndShow() {
    var hide = document.getElementById("pwd");
    if (hide.type === "password") {
        hide.type = "text";
    }else{
        hide.type = "password";
    }
   }
    </script>
</body>
</html>
