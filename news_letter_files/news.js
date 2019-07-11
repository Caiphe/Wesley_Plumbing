// alert("News Letter");
const nameField =  document.querySelector("#nameInput");
const lastNameField = document.querySelector("#lastNameInput");
const emailField = document.querySelector("#emailInput")
const newsletterForm = document.querySelector("#newsletterForm");
const errorName = document.querySelector("#nameError");
const surnameError = document.querySelector("#surnameError");
const emailError = document.querySelector("#emailError");
const btnSubmit = document.querySelector("#btn_submit");

// nameField.addEventListener("keyUp", function(){
//    if(this().value <= 1)
//    errorName.
// });

newsletterForm.addEventListener('submit', function(){
   console.log(nameField.value);
})