const nome = document.getElementById('name');
const email = document.getElementById('email');
const data = document.getElementById('date');
const documento = document.getElementById('document');
const sexo = document.getElementById('sexo');
const phone = document.getElementById('phone');
const situationActive = document.getElementById("active");
const situationInactive = document.getElementById("desable");
const logradouro = document.getElementById('place');
const numero = document.getElementById('number');
const bairro = document.getElementById('neighborhood');
const cidade = document.getElementById('city');
const estado = document.getElementById('states');


function listregister(e)
{
    // evita que o formulario atualize a pagina
    e.preventDefault(); 

    // verificar pela data de nascimento se o usuario é maior de idade
    const dataNascimento = new Date(data.value);
    const dataAtual = new Date();
    const idade = Math.floor((dataAtual - dataNascimento) / (365 * 24 * 60 * 60 * 1000));
    if (idade < 18)
    {
        alert('Você não tem idade para se cadastrar');
        return false;
    }

    // pega os dados do formulario
    const formObj = {
        nome: nome.value,
        email: email.value,
        data: data.value,
        documento: documento.value,
        sexo: sexo.value,
        phone: phone.value,
        situation: situationActive.checked? 'ativo' : 'inativo',
        logradouro: logradouro.value,
        numero: numero.value,
        bairro: bairro.value,
        cidade: cidade.value,
        estado: estado.value
    };

    $('#results').append(`
        <tr>
            <td class="text-white">${formObj.nome}</td>
            <td class="text-white">${formObj.data}</td>
            <td class="text-white">${formObj.documento}</td>
            <td class="text-white">${formObj.sexo}</td>
            <td class="text-white">${formObj.email}</td>
            <td class="text-white">${formObj.phone}</td>
            <td class="text-white">${formObj.situation}</td>
            <td class="text-white">${formObj.logradouro}</td>
            <td class="text-white">${formObj.numero}</td>
            <td class="text-white">${formObj.bairro}</td>
            <td class="text-white">${formObj.cidade}</td>
            <td class="text-white">${formObj.estado}</td>
            </tr>
        `)

    if ($("#table").hasClass("d-none")) {
        $("#table").removeClass("d-none");
        if (!$("#table").hasClass("d-block"))
            $("#table").addClass("d-block");
    }

    if(formObj)
    {
        $.post("Rotas.php",{formObj},
        function(data){
        $("#json_response").html(data);
        });
    }

}
// quando o formulario for enviado vai chamar a função
document.getElementById("myform").addEventListener("submit", listregister);
 