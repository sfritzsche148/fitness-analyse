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
    // Hier werden die P Tags reingeschrieben
    let schrittetable = document.getElementById('schrittetable');

    // P Tag erstellt
    let p = document.createElement('p');

    // Anzahl der Schritte
    let schrittcount = document.getElementById('schrittcount').value;

    let date = document.getElementById('date').value;


    p.innerHTML = date + ' ' + schrittcount;

    schrittetable.appendChild(p);

}