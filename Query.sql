Banco de Dados - SQL

a) Obter todos os beneficiários ativos

SELECT beneficiario.nome, beneficiario.situacao FROM beneficiario WHERE beneficiario.situacao = "A";

b) Obter todos os beneficiários ativos que possuam ao menos um veículo ativo

SELECT beneficiario.nome FROM beneficiario JOIN veiculo ON veiculo.idBeneficiario = beneficiario.id  WHERE beneficiario.situacao = "A" AND veiculo.situacao = "A";

c) Obter todos os beneficiários que tenha mais de 40 anos

SELECT beneficiario.nome, beneficiario.dataSELECT beneficiario.nome, beneficiario.dataNascimento FROM beneficiario WHERE YEAR(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(beneficiario.dataNascimento))) > 40;

d) Obter todos os beneficiários que possuam veículos com mais de dois produtos ativos

SELECT beneficiario.nome FROM beneficiario JOIN veiculo ON veiculo.idBeneficiario = beneficiario.id WHERE (SELECT COUNT(produtoVeiculo.idVeiculo) FROM produtoVeiculo JOIN produto ON produto.id = produtoVeiculo.idProduto WHERE produtoVeiculo.idVeiculo = veiculo.id AND produto.situacao = "A") > 2;

e) Cadastrar um beneficiário;

INSERT INTO beneficiario (nome, documento, dataNascimento, sexo, situacao, logradouro, numero, bairro, cidade, estado, email, telefone) VALUES ("Leticia", "12345678910", "2001-01-01", "F", "A", "Morango", "123", "Frutas", "Belo Horizonte", "MG", "leticia@gmail.com", "31123456789");

f) Cadastrar um veículo ativo para o beneficiário criado no passo anterior e vincular a ele o produto "ASSISTENCIA 24 HORAS"

INSERT INTO veiculo (idBeneficiario, placa, chassi, renavam, modelo, montadora, anoFabricacao, anoModelo, situacao) VALUES ((SELECT beneficiario.id FROM beneficiario WHERE beneficiario.email = "leticia@gmail.com"), "1234567", "12345678910121314", "12345678910", "Passat", "Volks", 2001, 2009, "A");
INSERT INTO produtoVeiculo (idProduto, idVeiculo) VALUES ((SELECT produto.id FROM produto WHERE produto.nome = "ASSISTENCIA 24 HORAS"), (SELECT veiculo.id FROM veiculo WHERE veiculo.montadora = "Volks"));

g) Inativar todos os veículos de ano de fabricação menor do que 2001

UPDATE veiculo SET veiculo.situacao = "I" WHERE veiculo.anoFabricacao < 2001

h) Exclua os registros da tabela produtoVeiculo cujo o veículo ou produto estejam inativos

DELETE produtoVeiculo FROM produtoVeiculo JOIN produto ON produtoVeiculo.idProduto = produto.id JOIN veiculo ON produtoVeiculo.idVeiculo = veiculo.id WHERE  produto.situacao = "I" OR veiculo.situacao = "I";
