/* Pagina PHPEXE */
/* window.addEventListener("load", () => {
    let Close = document.querySelector(".close");

    let TastOpenExe1 = document.querySelector("#CTexExe1")
    let OpenExe1 = document.querySelector("#EXESV1")
    let TastOpenExe2 = document.querySelector("#CTexExe2")
    let OpenExe2= document.querySelector("#EXESV2")
    let TastOpenExe3 = document.querySelector("#CTexExe3")
    let OpenExe3 = document.querySelector("#EXESV3")
    let TastOpenExe4 = document.querySelector("#CTexExe4")
    let OpenExe4 = document.querySelector("#EXESV4")
    let TastOpenExe5 = document.querySelector("#CTexExe5")
    let OpenExe5 = document.querySelector("#EXESV5")
    let TastOpenExe6 = document.querySelector("#CTexExe6")
    let OpenExe6 = document.querySelector("#EXESV6")
    let TastOpenExe7 = document.querySelector("#CTexExe7")
    let OpenExe7 = document.querySelector("#EXESV7")
    let TastOpenExe8 = document.querySelector("#CTexExe8")
    let OpenExe8 = document.querySelector("#EXESV8")
    let TastOpenExe9 = document.querySelector("#CTexExe9")
    let OpenExe9 = document.querySelector("#EXESV9")
    let TastOpenExe10 = document.querySelector("#CTexExe10")
    let OpenExe10 = document.querySelector("#EXESV10")
   
    
    TastOpenExe1.addEventListener("click", openClose1);
    TastOpenExe2.addEventListener("click", openClose2);
    TastOpenExe3.addEventListener("click", openClose3);
    TastOpenExe4.addEventListener("click", openClose4);
    TastOpenExe5.addEventListener("click", openClose5);
    TastOpenExe6.addEventListener("click", openClose6);
    TastOpenExe7.addEventListener("click", openClose7);
    TastOpenExe8.addEventListener("click", openClose8);
    TastOpenExe9.addEventListener("click", openClose9);
    TastOpenExe10.addEventListener("click", openClose10);
    
       function openClose1() {
        OpenExe1.classList.toggle("EXESV");
        OpenExe1.classList.toggle("close");
        console.log("arrivo");
       }
       function openClose2() {
        OpenExe2.classList.toggle("EXESV");
        OpenExe2.classList.toggle("close");
        console.log("arrivo");
       }
       function openClose3() {
        OpenExe3.classList.toggle("EXESV");
        OpenExe3.classList.toggle("close");
        console.log("arrivo");
       }
       function openClose4() {
        OpenExe4.classList.toggle("EXESV");
        OpenExe4.classList.toggle("close");
        console.log("arrivo");
       }
       function openClose5() {
        OpenExe5.classList.toggle("EXESV");
        OpenExe5.classList.toggle("close");
        console.log("arrivo");
       }
       function openClose6() {
        OpenExe6.classList.toggle("EXESV");
        OpenExe6.classList.toggle("close");
        console.log("arrivo");
       }
       function openClose7() {
        OpenExe7.classList.toggle("EXESV");
        OpenExe7.classList.toggle("close");
        console.log("arrivo");
       }
       function openClose8() {
        OpenExe8.classList.toggle("EXESV");
        OpenExe8.classList.toggle("close");
        console.log("arrivo");
       }
       function openClose9() {
        OpenExe9.classList.toggle("EXESV");
        OpenExe9.classList.toggle("close");
        console.log("arrivo");
       }
       function openClose10() {
        OpenExe10.classList.toggle("EXESV");
        OpenExe10.classList.toggle("close");
        console.log("arrivo");
       } 
  
  })*/

  /* Menù */
  window.addEventListener("load", () => {
    /* Aggiungi effetto al titolo */
    let T1 = document.querySelector(".T1");
    T1.addEventListener("mouseover", () => {
      T1.classList.add("fa-bounce");
    });
    T1.addEventListener("mouseleave", () => {
      T1.classList.remove("fa-bounce");
    });
  
    /* aggiungi effetto menu orizzontale */
    let LM1 = document.querySelector(".LM1");
    LM1.addEventListener("mouseover", () => {
      LM1.classList.add("fa-fade");
    });
    LM1.addEventListener("mouseleave", () => {
      LM1.classList.remove("fa-fade");
    });
    let LM2 = document.querySelector(".LM2");
    LM2.addEventListener("mouseover", () => {
      LM2.classList.add("fa-fade");
    });
    LM2.addEventListener("mouseleave", () => {
      LM2.classList.remove("fa-fade");
    });
    let LM3 = document.querySelector(".LM3");
    LM3.addEventListener("mouseover", () => {
      LM3.classList.add("fa-fade");
    });
    LM3.addEventListener("mouseleave", () => {
      LM3.classList.remove("fa-fade");
    });
    let LM4 = document.querySelector(".LM4");
    LM4.addEventListener("mouseover", () => {
      LM4.classList.add("fa-fade");
    });
    LM4.addEventListener("mouseleave", () => {
      LM4.classList.remove("fa-fade");
    });
  
  
  
    /* aggiungi effetto all'icona e close*/
    /* let Ico1 = document.querySelector("#Ico1");
      Ico1.addEventListener("mouseover", (event) => {
        Ico1.style.cursor ="pointer" 
        Ico1.classList.add("fa-beat");
        Ico1
      });
      Ico1.addEventListener("mouseleave", () => {
        Ico1.classList.remove("fa-beat");
      }); */
  
    /* Close Menù Section Principale */
    /* let close = document.querySelector("#Ico1");
      let Section = document.querySelector(".SC");
      close.addEventListener("click", () => {
        Section.classList.remove("SC");
        Section.id = "SP";
      }); */
  
    /* Menù a tendina senza acesso effettuato */
    let CML = document.querySelector(".CML");
    let MTL = document.querySelector("#MeTL");
    CML.addEventListener("click", () => {
      MTL.classList.toggle("MTL");
    });
  
    /* aggiungi effetto menu tre linee */
    CML.addEventListener("mousedown", () => {
      CML.classList.add("fa-shake");
    });
    CML.addEventListener("mouseup", () => {
      CML.classList.remove("fa-shake");
    });
  
    /* Menu Account da tre linee */
   /*  let UserMT = document.querySelector("#IMGMAU");
    UserMT.addEventListener("click", () => {
      MT.classList.toggle("MT");
      console.log("menu")
    });
    UserMT.addEventListener("mouseover", () => {
      UserMT.classList.add("fa-spin");
      UserMT.classList.add("fa-spin-reverse");
    }); */
  
    /* Menù a tendina con acesso effettuato */
    let User = document.querySelector(".IMGMA");
    let MT = document.querySelector("#MeT");
    User.addEventListener("click", () => {
      MT.classList.toggle("MT");
      console.log("menu")
    });
    User.addEventListener("mouseover", () => {
      User.classList.add("fa-spin");
      User.classList.add("fa-spin-reverse");
    });
    User.addEventListener("mouseleave", () => {
      User.classList.remove("fa-spin-reverse");
    });
  /* Apertura Tabella Acesso */
  let TL1 = document.querySelector(".CLinkPag");
  let exe = document.querySelector(".CExercises");
  let footer = document.querySelector(".Cfooter");

  let Acc = document.querySelector(".accedi")
  let TabAcces = document.querySelector(".CTabAccedi")
  let closeAcces = document.querySelector('.Iclose1');
    Acc.addEventListener("click", () => {
      MTL.classList.toggle("MTL");
    TabAcces.classList.remove("close");
    TL1.classList.toggle("effetto");
    exe.classList.toggle("effetto");
    footer.classList.toggle("effetto");
  })
  /* Chiusura Tabella di Accesso */
   closeAcces.addEventListener("click", () =>{
    TabAcces.classList.add("close");
    TabAcces.classList.remove("close");
    TL1.classList.toggle("effetto");
    exe.classList.toggle("effetto");
    footer.classList.toggle("effetto");
  });
  
  });