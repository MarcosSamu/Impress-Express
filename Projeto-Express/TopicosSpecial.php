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
      <img src="TopicosSpecial_arquivos/logo.png" style="margin-right: -6px;width: 90px" class="image">
      <h1 style="color:white;display: inline;margin-left: -24px;font-size: 30px;">Xpress</h1>
    </h2>
    <form class="ui large form" method="POST" action="login-php/processaFrom.php">
      <div class="ui stacked segment ">
        <div class="field">
          <label for="email">Seu email</label>
          <div class="ui left icon input">
            <i class="wheelchair icon"></i>
            <input type="text" id="email" name="email" placeholder="Sua senha" >
          </div>
        </div>
        <div class="field">
          <label>Sua senha</label>
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" id="senha" name="senha" placeholder="Seu Email" >
          </div>
        </div>
        <div class="ui large buttons">
          <button class="ui button active ui  large teal submit button">Avançar</button>
          <div class="or" ></div>
          <button class="ui button"><a href="cadastramento.php" style="color:#009c95;">Cadastrar</a></button>
        </div>
      </div>

      <div class="ui error message"></div>

    </form>

  </div>
</div>
</body>

  <script src="TopicosSpecial_arquivos/jquery.js"></script>
  <script src="TopicosSpecial_arquivos/semantic.js"></script>
  <script src="TopicosSpecial_arquivos/valida.js"></script>
  <script src="fontawesome-free-5.9.0-web/js/fontawesome.js"></script>
  <script src="fontawesome-free-5.9.0-web/js/all.js"></script>
</html>