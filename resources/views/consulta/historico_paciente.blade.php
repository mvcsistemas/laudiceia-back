<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Histórico do Paciente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="col-sm-12 col-md-12 col-lg-12 text-center">
        <img style="width:  200px;" src="https://www.laudiceiapodologia.com/assets/images/logo.png" alt="{{config("mvc.nome_clinica")}}">

        <h3 style="margin-top: 50px">Histórico do Paciente</h3>
        <p>Rio Claro, SP - {{date('d/m/Y')}}</p>
    </div>

    <p style="margin-top: 50px;"><strong>Paciente: </strong>{{$paciente->nome_paciente}}, <strong>CPF: </strong>{{$paciente->cpf}}
    </p>

    <table class="table">
        <tbody>
            @foreach ($consultas as $consulta)
            <tr>
                <td scope="row">Cód.</td>
                <td scope="row">{{$consulta->id_consulta}}</td>
            </tr>
            <tr>
                <td scope="row">Data</td>
                <td scope="row">{{$consulta->data_consulta}}</td>
            </tr>
            <tr>
                <td scope="row">Valor</td>
                <td scope="row">{{number_format($consulta->valor, 2, ',', '.')}}</td>
            </tr>
            <tr>
                <td scope="row">Podólogo</td>
                <td scope="row">{{$consulta->nome_podologo}}</td>
            </tr>
            <tr>
                <td scope="row">Procedimento</td>
                <td scope="row" style="word-wrap: break-word;">{{$consulta->procedimento}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
</body>

</html>
