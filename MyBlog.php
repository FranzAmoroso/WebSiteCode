<?php
if(isset($_GET['WebCodeSkill'])){
    header('location:index.php');
}
if(isset($_GET['MyBlog'])){
    header('location:MyBlog.php');
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBlog: WebCodeSite Cit-/Amoroso-Franz/</title>
    <!-- Style -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <!-- JavaScript -->
    <script src="script.js"></script>


</head>

<body class="bodyI">
    <div>
    <div class="JCH">
        <div class="JM">
            <form action="" method="get">
                <div class="M">
                    <h1 class="T1">WebCodeSite</h1>
                    <span class="SM">
                        <li class="LM LM2"><button type="submit" name="WebCodeSkill" class="BTM">WebCodeSkill</button></li>
                        <li class="LM LM4 LM3"><button type="submit" name="MyBlog" class="BTM">MyBlog</button></li>
            </form>
            </span>


            <span class="LMP">

             <a href="../User/Login.php" class="A-10">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Login
             </a>
             <!-- <p class="UM">User</p>
             <span class="Us">
                        
                        <img src="../img/user1.png" alt="Accedi" class="IMGMA fa-spin">
            </span> -->

                <!-- Menù Verticale -->
                <div class="CML ">
                    <div class="ML"></div>
                    <div class="ML"></div>
                    <div class="ML"></div>
                </div>
            </span>
        </div>
    </div>


    <div id="MeTL" class="OF-H">
        <form action="" class="">
            <span class="L-1"></span>
            <span class="L-1"></span>
            <span class="L-1"></span>
            <span class="L-1"></span>
                <span class="I-5">
                    <p class="UM">User</p>
                    <span class="US">
                        <img src="../img/user1.png" alt="Accedi" class="IMGMA fa-spin">
                    </span>
                </span>
                        <li class="L-5"><a href="" class="L-5">MyCreation</a></li>
                        <li class="L-5"><a href="" class="L-5">MyProgress</a></li>
                        <li class="L-5"><a href="" class="L-5">MyCarers</a></li>
                        <li class="L-5"><a href="" class="L-5">Settings</a></li>
                        <li class="L-5"><a href="" class="L-5">Loggout</a></li>
        </form>

        <form action="" method="get" class="MT">
            <span class="S-10">
                <a href=""><li class="LM4"><button type="submit" name="MyBlog" class="BTM">MyBlog</button></li></a>
                <a href=""><li class="LM2"><button type="submit" name="WebCodeSkill" class="BTM">WebCodeSkill</button></li></a>

                <?php
                    $NamePag = $_SERVER['SCRIPT_NAME'];
                    if (strpos($NamePag, 'index') !== true) { ?>

                        <a href="User/Login.php" class="accedi">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            LOGIN
                        </a>
                    <?php } else { ?>
                        <a href="User/Login.php" class="accedi">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            REGISTER
                        </a>
                    <?php }


                    ?>
            </span>
        </form>
        
    </div>


            <!-- Menù User -->
            <div id="MeT" class="">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </span>
                    <li class="L-5"><a href="" class="L-5">MyCreation</a></li>
                    <li class="L-5"><a href="" class="L-5">MyProgress</a></li>
                    <li class="L-5"><a href="" class="L-5">MyCarers</a></li>
                    <li class="L-5"><a href="" class="L-5">Impostazioni</a></li>
                    <li class="L-5"><a href="" class="L-5">Esci</a></li>
            </div>
            </header>
           



        </div>
        <!-- Footer -->
<footer>
    <div class="Cfooter">
        <div class="footer">
            
        </div>
    </div>

</footer>
    <!-- </div> -->
</body>

</html>