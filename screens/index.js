let login_btn = document.querySelector("input#login_btn");
let error = document.querySelector("div.error");

login_btn.addEventListener("click", () => {
  let user_box = document.getElementById("user");
  let password_box = document.getElementById("password");

  if (user_box.value === "" || password_box.value === "") {
    error.textContent = "Por favor, preencha todos os campos.";
    return;
  } else {
    alert("Login efetuado com sucesso!");
  }
});
