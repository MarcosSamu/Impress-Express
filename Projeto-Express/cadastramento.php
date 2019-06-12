<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="TopicosSpecial_arquivos/reset.css">
  <link rel="stylesheet" type="text/css" href="TopicosSpecial_arquivos/semantic.css">
  <link rel="stylesheet" type="text/css" href="TopicosSpecial_arquivos/estilo.css">
  <link rel="stylesheet" type="text/css" href="fontawesome-free-5.9.0-web/css/fontawesome.css">
  <link rel="stylesheet" type="text/css" href="fontawesome-free-5.9.0-web/css/all.css">
</head>
<body>

<div class="ui middle aligned center aligned grid" >
  <div class="column">
    <h2 class="ui teal image header">
      <img src="TopicosSpecial_arquivos/logo.png"  style="margin-right: -38px;display: inline;" class="image">
      <div class="content">
        <h1 style="color:white;display: inline !important;">Xpress</h1>
      </div>
    <form class="ui large form" method="POST" action="login-php/processaFrom.php">
      <div class="ui stacked segment">
        <div class="field">
        <div class="field">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="Seu nome" required>
        </div>
         <div class="field">
          <label for="telefone">Telefone:</label>     
          <input id="telefone" name="telefone"  type="tel" required>
        </div>
          <label  for="email">Email</label>
          <div class="ui left icon input">
            <i class="wheelchair icon"></i>
            <input type="text" id="email" name="email" placeholder="Seu email" required>
          </div>
        </div>
        <div class="field">
          <label for="senha">Senha</label>
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" id="senha" name="senha"  placeholder="Sua senha" required>   
          </div>
        </div>  
        <div class="ui fluid large teal submit button" data-tooltip="Clique para cadastrar" data-position="right" >Cadastrar</div></br>
         <div class="field">
        <div class="ui checkbox">
          <input type="checkbox" name="chec" id="chec" tabindex="0" class="hidden">
          <label>Eu concordo com os Termos e Condições</label>
        </div>
      </div>
      </div>

      <div class="ui error message"></div>

    </form>

    <div class="ui message">
      Já tem conta ? <a href="TopicosSpecial.php">Login</a>
    </div>
  </div>
</div>
</body>

  <script src="TopicosSpecial_arquivos/jquery.js"></script>
  <script src="TopicosSpecial_arquivos/semantic.js"></script>
  <script src="TopicosSpecial_arquivos/valida.js"></script>
  <script src="fontawesome-free-5.9.0-web/js/fontawesome.js"></script>
  <script src="fontawesome-free-5.9.0-web/js/all.js"></script>
</html>
