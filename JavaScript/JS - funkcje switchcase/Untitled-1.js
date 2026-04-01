function zadanie1(){
    let imie = prompt("zapisz imie")
    console.log(imie)
}

function zadanie2(){
    let a = Number(prompt("zapisz a"))
    let b = Number(prompt("zapisz b"))
    let znak = prompt("zapisz znak")
    switch(znak){
        case '+':
            console.log(a+b);
            break
        case '-':
            console.log(a-b);
            break
        case '/':
            console.log(a/b);
            break
        case '*':
            console.log(a*b);
            break
        case '**':
            console.log(a**b);
            break
        default:
        console.log("Nie można używać tego znaku ")
        
        
    }
}

function zadanie3(){
    let liczba = prompt("zapisz liczbę")
    console.log(liczba**2)
}

function zadanie4(){
    let liczba = prompt("zapisz liczbę")
    console.log(3.14*(liczba*liczba))
}

function zadanie5(){
    let liczba = prompt("zapisz liczbę")
    console.log(liczba**3)
}

function zadanie6(){
    let liczba = prompt("zapisz liczbę")
    console.log(Math.sqrt(liczba))
}

function zadanie7(){
    let ocena = Number(prompt("zapisz ocenę"))
    switch(ocena){
        case 1:
            console.log('niedostateczna');
            break
        case 2:
            console.log('dopuszczająca');
            break
        case 3:
            console.log('dobra');
            break
        case 4:
            console.log('bardzo dobra');
            break
        case 5:
            console.log('fajna');
            break
        case 6:
            console.log('naifajniejcha');
            break
        default:
        console.log("Niema takiej oceny")
        
        
    }
}

function zadanie8(){
    let ocena = Number(prompt("napisz numer miesięca"))
    switch(ocena){
        case 1:
            console.log('styczen');
            break
        case 2:
            console.log('luty');
            break
        case 3:
            console.log('marzec');
            break
        case 4:
            console.log('kwiecien');
            break
        case 5:
            console.log('maj');
            break
        case 6:
            console.log('czerwiec');
            break
        case 7:
            console.log('lipiec');
            break    
        case 8:
            console.log('sierpien');
            break
        case 9:
            console.log('wrzesien');
            break
        case 10:
            console.log('pazdziernik');
            break
        case 11:
            console.log('listopad');
            break
        case 12:
            console.log('grudzien');
            break
        default:
        console.log("Niema takiego miesiaca")
        
        
    }
}

function zadanie9(){
    let ocena = Number(prompt("napisz numer zadania"))
    switch(ocena){
        case 1:
            console.log(zadanie1());
            break
        case 2:
            console.log(zadanie2());
            break
        case 3:
            console.log(zadanie3());
            break
        case 4:
            console.log(zadanie4());
            break
        case 5:
            console.log(zadanie5());
            break
        case 6:
            console.log(zadanie6());
            break
        case 7:
            console.log(zadanie7());
            break    
        case 8:
            console.log(zadanie8());
            break
        case 9:
            console.log(zadanie9());
            break
        default:
        console.log("Niema takiego zadania")
        
        
    }
}


