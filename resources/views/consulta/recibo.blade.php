<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recibo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <div class="col-sm-12 col-md-12 col-lg-12 text-center">
        <img style="width:  200px;" src="https://api.laudiceiapodologia.com/assets/images/logo.png" alt="{{config("mvc.nome_clinica")}}">

        <h3 style="margin-top: 50px">Recibo</h3>
        <p>Rio Claro, SP - {{date('d/m/Y')}}</p>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-12" style="padding-left: 0px; margin-top: 50px">
        <p>Código da Consulta: <strong>{{$consulta->id_consulta}}</strong></p>
    </div>

    <p style="text-align: justify; text-justify: inter-word;">
        Recebemos de <strong>{{$consulta->nome_paciente}}</strong>,<strong>CPF: {{$consulta->cpf}},</strong> o valor de <strong>R${{number_format($consulta->valor, 2, ',', '.')}}, </strong>referente ao pagamento dos seguintes serviços:
    </p>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">Serviço</th>
            <th scope="col">Qtd.</th>
            <th scope="col">Valor Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">Consulta</td>
                <td scope="row">1</td>
                <td scope="row">{{number_format($consulta->valor, 2, ',', '.')}}</td>
            </tr>
        </tbody>
    </table>

    <p style="margin-top: 50px; text-align: justify; text-justify: inter-word;">Ass:__________________________________________________</p>
</body>

</html>
