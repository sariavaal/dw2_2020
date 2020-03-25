console.log("*******************")
console.log("imprimiendo la tabla del 5")
var nro=5;
for (i=1;i<=10;i++)
{
    var multiplicacion=i*nro;
    console.log(nro+"x"+i+"="+multiplicacion)
}

do {
    valor1=prompt("ingresa un valor")
    valor2=prompt('ingresa un segundo valor menor')
    
    if(valor2 >= valor1) {
        console.log("imposible,ingresa un valor menor")
    } 

} while(valor2 >= valor1)


for(primer_numero = valor2 ; primer_numero <= valor1 ; primer_numero++){
    console.log("************************************")
    for (i=1;i<=10;i++)
    {
        var multiplicacion=i*primer_numero;
        console.log(primer_numero+"x"+i+"="+multiplicacion)
    }
}
console.log("*******FIN******")




