const reg_log = document.getElementById("reg_log")
const reg_mail = document.getElementById("reg_mail")
const reg_username = document.getElementById("reg_us")
const reg_hasło = document.getElementById("reg_has1")
const reg_hasło2 = document.getElementById("reg_has2")
const reg_regulamin = document.getElementById("reg_regu")
const reg_form = document.getElementById("reg_form")
let prawidwowosc = [0,0,0,0,0,0]

const log_form = document.getElementById("login")
const log_log = document.getElementById("log_log")
const log_has = document.getElementById("log_has")
const log_butt = document.getElementById("log_butt")

reg_log.addEventListener('input', function(){ 
  let log = reg_log.value 
  if(log.length < 5){
    reg_log.style.color = "red"
  }else{
    reg_log.style.color = "green"
    prawidwowosc[0]=1
  }
})

reg_mail.addEventListener('input', function(){ 
  let mai = reg_mail.value.includes('@')
  console.warn(mai);
  
  if(mai){
    reg_mail.style.color = "green"
    prawidwowosc[1]=1
  }else{
    reg_mail.style.color = "red"
  }
})

reg_username.addEventListener('input', function(){ 
  let us = reg_username.value.includes('')
  console.warn(us);
  
  if(us){
    reg_username.style.color = "green"
    prawidwowosc[2]=1
  }else{
    reg_username.style.color = "red"
  }
})


reg_hasło.addEventListener('input', function(){ 
  let has = reg_hasło.value 
  if(has.length < 12){
    reg_hasło.style.color = "red"
  }else{
    reg_hasło.style.color = "green"
    prawidwowosc[3]=1
  }
})

reg_hasło2.addEventListener('input', function(){ 
  if(reg_hasło.value == reg_hasło2.value){
    reg_hasło2.style.color = "green"
    prawidwowosc[4]=1
  }else{
    reg_hasło2.style.color = "red"
  }

})

reg_regulamin.addEventListener('input', function(){ 
  if(reg_regulamin.checked == true){
    prawidwowosc[5]=1
  }else{
    prawidwowosc[5]=1
  }

})

reg_form.addEventListener('submit', function(e){ 
  if(prawidwowosc == [1,1,1,1,1,1]){
    alert('wszystko OK')
  }else{
    e.preventDefault()
    alert('popraw')
    
  }
})



log_form.addEventListener('submit', function(e){ 
  if(reg_hasło.value == log_has.value && reg_log.value == log_log.value){
    
  }else{
    e.preventDefault()
    alert('nieprowidłowe dane')
  }
})

