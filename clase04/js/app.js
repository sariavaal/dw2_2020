console.log("comienzo")

function aleatorio(minimo,maximo){
    return Math.round(Math.random() * (maximo - minimo) + minimo);
}

function compare_num(a , b){
    return a - b;
}

var origen=[]; 
var destino = [];

function ordenar(origen) {
    destino = origen.slice().sort(compare_num);

}

for (var i = 0 ;  i < 10 ; i++ ){
    origen[i] = aleatorio(1,10)
}

ordenar(origen);

console.log("array1,origen")
console.log(origen)
console.log("array2,destino")
console.log(destino)