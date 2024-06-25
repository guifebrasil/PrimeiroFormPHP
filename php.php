
<!DOCTYPE html>
<html lang="en">




<!-- Monte um formulário com as seguintes opções abaixo, estarei deixando o código de exemplo

- Nome
- Nome de Usuário
- E-mail
- CPF:
- Data de Nascimento:
- Sexo
- Endereço -->


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="php1.php" method="post">
        Nome: <input type="text" name="username" /><br />
        Email: <input type="email" name="email" /><br />
        NomeUsuario: <input type = "text" name= "usuário" /><br />
        CPF: <input type="number" name="CPF" /><br />
        DataDeNascimento: <input type="date" name="Data" /><br />
        Sexo: <input type="text" name="Sexo" /><br />
        Endereco: <input type="text" name=" Endereco" /><br />
        <input type="submit" value="Me aperte!"/>
    </form>
</body>

</html>
