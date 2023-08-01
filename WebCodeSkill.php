<?php
if (isset($_GET['WorkInProgress1'])) {
    header('location:WorkInProgress1.php');
}
if (isset($_GET['MyBlog'])) {
    header('location:index.php');
}
if (isset($_GET['WorkInProgress2'])) {
    header('location:WorkInProgress2.php');
}
if (isset($_GET['WorkInProgress3'])) {
    header('location:WorkInProgress3.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebCodeSite: All the DigitalSkill of the Site with exercies and documentation, for your Programming and Hypertext Markup Language</title>

    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- javascript -->
    <script src="script.js"></script>
</head>

<body class="BodyE">

    <!-- menu orizzontale 1 -->
    <div class="JCH">
        <div class="JM">
            <form action="" method="get">
                <div class="M">
                    <h1 class="T1">WebCodeSite</h1>
                    <span class="SM">
                        <li class="LM LM2"><button type="submit" name="WebCodeSkill" class="BTM">WebCodeSkill</button></li>
                        <li class="LM LM4"><button type="submit" name="MyBlog" class="BTM">MyBlog</button></li>
                        <li class="LM LM3"><button type="submit" name="WorkInProgress1" class="BTM">WorkInProgress</button></li>
                        <li class="LM LM1"><button type="submit" name="WorkInProgress2" class="BTM">WorkInProgress</button></li>
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
                <li class="LM4"><button type="submit" name="MyBlog" class="BTM">MyBlog</button></li>
                <li class="LM2"><button type="submit" name="WebCodeSkill" class="BTM">WebCodeSkill</button></li>
                <li class="LM3"><button type="submit" name="WorkInProgress1" class="BTM">WorkInProgress</button></li>
                <li class="LM1"><button type="submit" name="WorkInProgress1" class="BTM">WorkInProgress</button></li>
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

    <div class="CB">
        <div class="CHB1">
            <div class="HB">
            <h2>Digital-Skill</h2>
            <p>Fai pratica con esercizi di varie dificoltà, Troverai gli esercizi divisi per linguaggio di programazzione, librerie, framework, e software</p>
        <span class="IcoX2">
            <i class="fa-sharp fa-solid fa-caret-down fa-bounce" ></i>
            <i class="fa-solid fa-code fa-beat"  ></i>
            <i class="fa-sharp fa-solid fa-caret-down fa-bounce" ></i>
        </span>
            
           
            </div>
            
        </div>

        <span class="title2"><h2>Language Hypertext Markup</h2></span>
            <div class="CGB">
                <div class="GB GB0">
                    <div class="GTB">
                            <h3></h3>
                            <p></p>
                        </div>
                    </div>

                <div class="GB GB1">  
                    <div class="GTB1">
                        <a href="LHM/HTMLExe.php" class="LED">
                            <h3>Exercises</h3>
                            <p>HTML5</p>
                        </a>
                    </div>
                    <div class="GTB2">
                        <a href="LHM/HTMLDocu.php" class="LED">
                            <h3>Documentation</h3>
                            <p>HTML5</p>
                        </a>
                    </div>
                </div>

                <div class="GB GB2">
                    <div class="GTB1">
                        <a href="LHM/CSSExe.php" class="LED">
                            <h3>Esercizi</h3>
                            <p>CSS</p>
                        </a>
                    </div>
                    <div class="GTB2">
                        <a href="LHM/CSSDocu.php" class="LED">
                            <h3>Documentation</h3>
                            <p>CSS</p>
                        </a>
                    </div>
                </div>
            </div>



        <span class="title2"><h2>Programming languages</h2></span>
            <div class="CGB">
                
                <div class="GB GB4">
                        
                    <div class="GTB1">
                        <a href="php/phpExe.php" id="a" class="LED">
                            <h3>Esercizi</h3>
                            <p>PHP</p>
                        </a>
                    </div>
                    <div class="GTB2">
                        <a href="php/phpDocu.php" id="a" class="LED">
                            <h3>Documentation</h3>
                            <p>PHP</p>
                        </a>
                    </div>            
                </div>

                <div class="GB GB5">
                    <div class="GTB1">
                        <a href="js/javascriptExe.php" class="LED">
                            <h3>Exercises</h3>
                            <p>javascript</p>
                    </div></a>
                    <div class="GTB2">
                        <a href="js/javascriptDocu.php" class="LED">
                            <h3>Documentation</h3>
                            <p>javascript</p>
                    </div></a>
                </div>
                    
                <div class="GB GB3">
                    <div class="GTB1">
                        <a href="js/javaExe" id="GBJAVA" class="LED">
                            <h3>Exercises</h3>
                            <p>Java</p>
                        </a>
                    </div>
                    <div class="GTB2">
                        <a href="js/javaDocu" id="GBJAVA" class="LED">
                            <h3>Documentation</h3>
                            <p>Java</p>
                        </a>
                    </div>
                </div>
            </div>


        <span class="title2"><h2>Framework</h2></span>
            <div class="CGB">
                <div class="GB GB7">
                    <div class="GTB1">
                        <a href="Framework/boostraptExe.php" class="LED">
                            <h3>Exercises</h3>
                            <p>Boostrapt</p>
                        </a>
                    </div>
                    <div class="GTB1">
                        <a href="Framework/boostraptDocu.php" class="LED">
                            <h3>Documentation</h3>
                            <p>Boostrapt</p>
                        </a>
                    </div>
                </div>

                <div class="GB GB8">
                    <div class="GTB1">
                        <a href="Framework/laravel.php" class="LED">
                            <h3>Exercies</h3>
                            <p>Laravel</p>
                        </a>
                    </div>
                    <div class="GTB2">
                        <a href="Framework/laravel.php" class="LED">
                            <h3>Documentation</h3>
                            <p>Laravel</p>
                        </a>
                    </div>
                </div>
            </div>


        <span class="title2"><h2>Database</h2></span>
            <div class="CGB">
                <div class="GB GB6">
                    <div class="GTB1">
                        <a href="DATABASE/sql.php" class="LED">
                            <h3>Exercies</h3>
                            <p>Sql</p>
                        </a>
                    </div>
                    <div class="GTB2">
                        <a href="DATABASE/sql.php" class="LED">
                            <h3>Documentation</h3>
                            <p>Sql</p>
                        </a>
                    </div>
                </div>

                <div class="GB GB10">
                    <div class="GTB1">
                        <a href="DATABASE/mysql.php" class="LED">
                            <h3>Exercies</h3>
                            <p>MySql</p>
                            </a>
                    </div>
                    <div class="GTB2">
                        <a href="DATABASE/mysql.php" class="LED">
                            <h3>Documentation</h3>
                            <p>MySql</p>
                            </a>
                    </div>
                </div>
        </div>


        <span class="title2"><h2>Search Engine Optimization</h2></span>
            <div class="CGB">
                <div class="GB GB9">
                    <div class="GTB3">
                        <a href="" id="GBSEO" class="LED">
                            <h3>Documentation</h3>
                            <p>Seo</p>
                        </a>
                    </div>
                </div>
            </div>
    




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