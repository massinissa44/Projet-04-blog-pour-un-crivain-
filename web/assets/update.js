window.onload = function() {
  
  button_Update = document.querySelector(".btn_update");
  button_Comment = document.querySelector(".btn_comment");
  forms_update = document.querySelector(".forms_update");
  forms_comment = document.querySelector(".forms_comment");
  
  button_Update.addEventListener("click", () => {
    forms_update.classList.remove("hide");
    });
    
  button_Comment.addEventListener("click", () => {
    forms_comment.classList.remove("hiden");
    }); 
}
