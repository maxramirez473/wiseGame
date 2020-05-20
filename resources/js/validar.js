function validar(){
  let alias, name, email, password, avatar, form;
  alias = document.getElementById("alias").value
  name = document.getElementById("name").value
  email = document.getElementById("email").value
  password = document.getElementById("password").value
  avatar = document.getElementById("avatar").value
  form = document.getElementById("form").value
  parrafo = document.getElementById("warnings").value

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
      if(!regexEmail.test(email.value))
      warnings += `El email no es válido <br> `
        entrar =  "true"
    }
    if(password.value.length <8) {
      warnings += `La contraseña no es válida <br> `
      entrar =  "true"
    }
    if(avatar.value.length <191) {
      warnings += `La imagen supera el tamaño <br> `
      entrar =  "true"
    }
    if(entrar) {
      parrafo.innerHTML = warnings
    } else {
      parrafo.innerHTML = "Enviado"
    }
  })
}
