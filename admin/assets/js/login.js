var modal = document.getElementById("modal");
var btn = document.querySelector('input[name="envoyer"]');
var span = document.querySelector(".close");

btn.addEventListener("click", function () {
  modal.style.display = "block";
});

span.onclick = function () {
  modal.style.display = "none";
};

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
