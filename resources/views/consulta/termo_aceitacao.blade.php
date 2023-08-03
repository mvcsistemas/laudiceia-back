<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Termo de Aceitação</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <div class="col-sm-12 col-md-12 col-lg-12 text-center">
        <img style="width:  200px;" src="https://www.laudiceiapodologia.com/assets/images/logo.png" alt="{{config("mvc.nome_clinica")}}">

        <h3 style="margin-top: 50px">Termo de Aceitação</h3>
        <p>Rio Claro, SP - {{date('d/m/Y')}}</p>
    </div>

    <p style="margin-top: 50px; text-align: justify; text-justify: inter-word;">
        Pelo presente termo, eu <strong>{{$paciente->nome_paciente}}</strong>, <strong>CPF: {{$paciente->cpf}},</strong> deixo aqui consignado que aceito o tratamento na área de
        podologia proposto pelo profissional abaixo identificado, me comprometendo a seguir as recomendações e
        cuidados preconizados.
    </p>
    <p style="margin-top: 50px; text-align: justify; text-justify: inter-word;">Ass:__________________________________________________</p>
</body>

</html>
