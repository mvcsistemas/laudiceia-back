<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ficha Anamnese</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <div class="col-sm-12 col-md-12 col-lg-12 text-center">
        <img style="width:  200px;" src="https://www.laudiceiapodologia.com/assets/images/logo.png" alt="{{config("mvc.nome_clinica")}}">

        <h3 style="margin-top: 50px; margin-bottom: 50px">Ficha Anamnese</h3>
    </div>

    <p>Paciente: {{$paciente->nome_paciente}} - {{date('d/m/Y')}} Rio Claro, SP.</p>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Informações</th>
            <th scope="col">Resposta</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td scope="row">1</td>
            <td>Hepatite</td>
            <td>{{$ficha_anamnese->hepatite ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">2</td>
            <td>HIV/DST</td>
            <td>{{$ficha_anamnese->hiv ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">3</td>
            <td>Hipertensão Arterial</td>
            <td>{{$ficha_anamnese->hipertensao ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">4</td>
            <td>Psoríase</td>
            <td>{{$ficha_anamnese->psoriase ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">5</td>
            <td>Dermatite</td>
            <td> {{$ficha_anamnese->dermatite ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">6</td>
            <td>Hanseníase</td>
            <td>{{$ficha_anamnese->hanseniase ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">7</td>
            <td>Passa mais tempo</td>
            <td>{{$ficha_anamnese->tempo ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">8</td>
            <td>Diabetes</td>
            <td>{{$ficha_anamnese->diabetes ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">9</td>
            <td>Tireoide</td>
            <td>{{$ficha_anamnese->tireoide ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">10</td>
            <td>Calçado mais utilizado</td>
            <td> {{$ficha_anamnese->calcado ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">11</td>
            <td>N° do calçado</td>
            <td>{{$ficha_anamnese->num_calcado ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">12</td>
            <td>Meia mais utilizada</td>
            <td>{{$ficha_anamnese->meia ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">13</td>
            <td>Sensibilidade à dor</td>
            <td>{{$ficha_anamnese->sensibilidade ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">14</td>
            <td>Ácido úrico elevado</td>
            <td>{{$ficha_anamnese->acido_urico ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">15</td>
            <td>Problemas Circulatórios</td>
            <td>{{$ficha_anamnese->circulatorio ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">16</td>
            <td>Antecedentes Cancerígenos</td>
            <td> {{$ficha_anamnese->antecedentes ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">17</td>
            <td>Possui alguma alergia</td>
            <td>{{$ficha_anamnese->alergia ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">18</td>
            <td>Já fez cirurgia nos membros inferiores</td>
            <td>{{$ficha_anamnese->cirurgia_membro_inferior ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">19</td>
            <td>Pratica algum esporte</td>
            <td>{{$ficha_anamnese->esporte ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">20</td>
            <td>Faz uso de algum medicamento</td>
            <td>{{$ficha_anamnese->medicamento ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">21</td>
            <td>Perfusão (Pé Esquerdo)</td>
            <td>{{$ficha_anamnese->perfusao_pe ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">22</td>
            <td>Perfusão (Pé Direito)</td>
            <td>{{$ficha_anamnese->perfusao_pd ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">23</td>
            <td>Dígito Pressão (Pé Esquerdo)</td>
            <td>{{$ficha_anamnese->digito_pressao_pe ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">24</td>
            <td>Dígito (Pé Direito)</td>
            <td>{{$ficha_anamnese->digito_pressao_pd ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">25</td>
            <td>Teste com Monofilamento (Pé Esquerdo)</td>
            <td>{{$ficha_anamnese->monofilamento_pe ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">26</td>
            <td>Teste com Monofilamento (Pé Direito)</td>
            <td> {{$ficha_anamnese->monofilamento_pd ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">27</td>
            <td>Patologias Dermatológicas (Pé Esquerdo)</td>
            <td>{{$ficha_anamnese->pat_dermatologicas_pe ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">28</td>
            <td>Patologias Dermatológicas (Pé Direito)</td>
            <td>{{$ficha_anamnese->pat_dermatologicas_pd ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">29</td>
            <td>Patologias Ungueais Presentes (Pé Esquerdo)</td>
            <td>{{$ficha_anamnese->pat_ungueais_pe ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">30</td>
            <td>Patologias Ungueais Presentes (Pé Direito)</td>
            <td>{{$ficha_anamnese->pat_ungueais_pd ?? ''}}</td>
          </tr>
          <tr>
            <td scope="row">31</td>
            <td>Observações Extras</td>
            <td> {{$ficha_anamnese->observacoes ?? ''}}</td>
          </tr>
        </tbody>
      </table>
</body>

</html>
