<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recibo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <img style="width:  180px;" src="http://erp.crmsolucoes.net/assets/images/login.png" alt="Laudicéia Rodrigues Podologia">

            <h3 style="margin-top: 50px">Recibo</h3>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top: 50px">
            <p>Número: <strong>123</strong></p>
        </div>

        <p style="margin-top: 50px; text-align: justify; text-justify: inter-word;">
            Recebemos de <strong>$consulta->nome_paciente</strong>, o valor de <strong>R$$consulta->valor.</strong>Referente ao pagamento dos seguintes serviços:
        </p>

        <table class="table table-responsive">
           <thead>
                <tr>
                <th scope="col">Serviço</th>
                <th scope="col">Qtd.</th>
                <th scope="col">Valor Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Consulta</td>
                    <td>1</td>
                    <td>$consulta->valor</td>
                </tr>
            </tbody>
        </table>

        <p style="margin-top: 50px; text-align: justify; text-justify: inter-word;">Ass:__________________________________________________</p>

        <p>Rio Claro, SP - {{date('d/m/Y')}}</p>
    </div>
</body>

</html>
