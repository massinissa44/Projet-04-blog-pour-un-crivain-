window.onload = function() {
  const bodyElement = this.document.querySelector("body");

  if(bodyElement.classList.contains("logged")){
    initAdmin();
  }
  initComment();
}
  function initAdmin(){
    button_Update = document.querySelector(".button-update");
    forms_update = document.querySelector(".forms-update");

    button_Update.addEventListener("click", () => {
    forms_update.classList.remove("hide-update");
    });
  }

  function initComment(){
    button_Comment = document.querySelector(".button-comment");
    forms_comment = document.querySelector(".form-comment");

    button_Comment.addEventListener("click", () => {
    forms_comment.classList.remove("hide-comment");
    });
  }