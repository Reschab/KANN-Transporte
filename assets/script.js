document.addEventListener("DOMContentLoaded", function () {
  AOS.init({
    duration: 1000,
  });
});


document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");

  form.addEventListener("submit", function (event) {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let message = document.getElementById("message").value;

    if (name === "" || email === "" || message === "") {
      alert("Bitte füllen Sie alle Felder aus.");
      event.preventDefault(); // Stoppt das Absenden des Formulars
    }
  });
});
