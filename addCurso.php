<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar Curso - GereCurso</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>

    <body>
        <?php
        session_start();
        include_once './valida_login.php';
        ?>
        <?php
        include_once './topo.php';
        ?>
        <div class="titulo_opcoes">
            <font color="black">Cadastra Cursos
        </div>
                    <form action="cadastraCurso.php" method="POST">
                        <div>
                            ID do Professor Responsável: <input type="number" placeholder="Professor Responsável" name="id_professor">
                        </div><br>

                        <div>
                            Nome Curso: <input type="text" placeholder="Nome Curso" name="nome_curso">
                        </div><br>

			<div>
                            Valor da Mensalidade: <input type="number" placeholder="Mensalidade:" name="mensalidade">
                        </div><br>

                        <div>
                            Quantidade Inicial de alunos: <input type="number" placeholder="Quantidade de alunos:" name="qtd_alunos">
                        </div><br>

                        <input type="submit" value="Registrar Curso">
                        </div>
                    </form>
            <?php
            include_once './rodape.php';
            ?>
    </body>
</html>
