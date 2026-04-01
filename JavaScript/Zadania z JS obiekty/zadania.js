function zadanie1(){
    let osoba = {
        imie: "Mikalai",
        nazwisko: "Yakimau"
    }
    console.log(osoba)
}

function zadanie2(){
    let osoba = {
        imie: "Mikalai",
        nazwisko: "Yakimau",
        przywitaj: function(){
            alert("Cześć, mam na imię "+ this.imie)
        }
    }
    console.log(osoba.przywitaj())
}

function zadanie3(){
    let samochod = {
        marka: "Audi",
        model: "D2m3",
        rok: 2021
        }
        samochod.opis = "To jest bardzo mocny samochód "  + samochod.rok + " roku"
        alert(samochod.opis)
    }

function zadanie4(){
    kalkulator = {
    dodaj: function(){
        return (Number(prompt("Napisz liczbę")) + Number(prompt("Napisz liczbę")))
    },
    odejmij: function(){
        return (Number(prompt("Napisz liczbę")) - Number(prompt("Napisz liczbę")))
    }
    }
    console.log(kalkulator.dodaj())
    console.log(kalkulator.odejmij())

}

function zadanie5(){
    let osoba = {
        imie: "Mikalai",
        nazwisko: "Yakimau",
        wiek: 17
    }
    osoba.ileLat = function(){
        return this.imie + " ma " + this.wiek
    }
    console.log( osoba.ileLat())
}

function zadanie6(){
    let produkt = {
        nazwa: "banan",
        cena: 7,
    }
    produkt.pokazCene = function(){
        return this.nazwa + " kosztuje " + this.cena + "zł"
    }
    console.log( produkt.pokazCene())
}

function zadanie7(){
    let kontoBankowe = {
        właściciel: "Wadim Gordo",
        saldo: 225
    }
    
    kontoBankowe.wplata = function(){
        wpłata = Number(prompt("Dodaj sumę"))
        this.saldo += wpłata
        return this.właściciel + " ma na koncie  " + this.saldo + " zł"
    }


   
    kontoBankowe.wyplata = function( wypłata = Number(prompt("Wypłać sumę"))){
        if(wypłata < this.saldo){

            this.saldo -= wypłata
        }
        else{
            alert("Nie ma tyle pieniądze na koncie")
        }
        return this.właściciel + " ma na koncie  " + this.saldo + "zł"
    }
    
    console.log(kontoBankowe.wplata())
    console.log(kontoBankowe.wyplata())

}

function zadanie8(){
    let ksiazka = {
        tytul: "1984",
        autor: "Outfind Auguwski",
        }
        ksiazka.opisKsiazki = "Ta książka była napisana " + ksiazka.autor
        alert(ksiazka.opisKsiazki)
    }

function zadanie9(){
    let telefon = {
        numer: prompt("napisz telefon")
    }
    telefon.zadzwon = function(numer){
        alert("Dzwonie do użytkownika " + this.numer)
    }
    console.log(telefon.zadzwon())
}

function zadanie10(){

let uczen = {
    oceny: [2, 4, 5, 6, 3,5,5,5,5,5]
}
    
uczen.sredniaOcen = function(){
    let sum = 0;

    for(let i = 0; i < this.oceny.length; i++){
        sum += this.oceny[i];
    }

    return sum / this.oceny.length;
}

console.log(uczen.sredniaOcen());
}

function zadanie11(){
    let pracownik1 = {
        imie: "Daria",
        nazwisko: "Nowalska",
        pensjaMsc: 1200,
        pensjaRoczna: function(){
            return this.pensjaMsc * 12;

        }
        
    }

    let pracownik2 = {
        imie: "Nikita",
        nazwisko: "Woskow",
        pensjaMsc: 2200,
        pensjaRoczna: function(){
            return this.pensjaMsc * 12;

        }
        
    }
console.log(pracownik1.pensjaRoczna())
console.log(pracownik2.pensjaRoczna())
}

function zadanie12(){
    let licznik = {
        liczba: 2
    }
    
    licznik.zwieksz = function(){
        zwieksz = Number(prompt("Dodaj liczbe"))
        this.liczba += zwieksz
        return "zwiększona o " + zwieksz
    }


   
    licznik.zmniejsz = function( zmniejsz = Number(prompt("zmniejsz liczbe"))){
        if(zmniejsz < this.liczba){

            this.liczba -= zmniejsz
        }
        else{
            alert("Nie ma takiej wielkie liczby")
        }
        return "zmniejsza się o " + zwieksz
    }
    
    console.log(licznik.zwieksz())
    console.log(licznik.zmniejsz())

}







   


