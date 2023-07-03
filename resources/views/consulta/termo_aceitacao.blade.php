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
        <div class="d-flex align-items-center">
            <div class="col-md-4">
                <img style="width:  180px;" src="http://localhost/assets/images/logo.png" alt="Laudicéia Podologia">
            </div>
            <div class="col-md-4 text-center">
                <h3>Termo de Aceitação</h3>

            </div>
            <div class="col-md-4"></div>
        </div>

        <p class="text-justify" style="margin-top: 50px;">
            Pelo presente termo, eu Teste, CPF 123.123.123-12 deixo aqui consignado que aceito o tratamento na área de
            podologia proposto pelo profissional abaixo identificado, me comprometendo a seguir as recomendações e
            cuidados preconizados.
        </p>
        <p class="text-justify" style="margin-top: 50px;">Ass:__________________________________________________</p>
        <p class="text-justify">{{config("mvc.podologo")}} RG: 17.373-451</p>
        <p> {{date('d/m/Y')}} | Rio Claro, SP </p>
    </div>
</body>

</html>
