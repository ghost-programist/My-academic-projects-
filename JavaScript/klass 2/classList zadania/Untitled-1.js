const button = document.getElementById("button")
const h1 = document.getElementById("h1")
const button1 = document.getElementById("button1")
const h11 = document.getElementById("h11")
const inp = document.getElementById("inp")
const sp = document.getElementById("sp")
const button3 = document.getElementById("button3")
const div = document.getElementById("divv")
const body = document.querySelector("body")
const button4 = document.getElementById("button4")
button.addEventListener("click", ()=>{
    h1.classList.add("h1")
})

button1.addEventListener("click", ()=>{
    h11.classList.toggle("h11")
})


inp.addEventListener('input', function(){ 
  let log = inp.value 
  if(log.length < 5){
    inp.style.color = "red"
    sp.classList.remove("sp")
  }else{
    inp.style.color = "green"
    sp.classList.add("sp")

  }
})


button4.addEventListener("click", ()=>{
    div.classList.toggle("body1")
})

button3.addEventListener("click", ()=>{
    body.classList.toggle("divv")
})


