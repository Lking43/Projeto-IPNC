<?php
 
     if(isset($_POST['submit']))
     { /*
        print_r('Nome:'            . $_POST['nome']);
        print_r('<br>');
        print_r('Email:'           . $_POST['email']);
        print_r('<br>');
        print_r('Telefone:'        . $_POST['telefone']);
        print_r('<br>');
        print_r('Estado_civil:'    . $_POST['estado_civil']);
        print_r('<br>');
        print_r('Data_nascimento:' . $_POST['data_nascimento']);
        print_r('<br>');
        print_r('Cidade:'          . $_POST['cidade']);
        print_r('<br>');
        print_r('Bairro:'          . $_POST['bairro']);
        print_r('<br>');
        print_r('Endereco:'        . $_POST['endereco']);
        print_r('<br>');  */

        include_once ('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $estado_civil = $_POST['estado_civil'];
        $data_nascimento = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, estado_civil, data_nascimento, cidade, bairro, endereco) 
                                    VALUES ('$nome', '$email', '$telefone', '$estado_civil', '$data_nascimento', '$cidade', '$bairro', '$endereco')");
     
     }


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Membros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<main class="container">
    <form class="form" action="formulario.php" method="POST">
        
        <h2 class="form__title">Cadastro de Membros</h2>
<br><br>
        <div class="form__group">
            <label for="nome">Nome Completo</label>
            <input type="text" id="nome" name="nome" required>
        </div>

        <div class="form__group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form__group">
            <label for="telefone">Telefone</label>
            <input type="tel" id="telefone" name="telefone" required>
        </div>

        <div class="form__group radio-group">
            <p>Estado Civil</p>
            <label><input type="radio" name="estado_civil" value="solteiro"> Solteiro(a)</label>
            <label><input type="radio" name="estado_civil" value="casado"> Casado(a)</label>
            <label><input type="radio" name="estado_civil" value="divorciado"> Divorciado(a)</label>
            <label><input type="radio" name="estado_civil" value="viuvo"> Viúvo(a)</label>
        </div>

        <div class="form__group">
            <label for="data_nascimento">Data de Nascimento</label>
            <input type="date" id="data_nascimento" name="data_nascimento" required>
        </div>

        <div class="form__group">
            <label for="cidade">Cidade</label>
            <input type="text" id="cidade" name="cidade" required>
        </div>

        <div class="form__group">
            <label for="bairro">Bairro</label>
            <input type="text" id="bairro" name="bairro" required>
        </div>

        <div class="form__group">
            <label for="endereco">Endereço</label>
            <input type="text" id="endereco" name="endereco" required>
        </div>

        <button type="submit"  name="submit" id="submit" class="botao__cad">Cadastrar</button>

    </form>
</main>

<div class="logos">
    <img src="IPB.png" alt="Logo 2">
    <img src="logo.png" alt="Logo 1">
</div>

</body>
</html>
