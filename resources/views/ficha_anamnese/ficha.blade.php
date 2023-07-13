<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ficha Anamnese</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="col-sm-12 col-md-12 col-lg-12 text-center">
        <img style="width:  180px;" src="http://erp.crmsolucoes.net/assets/images/login.png" alt="{{config("mvc.nome_clinica")}}">

        <h3 style="margin-top: 50px">Ficha Anamnese</h3>
    </div>

    <p>Paciente: {{$paciente[0]->nome_paciente}} - {{date('d/m/Y')}} Rio Claro, SP.</p>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Doenças</th>
            <th scope="col">Resposta</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Hepatite</td>
            <td>{{$ficha[0]->hepatite}}</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>HIV/DST</td>
            <td>{{$ficha[0]->hiv}}</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Hipertensão Arterial</td>
            <td>{{$ficha[0]->hipertensao}}</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Psoríase</td>
            <td>{{$ficha[0]->psoriase}}</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Dermatite</td>
            <td> {{$ficha[0]->dermatite}}</td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Hanseníase</td>
            <td>{{$ficha[0]->hanseniase}}</td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>Passa mais tempo</td>
            <td>{{$ficha[0]->tempo}}</td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td>Calçado mais utilizado</td>
            <td> {{$ficha[0]->calcado}}</td>
          </tr>
          <tr>
            <th scope="row">9</th>
            <td>N°</td>
            <td>{{$ficha[0]->num_calcado}}</td>
          </tr>
          <tr>
            <th scope="row">10</th>
            <td>Meia mais utilizada</td>
            <td>{{$ficha[0]->meia}}</td>
          </tr>
          <tr>
            <th scope="row">11</th>
            <td>Sensibilidade à dor</td>
            <td>{{$ficha[0]->sensibilidade}}</td>
          </tr>
          <tr>
            <th scope="row">12</th>
            <td>Ácido úrico elevado</td>
            <td>{{$ficha[0]->acido_urico}}</td>
          </tr>
          <tr>
            <th scope="row">13</th>
            <td>Problemas Circulatórios</td>
            <td>{{$ficha[0]->circulatorio}}</td>
          </tr>
          <tr>
            <th scope="row">14</th>
            <td>Antecedentes Cancerígenos</td>
            <td> {{$ficha[0]->antecedentes}}</td>
          </tr>
          <tr>
            <th scope="row">15</th>
            <td>Possui alguma alergia</td>
            <td>{{$ficha[0]->alergia}}</td>
          </tr>
          <tr>
            <th scope="row">16</th>
            <td>Já fez cirurgia nos membros inferiores</td>
            <td>{{$ficha[0]->cirurgia_membro_inferior}}</td>
          </tr>
          <tr>
            <th scope="row">17</th>
            <td>Pratica algum esporte</td>
            <td>{{$ficha[0]->esporte}}</td>
          </tr>
          <tr>
            <th scope="row">18</th>
            <td>Faz uso de algum medicamento</td>
            <td>{{$ficha[0]->medicamento}}</td>
          </tr>
          <tr>
            <th scope="row">19</th>
            <td>Perfusão (Pé Esquerdo)</td>
            <td>{{$ficha[0]->perfusao_pe}}</td>
          </tr>
          <tr>
            <th scope="row">20</th>
            <td>Perfusão (Pé Direito)</td>
            <td>{{$ficha[0]->perfusao_pd}}</td>
          </tr>
          <tr>
            <th scope="row">21</th>
            <td>Dígito Pressão (Pé Esquerdo)</td>
            <td>{{$ficha[0]->digito_pressao_pe}}</td>
          </tr>
          <tr>
            <th scope="row">22</th>
            <td>Dígito (Pé Direito)</td>
            <td>{{$ficha[0]->digito_pressao_pd}}</td>
          </tr>
          <tr>
            <th scope="row">23</th>
            <td>Teste com Monofilamento (Pé Esquerdo)</td>
            <td>{{$ficha[0]->monofilamento_pe}}</td>
          </tr>
          <tr>
            <th scope="row">24</th>
            <td>Teste com Monofilamento (Pé Direito)</td>
            <td> {{$ficha[0]->monofilamento_pd}}</td>
          </tr>
          <tr>
            <th scope="row">25</th>
            <td>Patologias Dermatológicas (Pé Esquerdo)</td>
            <td>{{$ficha[0]->pat_dermatologicas_pe}}</td>
          </tr>
          <tr>
            <th scope="row">26</th>
            <td>Patologias Dermatológicas (Pé Direito)</td>
            <td>{{$ficha[0]->pat_dermatologicas_pd}}</td>
          </tr>
          <tr>
            <th scope="row">27</th>
            <td>Patologias Ungueais Presentes (Pé Esquerdo)</td>
            <td>{{$ficha[0]->pat_ungueais_pe}}</td>
          </tr>
          <tr>
            <th scope="row">28</th>
            <td>Patologias Ungueais Presentes (Pé Direito)</td>
            <td>{{$ficha[0]->pat_ungueais_pd}}</td>
          </tr>
          <tr>
            <th scope="row">29</th>
            <td>Observações Extras</td>
            <td> {{$ficha[0]->observacoes}}</td>
          </tr>
        </tbody>
      </table>
</body>

</html>
