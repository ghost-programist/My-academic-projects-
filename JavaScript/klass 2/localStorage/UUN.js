const input = document.querySelector("input");
const btn1 = document.getElementById("btn1");
const btn2 = document.getElementById("btn2");
const btn3 = document.getElementById("btn3");
let task = JSON.parse(localStorage.getItem('nickname')) || []
let dark = false


btn1.addEventListener("click", ()=>{
    task.push(input.value)
    let lista1 = JSON.stringify(task)
    localStorage.setItem('nickname', lista1)
    
})

btn2.addEventListener("click", ()=>{
    
    let remove = task.indexOf(input.value)
    if(remove !== -1){
        task.splice(remove, 1)
    localStorage.setItem('nickname', JSON.stringify(task))
    }else{
    alert("nie ma takiego nicknejmu")
    }
})


function main(){
    

    for(nums of task){
        let str = document.createElement("p")
        str.textContent = nums
        document.body.appendChild(str)
    }

}

function darkMode(){
    document.body.classList.toggle("darkMode")
    DarkModeCheck()
}

function DarkModeCheck() {
    dark = document.body.classList.contains("darkMode")
    localStorage.setItem("theme", dark)

}

window.onload = function() {
    let dark = localStorage.getItem("theme")
    if(dark == "true"){
        darkMode()
    }
    
}

main()