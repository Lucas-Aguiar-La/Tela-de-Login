<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="../assets/css/style.css">
  <title>ATA || Login efetuado!</title>
</head>

<body>
  <div id="screen">
    <header>
      <h1>Seja-bem vindo!</h1>
      <h2>É um prazer te receber por aqui</h2>
    </header>
    <main>
      <?php 
      $name = $_REQUEST["user"];
      $password = $_REQUEST["password"];

      echo "<p><span>Usuário/E-mail:</span><strong> ${name}</strong> </br>
      </br><span>Senha:</span> <strong>${password}</strong></p>";
      ?>
    </main>
    <a href="../screens/index.html" onclick="logout()" class="logout_btn">Sair</a>
  </div>

  <script src="./login.js"></script>
</body>

</html>