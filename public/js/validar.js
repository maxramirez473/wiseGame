const  alias = document.getElementById("alias")
const name = document.getElementById("name")
const  email = document.getElementById("email")
const  password = document.getElementById("password")
const  avatar = document.getElementById("avatar")
const  form = document.getElementById("form")
const parrafo = document.getElementById("warnings")

    form.addEventListener("submit", e=>{
      e.preventDefault()
      let warnings = ""
      let entrar = false
      let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/
      parrafo.innerHTML = ""
      if(name.value.lenght  <8) {
        warnings += `El nombre no es válido <br> `
        entrar =  true
      }
      if(!regexEmail.test(email.value)){
      warnings += `El email no es válido <br> `
        entrar =  true
    }
    if(password.value.length <8) {
      warnings += `La contraseña no es válida <br> `
      entrar =  true
    }
    if(avatar.value.length <191) {
      warnings += `La imagen supera el tamaño <br> `
      entrar =  true
    }
    if(entrar) {
      parrafo.innerHTML = warnings
    } else {
      parrafo.innerHTML = "Enviado"
    }
  })
