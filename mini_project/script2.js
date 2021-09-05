function toggleLogin() {
    let login = document.getElementById("login");



}

function showLoginDetails() {
    var div = document.getElementById("logindetails");
    var displaySetting = div.style.display;
    
    if (displaySetting == 'block') {
        
        div.style.display = 'none';
    }
    else {
        div.style.display = 'block';
    }
}

function memberLogIn() {
    var loggedIn = "true";
    var underConstruction = document.getElementById("construction");
    var loginButton = document.getElementById("login");

    loginButton.innerHTML = "Logout";

    underConstruction.style.display = 'block';
}

function checkLoggedIn() {
    loggedIn = "true";
    if (loggedIn == "true") {
        memberLogIn();
    }
    
}