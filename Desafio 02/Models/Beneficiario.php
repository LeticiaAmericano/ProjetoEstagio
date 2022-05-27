<?php


class Beneficiario
{
    protected string $nome;
    protected string $documento;
    protected string $dataNascimento;
    protected Sexo $sexo;
    protected Situacao $situacao;
    protected string $logradouro;
    protected string $numero;
    protected string $bairro;
    protected string $cidade;
    protected string $estado;
    protected string $email;
    protected string $telefone;

    // Construtor
    function __construct($nome, $dataNascimento, $sexo, $situacao, $logradouro, $numero, $bairro, $cidade, $estado, $email, $telefone)
    {
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
        $this->sexo = $sexo;
        $this->situacao = $situacao;
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    // Gets
    function getNome()
    {
        return  $this->nome;
    }

    function getDataNascimento()
    {
        return  $this->dataNascimento;
    }

    function getSexo()
    {
        return  $this->sexo;
    }

    function getSituacao()
    {
        return  $this->situacao;
    }

    function getLogradouro()
    {
        return  $this->logradouro;
    }

    function getNumero()
    {
        return  $this->Numero;
    }

    function getBairro()
    {
        return  $this->bairro;
    }

    function getCidade()
    {
        return  $this->Cidade;
    }

    function getEstado()
    {
        return  $this->estado;
    }

    function getEmail()
    {
        return  $this->email;
    }

    function getTelefone()
    {
        return  $this->telefone;
    }

    static function insertBeneficiario($beneficiario)
    {
        if(DAO::connectDatabase())
        {
            $sql = "INSERT INTO beneficiario (nome, documento, dataNascimento, sexo, situacao, logradouro, numero, bairro, cidade, estado, email, telefone) 
                VALUES (\"".$beneficiario->getNome(). 
                "\",\"".$beneficiario->getDocumento(). 
                "\",\"".$beneficiario->getDataNascimento(). 
                "\",\"".$beneficiario->getSexo(). 
                "\",\"".$beneficiario->getSituacao(). 
                "\",\"".$beneficiario->getLogradouro(). 
                "\",\"".$beneficiario->getNumero(). 
                "\",\"".$beneficiario->getBairro(). 
                "\",\"".$beneficiario->getCidade(). 
                "\",\"".$beneficiario->getEstado(). 
                "\",\"".$beneficiario->getEmail(). 
                "\",\"".$beneficiario->getTelefone(). "\")";
            
            $result = DAO::$mysqli->query($sql);
            if($result->num_rows > 0)
            {
                return True;
            }
        }
        return False;
    }
}

?>
