<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(45deg, #6C3EDE, #46A2FA);
        }

        div{
            background-color: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }
        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        #submit {
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        #submit:hover
        {
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div>
        <form action="cadastro.php" method="POST">
        <h1>Login</h1>
        <input type="text" name="nome" id="nome" placeholder="Nome do produto">
        <br><br>
        <input type="number" name="codigo" id="codigo" placeholder="Senha">
        <br><br>
        <input type="submit" name="submit" id="submit">
        </form>

    </div>
</body>
</html>