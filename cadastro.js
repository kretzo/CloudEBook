var Usuarios = [];

function Cadastro(){
    nome = document.getElementById('nomeCad').value;
    sobrenome = document.getElementById('sobrenomeCad').value;
    email = document.getElementById('emailCad').value;
    senha = document.getElementById('senhaCad').value;
    senhaVerif = document.getElementById('senhaCad2').value;

    if(Usuarios.includes(email)){
        alert('Email já cadastrado!');
    }

    else{
        if(senhaVerif != senha){
            alert('As senhas não coincidem!');
        }
        else{

            Usuarios.push(nome, sobrenome, email, senha);

            console.log(`Nome: ${nome}`);
            console.log(`Sobrenome: ${sobrenome}`);
            console.log(`Email: ${email}`);
            console.log(`Senha: ${senha}`);

            window.location.href = 'login.html';
        }
    }
}