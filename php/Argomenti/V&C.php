<?php

if (isset($_GET['MyBlog'])) {
    header('location:../../MyBlog.php');
}
if (isset($_GET['WebCodeSkill'])) {
    header('location:../../index.php');
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
    <link rel="stylesheet" href="style.css">
    <!-- JavaScript -->
    <script src="script.js"></script>


</head>

<body class="allbody">
    <div>

        <!-- menu orizzontale 1 -->
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

             <!-- <a href="../User/Login.php" class="A-10">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Login
             </a> -->
             <p class="UM">User</p>
             <span class="Us">
                        
                        <img src="../../img/user1.png" alt="Accedi" class="IMGMA fa-spin">
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
                        <img src="../../img/user1.png" alt="Accedi" class="IMGMA fa-spin">
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

                <a href="../User/Login.php" class="accedi">  
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    LOGIN
                </a>
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
        
 <main>
    

<!-- Link di collegamento pagina -->
<div class=" CLinkPag">
    <a href="../../index.php"><p class="linkP">HOME</p></a>
    <code class="linkP1">></code>
    <a href="../phpExe.php"><p class="linkP">PHP Exercises</p></a>
    <code class="linkP1">></code>
    <a href="V&C.php"><p class="linkP">Variabili e Costanti</p></a>
</div>
</main>
<section>
    <!-- Argomenti PHP -->
    <h1 class="Title4">Esercizi Variabili e Costanti</h1>
    <div class=" CExercises">
    
       
            
            <div class="CHExercises">
                <div class="HExercises">
            <nav>
                <ol>
                    <li class="PEXE"><a href="#-tracce">Tracks</a></li>
                </ol>
                <ol class="CLTEXE">
                    <li class="LTEXE1 L-1"><a href="#-esercizio-1">Exercise 1</a></li>
                    <li class="LTEXE L-1"><a href="#-esercizio-2">Exercise 2</a></li>
                    <li class="LTEXE L-1"><a href="#-esercizio-3">Exercise 3</a></li>
                    <li class="LTEXE L-1"><a href="#-esercizio-4">Exercise 4</a></li>
                    <li class="LTEXE L-1"><a href="#-esercizio-5">Exercise 5</a></li>
                    <li class="LTEXE L-1"><a href="#-esercizio-6">Exercise 6</a></li>
                    <li class="LTEXE L-1"><a href="#-esercizio-7">Exercise 7</a></li>
                    <li class="LTEXE L-1"><a href="#-esercizio-8">Exercise 8</a></li>
                    <li class="LTEXE L-1"><a href="#-esercizio-9">Exercise 9</a></li>
                    <li class="LTEXE L-1"><a href="#-esercizio-10">Exercise 10</a></li>
                </ol>
            </nav>
            </div>
           
        </div>
        <div class="BExercises">
        <div class="tracce">
            <span class="TT-10"><h2 class="Title4"><a href="#-tracce">Exercises</a></h2></span>


                <span class="cont-EXE">
                    <h3 class="LTEXE2" id="-esercizio-1"><a aria-hidden="true" tabindex="-1" href="#-esercizio-1">🍰 Esercizio 1</a></h3>
                        <details id="TastTitl2" class="mb-10"><summary class="pExe1">Dichiarazione di una variabile intera chiamata "numero" e assegnazione del valore 5.</summary>
                            <div class="CEXESVTEXT">
                                    <pre is:raw="" class="EXESVTEXT" style="overflow-x: auto;">
                                        <code>
                                            <span class="EXEROW"><span style="color: #FF7B72">&#x3C;?</span><span style="color: #79C0FF">php</span></span>
                                            <span class="EXEROW"><span style="color: #C9D1D9">$numero </span><span style="color: #FF7B72">=</span><span style="color: #C9D1D9"> </span><span style="color: #79C0FF">5</span><span style="color: #C9D1D9">;</span></span>
                                            <span class="EXEROW"><span style="color: #FF7B72">?></span></span>
                                        </code>
                                    </pre>
                            </div>
                        </details>
                </span >
           
                <span class="cont-EXE">
                    <h3 class="LTEXE2" id="-esercizio-2"><a aria-hidden="true" tabindex="-1" href="#-esercizio-2">🍰 Esercizio 2</a></h3>
                        <details id="TastTitl2" class="mb-10"><summary class="pExe1">Dichiarazione di una costante chiamata "PI_GRECO" e assegnazione del valore 3.14.</summary>
                                <div class="CEXESVTEXT">
                                    <pre is:raw="" class="EXESVTEXT" style=" overflow-x: auto;">
                                        <code>
                                            <span class="EXEROW"><span style="color: #FF7B72">&#x3C;?</span><span style="color: #79C0FF">php</span></span>
                                            <span class="EXEROW"><span style="color: #79C0FF">define</span><span style="color: #C9D1D9">(</span><span style="color: #A5D6FF">"PI_GRECO"</span><span style="color: #C9D1D9">, </span><span style="color: #79C0FF">3.14</span><span style="color: #C9D1D9">);</span></span>
                                            <span class="EXEROW"><span class="line"><span style="color: #FF7B72">?></span></span></span>
                                        </code>
                                    </pre>
                                </div>
                        </details>
                </span>

                <span class="cont-EXE">
                    <h3 class="LTEXE2" id="-esercizio-3"><a aria-hidden="true" tabindex="-1" href="#-esercizio-3">🍰 Esercizio 3</a></h3>
                        <details id="TastTitl2" class="mb-10"><summary class="pExe1">Dichiarazione di una variabile di tipo stringa chiamata "nome" e inizializzazione con il valore "Mario".</summary>
                            <div class="CEXESVTEXT">
                                <pre is:raw="" class="EXESVTEXT" style=" overflow-x: auto;">
                                        <code>
                                            <span class="EXEROW"><span style="color: #FF7B72">&#x3C;?</span><span style="color: #79C0FF">php</span></span>
                                            <span class="EXEROW"><span style="color: #C9D1D9">$nome </span><span style="color: #FF7B72">=</span><span style="color: #C9D1D9"> </span><span style="color: #A5D6FF">"Mario"</span><span style="color: #C9D1D9">;</span></span>
                                            <span class="EXEROW"><span class="line"><span style="color: #FF7B72">?></span></span></span>
                                        </code>
                                    </pre>
                            </div>
                        </details>
                </span>

                <span class="cont-EXE">
                    <h3 class="LTEXE2" id="-esercizio-4"><a aria-hidden="true" tabindex="-1" href="#-esercizio-4">🍰 Esercizio 4</a></h3>
                        <details id="TastTitl2" class="mb-10"><summary class="pExe1">Dichiarazione di una variabile booleana chiamata "is_valid" e assegnazione del valore true.</summary>
                            <div class="CEXESVTEXT">
                                    <pre is:raw="" class="EXESVTEXT" style=" overflow-x: auto;">
                                        <code>
                                            <span class="EXEROW"><span style="color: #FF7B72">&#x3C;?</span><span style="color: #79C0FF">php</span></span>
                                            <span class="EXEROW"><span style="color: #C9D1D9">$is_valid </span><span style="color: #FF7B72">=</span><span style="color: #C9D1D9"> </span><span style="color: #79C0FF">true</span><span style="color: #C9D1D9">;</span></span>
                                            <span class="EXEROW"><span class="line"><span style="color: #FF7B72">?></span></span></span>
                                        </code>
                                    </pre>
                            </div>
                        </details>
                </span>

                <span class="cont-EXE">
                    <h3 class="LTEXE2" id="-esercizio-5"><a aria-hidden="true" tabindex="-1" href="#-esercizio-5">🍰 Esercizio 5</a></h3>
                        <details id="TastTitl2" class="mb-10"><summary class="pExe1">Dichiarazione di una variabile float chiamata "prezzo" e inizializzazione con il valore 9.99.</summary>
                            <div class="CEXESVTEXT">
                                    <pre is:raw="" class="EXESVTEXT" style=" overflow-x: auto;">
                                        <code>
                                            <span class="EXEROW"><span style="color: #FF7B72">&#x3C;?</span><span style="color: #79C0FF">php</span></span>
                                            <span class="EXEROW"><span style="color: #C9D1D9">$prezzo </span><span style="color: #FF7B72">=</span><span style="color: #C9D1D9"> </span><span style="color: #79C0FF">9.99</span><span style="color: #C9D1D9">;</span></span>
                                            <span class="EXEROW"><span class="line"><span style="color: #FF7B72">?></span></span></span>
                                        </code>
                                    </pre>
                            </div>
                        </details>
                </span>

                <span class="cont-EXE">
                    <h3 class="LTEXE2" id="-esercizio-6"><a aria-hidden="true" tabindex="-1" href="#-esercizio-6">🍰 Esercizio 6</a></h3>
                        <details id="TastTitl2" class="mb-10"><summary class="pExe1">Dichiarazione di una costante chiamata "TASSA_PERCENTUALE" e assegnazione del valore 0.15.</summary>
                            <div class="CEXESVTEXT">
                                    <pre is:raw="" class="EXESVTEXT" style=" overflow-x: auto;">
                                        <code>
                                            <span class="EXEROW"><span style="color: #FF7B72">&#x3C;?</span><span style="color: #79C0FF">php</span></span>
                                            <span class="EXEROW"><span style="color: #79C0FF">define</span><span style="color: #C9D1D9">(</span><span style="color: #A5D6FF">"TASSA_PERCENTUALE"</span><span style="color: #C9D1D9">, </span><span style="color: #79C0FF">0.15</span><span style="color: #C9D1D9">);</span></span>
                                            <span class="EXEROW"><span class="line"><span style="color: #FF7B72">?></span></span></span>
                                        </code>
                                    </pre>
                            </div>
                            </span>
                        </details>
                </span>

                <span class="cont-EXE">
                    <h3 class="LTEXE2" id="-esercizio-7"><a aria-hidden="true" tabindex="-1" href="#-esercizio-7">🍰 Esercizio 7</a></h3>
                        <details id="TastTitl2" class="mb-10"><summary class="pExe1">Dichiarazione di una variabile di tipo array chiamata "numeri" e inizializzazione con una lista di numeri interi.</summary>
                            <div class="CEXESVTEXT">
                                    <pre is:raw="" class="EXESVTEXT" style=" overflow-x: auto;">
                                        <code>
                                            <span class="EXEROW"><span style="color: #FF7B72">&#x3C;?</span><span style="color: #79C0FF">php</span></span>
                                            <span class="EXEROW"><span style="color: #C9D1D9">$numeri </span><span style="color: #FF7B72">=</span><span style="color: #C9D1D9"> </span><span style="color: #79C0FF">array</span><span style="color: #C9D1D9">(</span><span style="color: #79C0FF">1</span><span style="color: #C9D1D9">, </span><span style="color: #79C0FF">2</span><span style="color: #C9D1D9">, </span><span style="color: #79C0FF">3</span><span style="color: #C9D1D9">, </span><span style="color: #79C0FF">4</span><span style="color: #C9D1D9">, </span><span style="color: #79C0FF">5</span><span style="color: #C9D1D9">);</span></span>
                                            <span class="EXEROW"><span class="line"><span style="color: #FF7B72">?></span></span></span>
                                        </code>
                                    </pre>
                            </div>
                        </details>
                </span>

                <span class="cont-EXE">
                    <h3 class="LTEXE2" id="-esercizio-8"><a aria-hidden="true" tabindex="-1" href="#-esercizio-8">🍰 Esercizio 8</a></h3>
                        <details id="TastTitl2" class="mb-10"><summary class="pExe1">Dichiarazione di una variabile stringa chiamata "messaggio" e assegnazione del valore "Benvenuto!".</summary>
                            <div class="CEXESVTEXT">
                                    <pre is:raw="" class="EXESVTEXT" style=" overflow-x: auto;">
                                        <code>
                                            <span class="EXEROW"><span style="color: #FF7B72">&#x3C;?</span><span style="color: #79C0FF">php</span></span>
                                            <span class="EXEROW"><span style="color: #C9D1D9">$messaggio </span><span style="color: #FF7B72">=</span><span style="color: #C9D1D9"> </span><span style="color: #A5D6FF">"Benvenuto!"</span><span style="color: #C9D1D9">;</span></span>
                                            <span class="EXEROW"><span class="line"><span style="color: #FF7B72">?></span></span></span>
                                        </code>
                                    </pre>
                            </div>
                    </details>
                </span>

                <span class="cont-EXE">
                    <h3 class="LTEXE2" id="-esercizio-9"><a aria-hidden="true" tabindex="-1" href="#-esercizio-9">🍰 Esercizio 9</a></h3>
                        <details id="TastTitl2" class="mb-10"><summary class="pExe1">Dichiarazione di una variabile booleana chiamata "is_logged_in" e inizializzazione con il valore false.</summary>
                            <div class="CEXESVTEXT">
                                    <pre is:raw="" class="EXESVTEXT" style=" overflow-x: auto;">
                                        <code>
                                            <span class="EXEROW"><span style="color: #FF7B72">&#x3C;?</span><span style="color: #79C0FF">php</span></span>
                                            <span class="EXEROW"><span style="color: #C9D1D9">$is_logged_in </span><span style="color: #FF7B72">=</span><span style="color: #C9D1D9"> </span><span style="color: #79C0FF">false</span><span style="color: #C9D1D9">;</span></span>
                                            <span class="EXEROW"><span class="line"><span style="color: #FF7B72">?></span></span></span>
                                        </code>
                                    </pre>
                            </div>
                        </details>
                </span>

                <span class="cont-EXE">
                    <h3 class="LTEXE2" id="-esercizio-10"><a aria-hidden="true" tabindex="-1" href="#-esercizio-10">🍰 Esercizio 10</a></h3>
                        <details id="TastTitl2" class="mb-10"><summary class="pExe1">Dichiarazione di una variabile intera chiamata "età" e assegnazione del valore proveniente da un input dell'utente.</summary>
                            <div class="CEXESVTEXT">
                                    <pre is:raw="" class="EXESVTEXT" style=" overflow-x: auto;">
                                        <code>
                                            <span class="EXEROW"><span style="color: #FF7B72">&#x3C;?</span><span style="color: #79C0FF">php</span></span>
                                            <span class="EXEROW"><span style="color: #C9D1D9">$età </span><span style="color: #FF7B72">=</span><span style="color: #C9D1D9"> $_POST[</span><span style="color: #A5D6FF">'età'</span><span style="color: #C9D1D9">];</span></span>
                                            <span class="EXEROW"><span class="line"><span style="color: #FF7B72">?></span></span></span>
                                        </code>
                                    </pre>
                            </div>
                        </details>
                </span>
            </div>
    </div>
    </div>

</section>
    </div>
            <!-- Footer -->
<footer>
    <div class=" Cfooter">
        <div class="footer">
            <code>
                <p class="notepxpexe">Hai trovato errori  su questa pagina? Vuoi sugerire idee o contribuire? Visita la pagina contatti</p>
            </code>
        </div>
    </div>

</footer>
</body>

</html>