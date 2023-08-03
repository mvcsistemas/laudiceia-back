<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Histórico do Paciente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <div class="col-sm-12 col-md-12 col-lg-12 text-center">
        <img style="width:  200px;" src="https://www.laudiceiapodologia.com/assets/images/logo.png" alt="{{config("mvc.nome_clinica")}}">

        <h3 style="margin-top: 50px">Histórico do Paciente</h3>
        <p>{{$tempo['data_inicio']}} - {{$tempo['data_fim']}} | Rio Claro, SP</p>
    </div>

    <p style="margin-top: 50px;"><strong>Paciente: </strong>{{$paciente->nome_paciente}}, <strong>CPF: </strong>{{$paciente->cpf}}
    </p>

    <div style="width: 100%; word-break: break-word;">
        <table class="table">
            <tbody>
                @foreach ($consultas as $consulta)
                    <tr>
                        <th scope="row" style="width: 20%">Código</th>
                        <td>{{$consulta->id_consulta}}</td>
                    </tr>
                    <tr>
                        <th scope="row" style="width: 20%">Data</th>
                        <td>{{date('d/m/Y', strtotime($consulta->data_consulta))}}</td>
                    </tr>
                    <tr>
                        <th scope="row" style="width: 20%">Valor</th>
                        <td>R$ {{number_format($consulta->valor, 2, ',', '.')}}</td>
                    </tr>
                    <tr>
                        <th scope="row" style="width: 20%">Podólogo</th>
                        <td>{{$consulta->nome_podologo}}</td>
                    </tr>
                    <tr>
                        <th scope="row" style="width: 20%">Procedimento</th>
                        <td>{{$consulta->procedimento}}</td>
                    </tr>
                    <br>
                @endforeach
            </tbody>
          </table>
    </div>
</body>

</html>
