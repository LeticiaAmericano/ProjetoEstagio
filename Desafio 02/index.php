<!DOCTYPE html>
<html lang = "pt-br">
    <head>
        <meta charset = "UTF-8">
        <meta name = "author" content = "Letícia Americano Lucas">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro - Beneficiário</title>
        <link rel = "stylesheet" href = "./Public/CSS/index.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body class="bg-dark body">
        <div class = "container">
            <header>
                <h1 class = "title">CADASTRO BENEFICIÁRIO</h1>
            </header>
            <main>
                <hr class = "line" size = "5" width = "100%"> 
                <h4 class = "beneficiary">Beneficiário</h4>
                <form class="row g-2" id="myform">
                    <div class="col-8 camp">
                        <div>
                            <label for = "name" class = "name formfont">Nome</label>
                            <input type = "text"  id = "name" name = "nome" class = "form-control" placeholder="Nome do cliente" required>
                        </div>
                    </div>
                    <div class="col-4 camp">
                            <label for = "date" class = "date formfont">Data de Nascimento</label>
                            <input type = "date"  id = "date" name = "data" class = "form-control" required>
                    </div>
                    <div class = "col-9">
                        <label for = "document" class = "document formfont">Documento</label>
                        <input type = "text"  id = "document" name = "documento" class = "form-control" required>
                    </div>
                    <div class = "col-3 camp">
                        <label class = "formfont">Sexo</label>
                        <select id = "sexo" class="form-select">
                            <option selected disabled value = "">Selecione</option>
                            <option class = "masculine">Masculino</option>
                            <option class = "feminine">Feminino</option>
                            <option class = "noinform">Não desejo informar</option>
                        </select>
                    </div>
                    <div class = "col-6 camp">
                        <div>
                            <label for = "email" class = "email formfont">Email</label>
                            <input type = "email"  id = "email" name = "email" class = "form-control" required>
                        </div>
                    </div>
                    <div class="col-6 camp">
                        <div>
                            <label for="phone" class="phone formfont">Telefone</label>
                            <input type="text" id="phone" name="telefone" class="form-control" required>
                        </div>
                    </div>
                    <div class = "col-12 camp">
                        <label class = "formfont">Situação</label>
                            <div class="inline_custom">
                                <input id = "active" name = "formsituacion" type = "radio" class = "formfont active" checked required>
                                <label class = "formcheck">Ativado</label>
                            </div>
                            <div class="inline_custom">
                                <input id = "disabled" name = "formsituacion" type = "radio" class = "formfont disabled" required>
                                <label class = "formcheck">Desativado</label>
                            </div>
                    </div>
                    <div class = "col-8 camp">
                        <div>
                            <label for = "place" class = "place formfont">Logradouro</label>
                            <input type = "text"  id = "place" name= "logradouro" class = "form-control" required>
                        </div>
                    </div>
                    <div class = "col-4 camp">
                        <div>
                            <label for="number" class="number formfont">Número</label>
                            <input type="text" id="number" name="numero" class="form-control" required>
                        </div>
                    </div>
                    <div class = "col-4 camp">
                        <div>
                            <label for = "neighborhood" class = "neighborhood formfont">Bairro</label>                   
                            <input type = "text"  id = "neighborhood" name = "bairro" class = "form-control" required>
                        </div>  
                    </div>
                    <div class = "col-4 camp">   
                        <div>
                            <label for = "city" class = "city formfont">Cidade</label>                  
                            <input type = "text"  id = "city" name = "cidade" class = "form-control" required>   
                        </div>    
                    </div>
                    <div class = "col-4 camp">
                        <div>
                            <label for = "states" class = "states formfont">Estado</label>
                            <input type = "text" id = "states" name="estado" class = "form-control" required>
                        </div>
                    </div>
                    <hr class = "line" size = "5" width = "100%">  
                    <button class ="w-100 btn btn-success btn-lg registerbtn" type = "submit">Cadastrar</button>
                </form>
            </main>
        </div>
        <div class="table-responsive d-none" id="table">
            <table class="table">
                <thead>
                    <th class = "formfont">Nome</th>
                    <th class = "formfont">Data de Nascimento</th>
                    <th class = "formfont">Documento</th>
                    <th class = "formfont">Sexo</th>
                    <th class = "formfont">Email</th>
                    <th class = "formfont">Telefone</th>
                    <th class = "formfont">Situação</th>
                    <th class = "formfont">Logradouro</th>
                    <th class = "formfont">Número</th>
                    <th class = "formfont">Bairro</th>
                    <th class = "formfont">Cidade</th>
                    <th class = "formfont">Estado</th>
                </thead>
                <tbody id="results">
                </tbody>
            </table>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="./Public/JS/index.js"></script>
</html>