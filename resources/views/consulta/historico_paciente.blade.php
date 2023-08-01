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
        <thead>
          <tr>
            <th scope="col">Código da Consulta</th>
            <th scope="col">Data</th>
            <th scope="col">Valor</th>
            <th scope="col">Podólogo</th>
            <th scope="col">Procedimento</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td scope="row">1</td>
            <td scope="row">1</td>
            <td scope="row">Hepatite</td>
            <td scope="row">Hepatite</td>
            <td style="width: 60rem; text-align: justify; text-justify: inter-word;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto consectetur, numquam omnis, ea debitis enim quas est facere molestiae dicta laboriosam velit labore facilis ad veritatis neque ut exercitationem praesentium?</td>
          </tr>
        </tbody>
      </table>
</body>

</html>
