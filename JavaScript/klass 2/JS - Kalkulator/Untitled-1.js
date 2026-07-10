const p = document.getElementById('p')
const pierwiastek = document.getElementById('pierwiastek')
const ce = document.getElementById('ce')
const c = document.getElementById('c')
const dzielenie = document.getElementById('dzielenie')
const siedem = document.getElementById('siedem')
const osiem = document.getElementById('osiem')
const dziewiec = document.getElementById('dziewiec')
const mnozenie = document.getElementById('mnozenie')
const cztery = document.getElementById('cztery')
const piec = document.getElementById('piec')
const szesc = document.getElementById('szesc')
const odejmowanie = document.getElementById('odejmowanie')
const jeden = document.getElementById('jeden')
const dwa = document.getElementById('dwa')
const trzy = document.getElementById('trzy')
const dodawanie = document.getElementById('dodawanie')
const zero = document.getElementById('zero')
const result = document.getElementById('result')
let operatory = ['+', '-', '/', '*']

function add(x) {

    switch (x) {
        case '+':
            if (operatory.includes(p.textContent[p.textContent.length - 1])) {
                break
            }
            else {
                p.textContent += x
                break
            }

        case '-':
            if(p.textContent[p.textContent.length - 1] == '/' || p.textContent[p.textContent.length - 1] == '*' ){
                p.textContent += x
                break
            }
            else if (operatory.includes(p.textContent[p.textContent.length - 1])) {
                break

            }
            

            else {
                p.textContent += x
                break
            }

        case '/':
            if (operatory.includes(p.textContent[p.textContent.length - 1])) {
                break
            }
            
            

            else {
                p.textContent += x
                break
            }
        case '*':
            if (operatory.includes(p.textContent[p.textContent.length - 1])) {
                break
            }
            else {
                p.textContent += x
                break
            }

        case '0':
            if (p.textContent[p.textContent.length - 1] == '/') {
                break
            }
            else {
                p.textContent += x
                break
            }

        default:
            p.textContent += x

    }



}

jeden.addEventListener("click", function () { add("1") })
dwa.addEventListener("click", function () { add("2") })
trzy.addEventListener("click", function () { add("3") })
cztery.addEventListener("click", function () { add("4") })
piec.addEventListener("click", function () { add("5") })
szesc.addEventListener("click", function () { add("6") })
siedem.addEventListener("click", function () { add("7") })
osiem.addEventListener("click", function () { add("8") })
dziewiec.addEventListener("click", function () { add("9") })
zero.addEventListener("click", function () { add("0") })
odejmowanie.addEventListener("click", function () { add("-") })
dodawanie.addEventListener("click", function () { add("+") })
dzielenie.addEventListener("click", function () { add("/") })
mnozenie.addEventListener("click", function () { add("*") })

c.addEventListener("click", function () {
    p.textContent = ""
})

ce.addEventListener("click", function () {
    p.textContent = p.textContent.slice(0, -1)
})

pierwiastek.addEventListener("click", function () {
    p.textContent = Math.sqrt(eval(p.textContent))
})

result.addEventListener("click", function () {
    p.textContent = eval(p.textContent)
})


