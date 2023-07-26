const home = document.getElementsByClassName("home");

for (let i = 0; i < home.length; i++) {
  home[i].addEventListener("click", function () {
    window.location.href = "index.php";
  });
}