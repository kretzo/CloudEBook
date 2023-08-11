function Cadastro(){
    nome = document.getElementById('nomeCad').value;
    sobrenome = document.getElementById('sobrenomeCad').value;
    email = document.getElementById('emailCad').value;
    senha = document.getElementById('senhaCad').value;
    senhaVerif = document.getElementById('senhaCad2').value;

    if(senhaVerif != senha){
        alert('As senhas não coincidem!');
    }
    else{
        console.log(`Nome: ${nome}`);
        console.log(`Sobrenome: ${sobrenome}`);
        console.log(`Email: ${email}`);
        console.log(`Senha: ${senha}`);
    }
}