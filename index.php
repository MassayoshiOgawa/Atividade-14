<?php
    include 'db.php';
    function deletarTarefa() {
        
    }

    function mostrarTarefa() {

    }

    $task = '      
        <div class="task">
            <h3>Tirar o Lixo</h3>
            <p>Setor: Limpeza</p>
            <p>Prioridade: Média</p>
            <p>Usuário: Enzo</p>
            <div class="flex">
                <button class="taskButManager blue">Editar</button>
                <button class="taskButManager red">Excluir</button>
            </div>
            <select>
                <option value="">A Fazer</option>
                <option value="">Fazendo</option>
                <option value="">Pronto</option>
            </select>
            <br>
            <button type="submit" class="taskButManager blue">Alterar Status</button>
        </div>
        '
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tarefas</title>
</head>

<body>
    <header>
        <h1>Sistema de Gerenciamento de Tarefas</h1>
    </header>
    <div class="headerOptions">
        <a href="index.php">Gerenciamento de Tarefas</a>
        <a href="usuario.php">Cadastro de Usuario</a>
        <a href="tarefa.php">Cadastro de Tarefa</a>
    </div>
    <hr>
    <div class="center">

        <h1>Gerenciamento de Tarefas</h1>
        <div class="taskStatus">
            <div class="status1 statusBox">
                <h1>A Fazer</h1>
                <div class="center">
                    <div class="task">
                        <h3>Tirar o Lixo</h3>
                        <p>Setor: Limpeza</p>
                        <p>Prioridade: Média</p>
                        <p>Usuário: Enzo</p>
                        <div class="flex">
                            <button class="taskButManager blue">Editar</button>
                            <button class="taskButManager red">Excluir</button>
                        </div>
                        <select>
                            <option value="">A Fazer</option>
                            <option value="">Fazendo</option>
                            <option value="">Pronto</option>
                        </select>
                        <br>
                        <button type="submit" class="taskButManager blue">Alterar Status</button>
                    </div>
                </div>
            </div>
            <div class="status2 statusBox">
                <h1>Fazendo</h1>
                <div class="center">
                    
                </div>
            </div>
            <div class="status3 statusBox">
                <h1>Pronto</h1>
                <div class="center">
                    <?php echo $task ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>