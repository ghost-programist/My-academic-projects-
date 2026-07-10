
const body = document.querySelector("body")
const inputs = document.querySelectorAll("input")
const btns = document.querySelectorAll("button")
const taskList = document.getElementById("taskList")
const input = inputs[0]
const input2 = inputs[1]
const btn = btns[0]
const btn2 = btns[1]


let tasks = JSON.parse(localStorage.getItem('taski')) || []
btn.addEventListener("click", () => {
    if (input.value == "") {
        alert("niema informacji")
    }
    else {
        tasks.push({ name: input.value, done: false })
        input.value = ""
        render()
    }
})


function render() {
    taskList.innerHTML = ""
    tasks.forEach((task, index) => {
        let li = document.createElement("li")
        li.textContent = task.name
        li.addEventListener("click", function () {
            task.done = !task.done
            render()
        })
        const button = document.createElement("button")
        button.innerText = "X";
        button.addEventListener('click', function () {
            tasks.splice(index, 1)
            render()
        })
        li.appendChild(button)
        taskList.appendChild(li)
    })
}