let passbtn = document.getElementById('passbutton');


passbtn.addEventListener('click', function() {

    let passinp = document.getElementById('passwordinput').value;
    let login = document.getElementById('login');
    let content = document.getElementById('content');

    if (passinp === 'sfritzsche') {
        login.style.display = 'none';
        content.style.display = 'block';
    }else {
        alert('Wrong Password');
    }
})
