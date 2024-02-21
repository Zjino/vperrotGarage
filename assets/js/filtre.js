// Fonction pour mettre à jour le libellé du curseur avec l'année
function updateLabelAnnee(value) {
  const label = document.getElementById("anneeRangeLabel");
  label.textContent = "" + value + "";
}

// Fonction pour mettre à jour le libellé du curseur avec le kilométrage maximum
function updateLabelKmMax(value) {
  const label = document.getElementById("kmMaxLabel");
  label.textContent = "" + value + "km";
}

// Fonction pour mettre à jour le libellé du curseur avec le prix
function updateLabelPrix(value) {
  const label = document.getElementById("prixRangeLabel");
  const prixEvolution = Math.floor(value / 10);
  label.textContent = "+" + prixEvolution + "€";
}

// Fonction pour filtrer les produits en fonction du prix, de l'année et du kilométrage
function filtrerProduits() {
  const maxPrix = document.getElementById("prixRange").value;
  const maxAnnee = document.getElementById("anneeRange").value;
  const maxKmMax = document.getElementById("kmMax").value;

  const produits = document.querySelectorAll(".card");

  produits.forEach((produit) => {
    const anneeProduit = parseInt(
      produit.querySelector(".annee").textContent.split(":")[1].trim()
    );
    const kmProduit = parseInt(
      produit
        .querySelector(".km")
        .textContent.split(":")[1]
        .trim()
        .split(" ")[0]
        .replace(",", "")
    );
    const prixProduit = parseInt(
      produit
        .querySelector(".prix")
        .textContent.split("€")[0]
        .trim()
        .replace(" ", "")
    );

    if (
      anneeProduit >= maxAnnee &&
      kmProduit <= maxKmMax &&
      prixProduit <= maxPrix
    ) {
      produit.style.display = "block";
    } else {
      produit.style.display = "none";
    }
  });
}

// Ajouter des écouteurs d'événements pour le changement de slider
document.getElementById("anneeRange").addEventListener("input", function () {
  updateLabelAnnee(this.value);
  filtrerProduits();
});

document.getElementById("kmMax").addEventListener("input", function () {
  updateLabelKmMax(this.value);
  filtrerProduits();
});

document.getElementById("prixRange").addEventListener("input", function () {
  updateLabelPrix(this.value);
  filtrerProduits();
});

// Appel initial pour mettre à jour les libellés des curseurs
updateLabelAnnee(document.getElementById("anneeRange").value);
updateLabelKmMax(document.getElementById("kmMax").value);
updateLabelPrix(document.getElementById("prixRange").value);
