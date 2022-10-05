const container = document.querySelector(".container"), 
showpw = document.querySelectorAll(".showPw"), 
password = document.querySelectorAll(".password"),
signup = document.querySelector(".signup-link"),
login = document.querySelector(".login-link");

showpw.forEach(see => {
    see.addEventListener("click",()=>{
        password.forEach(pass => {
           if(pass.type === 'password'){
               pass.type = "text";

               showpw.forEach(icon =>{
                   icon.classList.replace("uil-eye","uil-eye-slash");
               })
           } else{
               pass.type = "password";

               showpw.forEach(icon =>{
                icon.classList.replace("uil-eye-slash","uil-eye");
            })
           }
        })
    })
});


signup.addEventListener("click", ( )=>{
    container.classList.add("active");
});
login.addEventListener("click", ()=>{
    container.classList.remove("active");
});