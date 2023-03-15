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

// Schritte tabelle
function Schritte() {
    let schrittetable = document.getElementById('schrittetable');
    let p = document.createElement('p');
    let schrittcount = document.getElementById('schrittcount').value;

    let d = new Date().getDate();
    let month = new Date().getMonth();
    let year = new Date().getFullYear();

    p.innerHTML = d + '.'+ month + '.' + year + ' ' + schrittcount;

    schrittetable.appendChild(p);
}