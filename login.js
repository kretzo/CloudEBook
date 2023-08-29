function Login(){

    let email = document.getElementById('emailLogin').value;
    let senha = document.getElementById('senhaLogin').value;

    if(email == "" || senha == ""){
        alert('Preencha todos os campos!');
    }
    else{
        window.location.href = 'home.html';
    }
}