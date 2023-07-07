<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Termo Aceitação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <img style="width:  180px;" src="http://erp.crmsolucoes.net/assets/images/login.png" alt="Laudicéia Rodrigues Podologia">

            <h3 style="margin-top: 50px">Termo de Aceitação</h3>
        </div>

        <p style="margin-top: 50px; text-align: justify; text-justify: inter-word;">
            Pelo presente termo, eu {{$paciente->nome_paciente}}, CPF {{$paciente->cpf}} deixo aqui consignado que aceito o tratamento na área de
            podologia proposto pelo profissional abaixo identificado, me comprometendo a seguir as recomendações e
            cuidados preconizados.
        </p>
        <p style="margin-top: 50px; text-align: justify; text-justify: inter-word;">Ass:__________________________________________________</p>
        <p>{{config("mvc.podologo")}} RG: 17.373-451</p>
        <p> Rio Claro, SP - {{date('d/m/Y')}} </p>
    </div>
</body>

</html>
