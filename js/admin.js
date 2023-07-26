const login = document.getElementById('btn-login');
const loginContainer = document.getElementById('login-container');
const tableContainer = document.getElementById('table-container');

login.addEventListener('click', function() {
    console.log("Clicked");
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if(username == "" || password == "") {
        alert("Please Enter Username or Password");
    } else {
        if(username == 'admin' && password == 'admin') {
            loginContainer.classList.add('d-none');
            tableContainer.classList.remove('d-none');
        } else {
            alert("Please Enter the Correct Username or Password");
        }
    }
})