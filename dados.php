<?php 

echo '<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<title>Contato</title>
</head>';

$nome = $_POST['nome']; 
$endereco = $_POST['endereco']; 
$email = $_POST['email']; 
$fone = $_POST['fone']; 

if(strlen($nome) < 1){
  echo '<div class="alert alert-danger" role="alert">
  O campo nome é obrigatório seu preenchimento!
  </div>
  <a href="javascript:history.go(-1)" class="btn btn-primary">Retornar</a>';
}else{
  if(strlen($endereco) < 1){
    echo '<div class="alert alert-danger" role="alert">
    O campo endereço é obrigatório seu preenchimento!
    </div>
    <a href="javascript:history.go(-1)" class="btn btn-primary">Retornar</a>';
  }else{
    if(strlen($email) < 1){
        echo '<div class="alert alert-danger" role="alert">
        O campo email está incompleto, pois necessita ser informado com o padrão correto. Ex: teste@teste.com.br!
        </div>
        <a href="javascript:history.go(-1)" class="btn btn-primary">Retornar</a>';
    }else{
      if(strlen($fone) < 11){
          echo '<div class="alert alert-danger" role="alert">
          O campo fone está incompleto, pois necessita no mínimo 11 caracteres (sem a máscara). EX: (99)99999-9999!
          </div>
          <a href="javascript:history.go(-1)" class="btn btn-primary">Retornar</a>';
      }else{
        echo '<div class="alert alert-success" role="alert">
        Contato enviado com sucesso!
        </div>
        <a href="index.html" class="btn btn-primary">Retornar</a>';
      }
    }
  }
}
?>