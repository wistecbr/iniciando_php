function excluir(value){
    console.log(value)
}

function editar(value){
    console.log(value)
}

function isNumber(value){
    let number = parseInt(value);
    console.log('> ', number);

    if(!number){
        console.log('Não existe')
    }
}

function reset(){
    let name = document.querySelector('#inputName');
    if(name){
        name.value = ''
        name.innerHTML = ''
    }
    let idade = document.querySelector('#inputIdade');
    if(idade){
        idade.value = ''
        idade.innerHTML = ''
    }
}
reset();

function resetLogin(){
    let name = document.querySelector('#inputLogin');
    if(name){
        name.value = ''
        name.innerHTML = ''
    }
    let idade = document.querySelector('#inputPassword');
    if(idade){
        idade.value = ''
        idade.innerHTML = ''
    }
}
resetLogin();