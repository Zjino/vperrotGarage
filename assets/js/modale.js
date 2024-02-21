// Détecte le clic sur le lien "Voir les détails" et ouvre le modal
document.querySelector(".details").addEventListener("click", function () {
  var myModal = new bootstrap.Modal(document.getElementById("exampleModal"));
  myModal.show();
});

// Code de validation du formulaire
document
  .querySelector("#exampleModal form")
  .addEventListener("submit", function (event) {
    // Récupère les champs du formulaire
    var nameField = document.getElementById("name");
    var emailField = document.getElementById("email");
    var productNameField = document.getElementById("productName");
    var dateVisiteField = document.getElementById("dateVisite");
    var commentField = document.getElementById("comment");

    // Validation du modèle
    var myModal = new bootstrap.Modal(document.getElementById("exampleModal"));

    // Définition de la variable errorMessage
    var errorMessage = document.getElementById("error-message");

    // Vérifie si les champs obligatoires sont vides
    if (
      nameField.value.trim() === "" ||
      emailField.value.trim() === "" ||
      productNameField.value.trim() === "" ||
      dateVisiteField.value.trim() === "" ||
      commentField.value.trim() === ""
    ) {
      // Empêche la soumission du formulaire
      event.preventDefault();
      errorMessage.innerText = "Veuillez remplir tous les champs.";
    } else {
      errorMessage.innerText = "";
    }
  });
