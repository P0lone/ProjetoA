function validaSenha(){
    const senha = document.querySelector('input[name=senha]')
    const confirmaSenha = document.querySelector('input[name=confirmaSenha]')
    if(confirmaSenha.value === senha.value){
        confirmaSenha.setCustomValidity('');
    }else{
        confirmaSenha.setCustomValidity('As senhas não conferem');
    }
}