<?php
if (isset($_GET['WorkInProgress'])) {
    header('location:../WorkInProgress1.php');
}
if (isset($_GET['WebCodeSkill'])) {
    header('location:../WebCodeSkill.php');
}
if (isset($_GET['WorkInProgress'])) {
    header('location:../WorkInProgress2.php');
}
if (isset($_GET['WorkInProgress'])) {
    header('location:../WorkInProgress3.php');
}
if (isset($_GET['MyBlog'])) {
    header('location:../index.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: WebCodeSite=Exerxises:PhP/Amoroso-Franz/</title>
    <!-- Style -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css">
    <!-- JavaScript -->
    <script src="../script.js"></script>


</head>

<body class="allbody php">
    <div>

        <!-- menu orizzontale 1 -->
        <div class="JCH">
            <div class="JM">
                <form action="" method="get">
                    <div class="M">
                        <h1 class="T1">WebCodeSite</h1>
                        <span class="SM">
                            <li class="LM LM2"><button type="submit" name="WebCodeSkill" class="BTM">WebCodeSkill</button></li>
                            <li class="LM LM4"><button type="submit" name="MyBlog" class="BTM">MyBlog</button></li>
                            <li class="LM LM3"><button type="submit" name="WorkInProgress" class="BTM">WorkInProgress</button></li>
                            <li class="LM LM1"><button type="submit" name="WorkInProgress" class="BTM">WorkInProgress</button></li>
                </form>
                </span>
                <span class="LMP">

                <!-- <div class="accedi"><p class="pAccedi">Accedi</p></div> -->
                        <p class="UM">Ciao, UserUserUserUserUserUserUser</p>
                        <img src="../img/user1.png" alt="Accedi" class="IMGMA fa-spin">

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
                    <li class="LM3"><button type="submit" name="WorkInProgress" class="BTM">WorkInProgress</button></li>
                    <li class="LM1"><button type="submit" name="WorkInProgress" class="BTM">WorkInProgress</button></li>
                    <li class="LM5"><button type="submit" name="WorkInProgress" class="BTM">WorkInProgress</button></li>
                    <li class="accedi"><p class="pAccedi">Accedi</p></li>
            </form>
            </span>
        </div>

        <!-- Menù User -->
        <div id="MeT" class="MT">
            <span>
                <li>MyCreation</li>
                <li>MyProgress</li>
                <li>MyCarers</li>
                <li>Impostazioni</li>
                <li>Esci</li>
            </span>
        </div>
        <div class="JHT"></div>
 <main>
                <div class="close CTabAccedi " id=""   >
                    <div class="TabAccedi">
                        <span class="CoTiAcc">
                        <span class="CloseTabAcc"><h1 class="Iclose1">X</h1></span>
                        <h2 class="TitAccedi fa-bounce">Accedi</h2>
                        </span>
                        <span class="CCInAcc">
                        <span class="CoInAcc">
                        <!-- <label for="TE-mail">E-mail</label> -->
                        <input type="email" name="email" id="" class="IAcc" placeholder="Indirizzo E-mail">
                        </span>
                        <span class="CoInAcc">
                        <!-- <label for="TPassword">Password</label> -->
                        <input type="password" name="Password" class="IAcc" id="" placeholder="Password">
                        </span>
                        <span class="CoInAcc">
                        <!-- <label for="TPassword">Password</label> -->
                        <button type="submit" name="Accedi" class="BAcc">Accedi</button>
                        </span>
                        <span class="foAcc">
                        <span class="CoInAcc">
                        <!-- <label for="TPassword">Password</label> -->
                        <a href="" class="foPAcc" id="LiPass">Password dimenticata?</a>
                        </span>
                        <hr id="hr1">
                        <span class="CoInAcc">
                        <!-- <label for="TPassword">Password</label> -->
                        <p class="foPAcc">Non hai un Account? <a href="" id="LiRe">Registrati</a></p>
                        </span>
                        </span>
                        </span>
                        
                    </div>
                </div>

        <div class="CHB1">

            <div class="HB">
                <h2>Digital-Skill: PHP</h2>
                <p>Una libreria con esercizi PHP con soluzione di diversi argomenti, Troverai gli esercizi divisi per difficoltà.</p>
                <span class="IcoX2">
                    <i class="fa-sharp fa-solid fa-caret-down fa-bounce"></i>
                    <i class="fa-solid fa-code fa-beat"></i>
                    <i class="fa-sharp fa-solid fa-caret-down fa-bounce"></i>
                </span>
            </div>



        </div>
<!-- Link di collegamento pagina -->
<div class="CLinkPag">
    <a href="../index.php"><p class="linkP">HOME</p></a>
    <code class="linkP1">></code>
    <a href="../WebCodeSkill.php"><p class="linkP">WebCodeSkill</p></a>
    <code class="linkP1">></code>
    <a href="phpExe.php"><p class="linkP">PHP Exercises</p></a>
    <code class="linkP1">></code>
    <a href="tipididati.php"><p class="linkP">TIpi di Dati</p></a>
</div>
</main>
<section>
<!-- Argomenti PHP -->



</section>
    </div>
            <!-- Footer -->
<footer>
    <div class="Cfooter">
        <div class="footer">
            
        </div>
    </div>

</footer>
</body>

</html>