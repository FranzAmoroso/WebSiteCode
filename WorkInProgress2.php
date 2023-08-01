<?php
if(isset($_GET['MyBlog'])){
    header('location:index.php');
}
if(isset($_GET['WebCodeSkill'])){
    header('location:WebCodeSkill.php');
}
if(isset($_GET['portafoglio'])){
    header('location:portafoglio.php');
}
if(isset($_GET['contact'])){
    header('location:contact.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBlog: WebCodeSite /Amoroso-Franz/</title>
    <!-- Style -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <!-- JavaScript -->
    <script src="script.js"></script>


</head>

<body class="bodyD">
    <div>

        <!-- menu orizzontale 1 -->
        <div class="JCH">
            <div class="JM"><form action="" method="get">
                <div class="M">
                    <h1 class="T1">WebCodeSite</h1>
                    <span class="SM">
                        <li class="LM LM4"><button type="submit" name="MyBlog" class="BTM">MyBlog</button></li>
                        <li class="LM LM2"><button type="submit" name="WebCodeSkill" class="BTM">WebCodeSkill</button></li>
                        <li class="LM LM3"><button type="submit" name="documentation" class="BTM">In Progress</button></li>
                        <li class="LM LM1"><button type="submit" name="portafoglio" class="BTM">In Progress</button></li>
                        <li class="LM LM5"><button type="submit" name="contact" class="BTM">In Progress..</button></li>
                        </form>
                    </span>
                    <span class="LMP">

                    <!-- <div class="accedi"><p class="pAccedi">Accedi</p></div> -->
                        <p class="UM">Ciao, User</p>
                        <img src="img/user1.png" alt="Accedi" class="IMGMA fa-spin">
                        
                        <!-- Menù Verticale -->
                        <div class="CML ">
                            <div class="ML"></div>
                            <div class="ML"></div>
                            <div class="ML"></div>
                        </div>
                    </span>
                </div>
            </div>
            <div id="MeTL" class="MTL">
                <form action="" method="get">
                <span>
                        <li class="LM2"><button type="submit" name="WebCodeSkill" class="BTM">WebCodeSkill</button></li>
                        <li class="LM4"><button type="submit" name="MyBlog" class="BTM">MyBlog</button></li>
                        <li class="LM3"><button type="submit" name="documentation" class="BTM">In Progress</button></li>
                        <li class="LM1"><button type="submit" name="portafoglio" class="BTM">In Progress</button></li>
                        <li class="LM5"><button type="submit" name="contact" class="BTM">In Progress..</button></li>
                    </form>
                </span>
            </div>

            <!-- Menù User -->
            <div id="MeT" class="MT">
                <span>
                    <li>MyCreation</li>
                    <li>Progress</li>
                    <li>Carers</li>
                    <li>Impostazioni</li>
                    <li>Esci</li>
                </span>
            </div>
            <div class="JHT"></div>



        </div>
    </div>
</body>

</html>