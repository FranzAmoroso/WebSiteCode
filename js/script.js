let minimo = 1;
let massimo = 10;
let numeroCasuale =
  Math.floor(Math.random() * (massimo - minimo + 1)) + minimo;
console.log("Il numero casuale è: " + numeroCasuale);