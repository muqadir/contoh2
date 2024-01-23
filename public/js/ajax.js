let name = document.querySelector('#name').value;
let save = document.querySelector('#save');
let getUrl = document.forms.createContact;
let urls = getUrl.getAttribute('action')

const getpoli = (url, var1) => {
    let xhttp = new XMLHttpRequest;
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');;
    let data = {
        _token: token
        , name: var1

    }
    xhttp.open('POST', url, true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.setRequestHeader('X-CSRF-TOKEN', token);
    xhttp.send(data);
}

save.addEventListener('click', getpoli(urls, name));