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
let Acc = document.querySelector(".accedi")
let TabAcces = document.querySelector(".CTabAccedi")
let closeAcces = document.querySelector('.Iclose1');
  Acc.addEventListener("click", () => {
    MTL.classList.toggle("MTL");
  TabAcces.classList.remove("close");
})
/* Chiusura Tabella di Accesso */
 closeAcces.addEventListener("click", () =>{
  TabAcces.classList.add("close");
});

});

/* Pagina PHP */
window.addEventListener("load", () => {
  let x = document.querySelectorAll(".Cargomento1");
  let y = document.querySelectorAll(".Cargomento2");
  let a = document.querySelectorAll(".Cargomento3");
  let b = document.querySelectorAll(".Cargomento4");
  let Tast1 = document.querySelector("#TPB1");
  let Tast2 = document.querySelector("#TPB2");
  let Tast3 = document.querySelector("#TPB3");
  let Tast4 = document.querySelector("#TPB4");
  Tast1.addEventListener("click", open1);
  Tast2.addEventListener("click", open2);
  Tast3.addEventListener("click", open3);
  Tast4.addEventListener("click", open4);

  function open1() {
    /* Arg PHP Le basi */
    for (let i = 0; i < x.length; i++) {
      /* rimuovi classe */
      x[i].classList.toggle("Cargomento1");
      /* aggiungi classe */
      x[i].classList.toggle("Cargomento");
      console.log(x[i]);
    }
  }

  function open2() {
    /* Arg PHP Avanzato */
    for (let i = 0; i < y.length; i++) {
      /* rimuovi classe */
      y[i].classList.toggle("Cargomento2");
      /* aggiungi classe */
      y[i].classList.toggle("Cargomento");
      console.log(y[i]);
    }
  }
  function open3() {
    /* Arg PHP Le classi */
    for (let i = 0; i < a.length; i++) {
      /* rimuovi classe */
      a[i].classList.toggle("Cargomento3");
      /* aggiungi classe */
      a[i].classList.toggle("Cargomento");
      console.log(a[i]);
    }
  }
  function open4() {
    /* Arg PHP MySQL */
    for (let i = 0; i < b.length; i++) {
      /* rimuovi classe */
      b[i].classList.toggle("Cargomento4");
      /* aggiungi classe */
      b[i].classList.toggle("Cargomento");
      console.log(a[i]);
    }
  
}





});
