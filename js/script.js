const bookNow = document.getElementsByClassName("button-booknow");

for (let i = 0; i < bookNow.length; i++) {
  bookNow[i].addEventListener("click", function () {
    window.location.href = "book.php";
  });
}

