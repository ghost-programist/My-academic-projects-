let input = document.getElementById("input");
let button = document.getElementById("btn");

let tasks =[];
function addTask(){
    let value = input.value
    if(value == ""){
        return
    }
    else{
        tasks.push({name: value, dane: false});
        input.value = "";
    }

}