
window.onload = function() {
  button_Comment = document.querySelector(".btn_comment");
  forms_comment = document.querySelector(".forms_comment");
    
  button_Comment.addEventListener("click", () => {
    forms_comment.classList.remove("hiden");
    }); 
}
