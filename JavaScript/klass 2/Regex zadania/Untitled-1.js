const password = "MIlkwd35r";

if (/[A-Z]/.test(password)) {
    console.log("Hasło zawiera przynajmiej dużą literę");
}else{
    console.log("Hasło nie zawiera przynajmiej dużą literę");
}

const tekst = "nam pd e 2";

if (/[0-9]/.test(tekst)) {
    console.log("tekst zawiera cyfrę");
}else{
    console.log("tekst nie zawiera cyfrę");
}
const email = "hskefnu@gmail.com";

if (/^[^@]+@[^@]+.[^@]+$/.test(email)) {
    console.log("email zawiera @");
}else{
    console.log("email nie zawiera @");
}

const regex =  /^.{6,}$/;

if(regex.test(password)){
    console.log("password poprawny");
}else{
    console.log("Błąd passworda");
}