let passbtn = document.getElementById('passbutton');


passbtn.addEventListener('click', function() {

    let passinp = document.getElementById('passwordinput').value;
    let login = document.getElementById('login');

    if (passinp === 'sfritzsche') {
        alert('Login');
        login.style.display = 'none'
    }else {
        alert('Wrong Password')
    }
})