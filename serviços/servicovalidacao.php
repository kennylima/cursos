<?php 

function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        setarMensagemErro(mensagem: 'O nome não pode ser vazio, por favor, tente novamente.');
        return false;
    }
    else if(strlen($nome) < 3)
    {
        setarMensagemErro(mensagem: 'O nome não pode conter menos do que três caracteres.');
        return false;
    }
    else if(strlen($nome) > 40)
    {
        setarMensagemErro(mensagem: 'O nome é muito extenso');
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade))
    {
        setarMensagemErro(mensagem: 'Informe um número para a idade');
        return false;
    } 
    return true;
}

?>