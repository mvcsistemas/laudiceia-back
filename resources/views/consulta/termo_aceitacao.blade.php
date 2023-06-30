<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <img style="width:  14rem" src="{{url('/assets/images/logo.png')}}" alt="Laudicéia Podologia">
            <h3 class="text-center">Termo de Aceitação</h3>
        </div>

        <p class="text-justify" style="margin-top: 50px;">
            Pelo presente termo, eu Teste, CPF 123.123.123-12 deixo aqui consignado que aceito o tratamento na área de podologia proposto pelo profissional abaixo identificado, me comprometendo a seguir as recomendações e cuidados preconizados.
        </p>
        <p class="text-justify" style="margin-top: 50px;">Ass: _______________________________________________________________</p>
        <p class="text-justify">{{config("mvc.podologo")}} RG: 17.373-451 - {{date('d/m/Y')}} | Rio Claro, SP</p>
    </div>
</body>
</html>
