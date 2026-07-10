let url = prompt("wpisz url")
if(url !== ""){
    let con = confirm("chcesz przejdź do strony " + url + "?")
    if(con){
        location.href = url
    }else{
        alert('nie wyszło')
    }

}else{
    alert("Nie napisałeś URL")
}