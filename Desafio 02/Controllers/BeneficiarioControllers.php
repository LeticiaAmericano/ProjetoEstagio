<?php

class BeneficiarioControllers
{
    static function savebeneficiario($request)
    {
        $beneficiario = new Beneficiario(
            $request->nome, 
            $request->dataNascimento, 
            $request->sexo, 
            $request->situacao, 
            $request->logradouro, 
            $request->numero, 
            $request->bairro, 
            $request->cidade, 
            $request->estado, 
            $request->email, 
            $request->telefone);

        $insertBeneficiario = Beneficiario::insertBeneficiario($beneficiario);

        $response['status'] = $insertBeneficiario ? 'SUCESS' : 'FAIL';
        $response['method'] = $_SERVER['REQUEST_METHOD'];
        
        return json_encode($response);
    }
}

?>