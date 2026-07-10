
let box = document.getElementById("box")
const body = document.querySelector("body")
const inputs = document.querySelectorAll("input")
const btns = document.querySelectorAll("button")
const input = inputs[0]
const input2 = inputs[1]
const btn = btns[0]
const btn2 = btns[1]
let list = document.getElementById("list")
let header = document.createElement("h1")
let zak_ol = document.getElementById("zakoncz_ol")
let zakonczone = document.getElementById("zakonczone")



box.appendChild(header)

btn.addEventListener("click", ()=>{
    let li = document.createElement("li")
    li.textContent = input.value
    list.appendChild(li)
    li.addEventListener("click", ()=>{
        li.remove()
    })
})

btn2.addEventListener("click", ()=>{
    let li = document.querySelectorAll("li")
    let ol_li = document.createElement("li")
    let id = input2.value-1
    ol_li.textContent = li[id].textContent
    zak_ol.appendChild(ol_li)
    li[id].remove()
    
})