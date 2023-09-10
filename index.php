<?php
if (isset($_GET['WebSiteSkill'])) {
    header('location:index.php');
}
if (isset($_GET['MyBlog'])) {
    header('location:MyBlog.php');
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

<body class="bodyI">
    <div>
        <div class="JCH">
            <div class="JM">
                <form action="" method="get">
                    <div class="M">
                        <h1 class="T1">WebCodeSite</h1>
                        <span class="SM">
                            <li class="LM LM2 LM3"><button type="submit" name="WebCodeSkill" class="BTM">WebCodeSkill</button></li>
                            <li class="LM LM4"><button type="submit" name="MyBlog" class="BTM">MyBlog</button></li>
                        </span>
                </form>


                <span class="LMP">
                    <!-- <div class=" GUEST">
                        <a href="User/Login.php" class="A-10">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Login
                        </a>
                    </div> -->
                        <p class="UM">User</p>
                        <span class="Us">
                            <img src="img/user1.png" alt="Accedi" class="IMGMA fa-spin">
                        </span>
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
            <form action="" class="MT">
                <span class="L-1"></span>
                <span class="L-1"></span>
                <span class="L-1"></span>
                <span class="L-1"></span>
                <span class="I-5">
                    <p class="UM">User</p>
                    <span class="US">
                        <img src="img/user1.png" alt="Accedi" class="IMGMA fa-spin">
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
                    <a href="">
                        <li class="LM4"><button type="submit" name="MyBlog" class="BTM">MyBlog</button></li>
                    </a>
                    <a href="">
                        <li class="LM2"><button type="submit" name="WebCodeSkill" class="BTM">WebCodeSkill</button></li>
                    </a>

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
        <div id="MeT" class="MT">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            </span>
            <li class="L-5"><a href="" class="L-5">MyCreation</a></li>
            <li class="L-5"><a href="" class="L-5">MyProgress</a></li>
            <li class="L-5"><a href="" class="L-5">MyCarers</a></li>
            <li class="L-5"><a href="" class="L-5">Settings</a></li>
            <li class="L-5"><a href="" class="L-5">Loggout</a></li>
        </div>
        </header>


        <!-- <div class="CHB1">
            <div class="HB">
                <div class="BHB">
                    <h2>Digital-Skill</h2>
                    <p>Fai pratica con esercizi di varie dificoltà, Troverai gli esercizi divisi per linguaggio di programazzione, librerie, framework, e software</p>
                    <span class="IcoX2">
                        <i class="fa-sharp fa-solid fa-caret-down fa-bounce"></i>
                        <i class="fa-solid fa-code fa-beat"></i>
                        <i class="fa-sharp fa-solid fa-caret-down fa-bounce"></i>
                    </span>

                </div>
            </div>

        </div> -->

        <span class="title2">
            <h2>Language Hypertext Markup</h2>
        </span>
        <div class="CGB">
            <div class="GB GB0">
                <div class="GTB">
                    <h3></h3>
                    <p></p>
                </div>
            </div>

            <div class="GB GB1">
                <a href="LHM/HTMLExe.php" class="A-5 GTB1">
                    <div class="LED">
                        <h3>Exercises</h3>
                        <p>HTML5</p>
                    </div>
                </a>
                <a href="LHM/HTMLDocu.php" class="A-5 GTB2">
                    <div class="LED">
                        <h3>Documentation</h3>
                        <p>HTML5</p>
                    </div>
                </a>
            </div>

            <div class="GB GB2">
                <a href="LHM/CSSExe.php" class="A-5 GTB1">
                    <div class="LED">
                        <h3>Esercizi</h3>
                        <p>CSS</p>
                    </div>
                </a>
                <a href="LHM/CSSDocu.php" class="A-5 GTB2">
                    <div class="LED">
                        <h3>Documentation</h3>
                        <p>CSS</p>
                    </div>
                </a>
            </div>
        </div>



        <span class="title2">
            <h2>Programming languages</h2>
        </span>
        <div class="CGB">

            <div class="GB GB4">
                <a href="php/phpExe.php" id="a" class="A-5 GTB1">
                    <div class="LED">
                        <h3>Exercises</h3>
                        <p>PHP</p>
                    </div>
                </a>
                <a href="php/phpDocu.php" id="a" class="A-5 GTB2">
                    <div class="LED">
                        <h3>Documentation</h3>
                        <p>PHP</p>
                    </div>
                </a>
            </div>

            <div class="GB GB5">
                <a href="js/jsexe.html" class="A-5 GTB1">
                    <div class="LED">
                        <h3>Exercises</h3>
                        <p>javascript</p>
                    </div>
                </a>
                <a href="js/javascriptDocu.php" class="A-5 GTB2">
                    <div class="LED">
                        <h3>Documentation</h3>
                        <p>javascript</p>
                    </div>
                </a>
            </div>

            <div class="GB GB3">
                <a href="js/javaExe" class="A-5 GTB1">
                    <div id="GBJAVA" class="LED">
                        <h3>Exercises</h3>
                        <p>Java</p>
                    </div>
                </a>
                <a href="js/javaDocu" class="A-5 GTB2">
                    <div id="GBJAVA" class="LED">
                        <h3>Documentation</h3>
                        <p>Java</p>
                    </div>
                </a>
            </div>
        </div>

        <span class="title2">
            <h2>Framework</h2>
        </span>
        <div class="CGB">

            <div class="GB GB7">
                <a href="Framework/boostraptExe.php" class="A-5 GTB1">
                    <div class="LED">
                        <h3>Exercises</h3>
                        <p>Boostrapt</p>
                    </div>
                </a>
                <a href="Framework/boostraptDocu.php" class="A-5 GTB2">
                    <div class="LED">
                        <h3>Documentation</h3>
                        <p>Boostrapt</p>
                    </div>
                </a>
            </div>

            <div class="GB GB8">
                <a href="Framework/laravel.php" class="A-5 GTB1">
                    <div class="LED">
                        <h3>Exercies</h3>
                        <p>Laravel</p>
                    </div>
                </a>
                <a href="Framework/laravel.php" class="A-5 GTB2">
                    <div class="LED">
                        <h3>Documentation</h3>
                        <p>Laravel</p>
                    </div>
                </a>
            </div>
        </div>


        <span class="title2">
            <h2>Database</h2>
        </span>
        <div class="CGB">
            <div class="GB GB6">
                <a href="DATABASE/sql.php" class="A-5 GTB1">
                    <div class="LED">
                        <h3>Exercies</h3>
                        <p>Sql</p>
                    </div>
                </a>
                <a href="DATABASE/sql.php" class="A-5 GTB2">
                    <div class="LED">
                        <h3>Documentation</h3>
                        <p>Sql</p>
                    </div>
                </a>
            </div>

            <div class="GB GB10">
                <a href="DATABASE/mysql.php" class="A-5 GTB1">
                    <div class="LED">
                        <h3>Exercies</h3>
                        <p>MySql</p>
                    </div>
                </a>
                <a href="DATABASE/mysql.php" class="A-5 GTB2">
                    <div class="LED">
                        <h3>Documentation</h3>
                        <p>MySql</p>
                    </div>
                </a>
            </div>
        </div>


        <span class="title2">
            <h2>Search Engine Optimization</h2>
        </span>
        <div class="CGB">
            <div class="GB GB9">
                <a href="" id="GBSEO" class="A-5 GTB3">
                    <div class="LED">
                        <h3>Documentation</h3>
                        <p>Seo</p>
                    </div>
                </a>
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