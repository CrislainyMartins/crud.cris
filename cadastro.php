<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>

</head>
<body>
    <div class="box">
        <form action="">
            <fieldset><!--cria um quadrado em forma de linha ao redor das informações-->
            <legend><b>Formulário de Clientes</b></legend><!--b significa negrito-->
            <br>

            <div class="inputBox">
                <input tipy="text" nome="nome" id="email" class="inputUser" required>
                <label for="email" class="labelInput">Email</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input tipy="text" nome="email" id="nome" class="inputUser" required>
                <label for="nome" class="labelInput">Nome completo</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="tel" nome="telefone" id="telefone" class="inputUser" required>
                <label for="telefone" class="labelInput">telefone</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="date" nome="data_de_nascimento" id="data_de_nascimento" class="inputUser" required>
                <label for="data_de_nascimento" class="labelInput"><b>data_de_nascimento</b></label>
            </div>
            <br><br><br>
            <div class="inputBox">
                <input type="text" nome="cidade" id="cidade" class="inputUser" required>
                <label for="cidade" class="labelInput">Cidade</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" nome="estado" id="estado" class="inputUser" required>
                <label for="estado" class="labelInput">Estado</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" nome="endereco" id="endereco" class="inputUser" required>
                <label for="endereco" class="labelInput">Endereço</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="password" nome="senha" id="senha" class="inputUser" required>
                <label for="senha" class="labelInput">Senha</label>
            </div>
            <br><br>

           

            </fieldset>
        </form>
    </div>
</body>
</html>