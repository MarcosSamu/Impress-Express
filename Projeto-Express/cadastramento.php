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

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <img src="TopicosSpecial_arquivos/logo.png" style="margin-right: -38px;" class="image">
      <div class="content">
        Xpress
      </div>
    </h2>
    <form class="ui large form" post="">
      <div class="ui stacked segment">
        <div class="field">
          <label>Email</label>
          <div class="ui left icon input">
            <i class="wheelchair icon"></i>
            <input type="text" name="email" placeholder="E-mail address">
          </div>
        </div>
        <div class="field">
          <label>Senha</label>
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" id="sen1" placeholder="Sua senha">            
          </div>
        </div>
        <div class="field">
          <label>Repita a senha</label>
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" id="sen1" placeholder="Sua senha">            
          </div>
        </div>
         <div class="field">
            <label>Usuário</label>
            <input type="text" name="usuario" placeholder="Usuário" required="">
        </div>
        <div class="ui fluid large teal submit button" onclick="validation()">Cadastrar</div>
      </div>

      <div class="ui error message"></div>

    </form>

    <div class="ui message">
      Já tem conta ? <a href="TopicosSpecial.html">Login</a>
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