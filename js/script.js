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

