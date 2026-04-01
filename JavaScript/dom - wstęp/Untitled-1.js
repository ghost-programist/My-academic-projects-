

let liczba = 0;

function dodaj(){
    liczba++
    let header = document.getElementById("h1")
    header.innerHTML = liczba
    if(liczba >= 10){
        header.style.color = "green";
    }

     else if(liczba > -10) {
        header.style.color = "black";
    }

}

function odejmi(){
    liczba--
    let header = document.getElementById("h1")
    document.getElementById("h1").innerHTML = liczba
    if(liczba <= -10){
        header.style.color = "red";
    } else if(liczba < 10) {
        header.style.color = "black";
    }


}

function k1(){
   r = Math.floor(Math.random() * 256);
   g = Math.floor(Math.random() * 256);
   b = Math.floor(Math.random() * 256);
   document.getElementById("k1").style.backgroundColor = `rgb(${r}, ${g}, ${b})`

}

function k2(){
   r = Math.floor(Math.random() * 256);
   g = Math.floor(Math.random() * 256);
   b = Math.floor(Math.random() * 256);
   document.getElementById("k2").style.backgroundColor = `rgb(${r}, ${g}, ${b})`

}

function k3(){
   r = Math.floor(Math.random() * 256);
   g = Math.floor(Math.random() * 256);
   b = Math.floor(Math.random() * 256);
   document.getElementById("k3").style.backgroundColor = `rgb(${r}, ${g}, ${b})`

}

function name(){
    let imie =prompt("wpisz imie")
    document.getElementById("name").innerHTML = 'Hello ' + imie
}

let kolor = 0

function data(){
    let head = document.getElementById("head")
    kolor++
    console.log(kolor)
    if(kolor % 2 == 0 ){
        head.style.background = "black";
        head.style.color = "white";
    }
    else{
        head.style.background = "white";
        head.style.color = "black";
    }
    
}