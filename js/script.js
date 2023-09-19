let string = "ciao Alfio";
console.log("la lunghezza della stringa è: " + string.length);

console.log("the first letter is: " + (string[0]));

let string1 = "ciao"
let string2 = "alfio";
let sumString = string1 + " " + string2;
console.log("la lunghezza della stringa è: " + sumString);

let stringa1 = "Ciao";
let stringa2 = "ciao";
console.log("Le due stringhe sono diverse? " + (stringa1 !== stringa2));
console.log("Le due stringhe sono uguali? " + (stringa1 === stringa2));


let string3 = "123";
let numeric = parseInt(string3)
console.log(numeric);

let string4 = "ciao io sono a casa";
let understring4 = "casa";
console.log("find a word " + (string4.includes(understring4)));

let string5 = "Salve, egregi signori.";
let partestringa = string5.slice(7, 21)
console.log("sostituzione " + partestringa)

let string6 = "Salve baldi giovani.";
let UpString6 = string6.toUpperCase()
console.log(UpString6);

let string7 = "La mia casa è blu";
let stringaDaCercare = "blu";
let stringaDaSostituire = "Rossa";
let nuovaStringa = string7.replace(stringaDaCercare, stringaDaSostituire)
console.log(nuovaStringa);


let string8 = "1,4,3,2,5";
let strin = string8.split(",");
/* let strinnu =  parseInt(strin); */
 for (let i = 0; i < strin.length; i++) {
    let e = strin[i];
    console.log("array nummer is: " + e)
}
console.log(strin)

let string9 = "  me gustas tu  ";
let trim = string9.trim();
console.log(trim)

let name = "Marco";
console.log(`Hello Guns, my name is: ${name}`)

let nome = "Alfio";
console.log(`Hi guys, my name is: ${nome}`);

let numero1 = 5;
let numero2 =7;
console.log(`the sum of the varible is: ${numero1} + ${numero2} = ${numero1 + numero2} `);

let nome2 = "Federico";
let eta = 25;
let citta = "Milano";
console.log(
    `Nome: ${nome2}
    eta: ${eta}
    citta: ${citta} `
)


let frutta = ["Mela","Pera","Pesca"];
let listHTML = `<ul>`
for(let frutto of frutta){
    listHTML += `
    <li>${frutto}<li>
    `;
}
listHTML += `
</ul>`;
console.log(listHTML);

let nome3 = "Giovanni";
let msg = `
    Salve ${nome3},
    Benvenuto nel Sito, 
    qui trverai ciò di cui hai bisogno.
`;
console.log(msg);

const baseURL = "https://www.WebCodeSite.com/";
let parametro = "javascript";
let URLCompleto = `${baseURL}${parametro}`;
console.log(`l?url completo è ${URLCompleto}`);


let prezzo = 19.99;
console.log(`£${prezzo.toFixed(1)}`);


    
    /* let BT = document.querySelector('.BT-25')
    BT.addEventListener('click', msg())

    function msg(){
        let nome4 = prompt(`inserisci il tuo nome:`);
        let eta2 = prompt(`Inserisci la tua età:`);
        let messaggio = `Ciao ${nome4}! Hai ${eta2} anni. Benvenuto`;
        return messaggio;
    }; */

 /*     function d(){ output.innerHTML = `Ciao ${nome4}! Hai ${eta2} anni. Benvenuto`;}  let c = 0;    if(c != output.length){ c++; setTimeout(d(), 2200)}else{c++; setTimeout(d(),2000) } */    

/*  let BT = document.querySelector('.BT-25'); BT.addEventListener('click', () => {let nome4 = prompt(`inserisci il tuo nome:`); let eta2 = prompt(`Inserisci la tua età:`);let output = document.querySelector('#output1'); const texts = [ `Ciao ${nome4}! Hai ${eta2} anni. Benvenuto`];  let index = 0; let isDeleting = false; let delay = 0; function animateText() {const currentText = texts[index]; if (isDeleting) { output.textContent = currentText.slice(0, output.textContent.length - 1);  } else { output.textContent = currentText.slice(0, output.textContent.length + 1); // Aggiunge un carattere alla volta
}

if (!isDeleting && output.textContent === currentText) {
  isDeleting = true;
  delay = 50; 
} else if (isDeleting && output.textContent === '') {
  isDeleting = false;
  delay = 170; // Tempo di pausa dopo aver cancellato il testo
  index++;
  
  if (index === texts.length) {
    index = 0; // Torna al primo testo dell'array
  }
}

setTimeout(animateText, delay);
}


animateText();  }); */

/*                                             <script> let BT = document.querySelector('.BT-25'); BT.addEventListener('click', () => {let nome4 = prompt(`inserisci il tuo nome:`); let eta2 = prompt(`Inserisci la tua età:`); let output = document.querySelector('#output1');  output.innerHTML = `Ciao ${nome4}! Hai ${eta2} anni. Benvenuto`; });</script>
 */
 

