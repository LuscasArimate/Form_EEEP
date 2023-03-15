<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EEEP Manoel Mano | Login</title>
    <!-- Estilização de Login -->
    <link rel="stylesheet" href="login.style.css">
</head>
<body>
    <div class="header">
        <div class="container-main-menu">
            <div class="container">
                <div class="row">
                    <div class="col-0">
                        <a href="https://www.ceara.gov.br/"><img src="logo-governo.svg" alt="Logo do Governo do Ceará"></a>
                        <a href="https://www.instagram.com/eeepmanoelmano/"><img src="logo-mm.svg" alt="Logo da EEEP Manoel Mano"></a>
                    </div>
                    <div class="col-0">
                        <h3>Faça seu Login</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="area-formulario">
            <div class="formulario">
                <form action=""method="POST">
                    <label for=""><span><img src="icon-email.png" alt="Usuario"></span> Usuário</label>
                    <input type="text" name="usuario" id="usuario" placeholder="Digite o nome de usuário" required>
                    <label for=""><span><img src="icon-password.png" alt="Senha"></span> Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="Digite a senha" required>
                    <div class="submit">
                        <input type="submit" value="Entrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
        <footer></footer>
</body>
</html>