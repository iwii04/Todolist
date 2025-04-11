document.getElementById('signUpButton').onclick = function () {
    document.getElementById('signIn').style.display = 'none';
    document.getElementById('signup').style.display = 'block';
};

document.getElementById('signInButton').onclick = function () {
    document.getElementById('signup').style.display = 'none';
    document.getElementById('signIn').style.display = 'block';
};
