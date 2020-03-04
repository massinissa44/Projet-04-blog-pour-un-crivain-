
window.onload = function() {
  
  button_Update = document.querySelector(".btn_update");
  
  forms_update = document.querySelector(".forms_update");
  
  button_Update.addEventListener("click", () => {
    forms_update.classList.remove("hide");
    }); 
}


