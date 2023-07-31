const home = document.getElementsByClassName("home");

for (let i = 0; i < home.length; i++) {
  home[i].addEventListener("click", function () {
    window.location.href = "index.php";
  });
}

document.getElementById("myForm").addEventListener("submit", function (event) {
  event.preventDefault();

  const formData = new FormData(event.target);

  const jsonData = {};
  formData.forEach((value, key) => {
    jsonData[key] = value;
  });

  const dobInput = jsonData.dob;
  const dob = new Date(dobInput);
  const today = new Date();
  const minAge = 18;

  if (calculateAge(dob, today) < minAge) {
    alert(`You must be at least ${minAge} years old to register.`);
  } else {
    sendDataToPHP(jsonData);
    alert("Booked Successfully");
  }

  document.getElementById("fname").value = "";
  document.getElementById("lname").value = "";
  document.getElementById("email").value = "";
  document.getElementById("phone").value = "";
  document.getElementById("dob").value = "";
  document.getElementById("address").value = "";
});

function calculateAge(dob, today) {
  const birthYear = dob.getFullYear();
  const birthMonth = dob.getMonth();
  const birthDay = dob.getDate();
  const todayYear = today.getFullYear();
  const todayMonth = today.getMonth();
  const todayDay = today.getDate();

  let age = todayYear - birthYear;

  if (
    todayMonth < birthMonth ||
    (todayMonth === birthMonth && todayDay < birthDay)
  ) {
    age--;
  }

  return age;
}

function sendDataToPHP(data) {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "book.php", true);
  xhr.setRequestHeader("Content-Type", "application/json");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        console.log(xhr.responseText);
      } else {
        console.error("Error:", xhr.status);
      }
    }
  };

  xhr.send(JSON.stringify(data));
}
