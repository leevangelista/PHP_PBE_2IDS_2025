<?php
    session_start();
    $totalNotas = 0;
    $cont = 0;

    class Aluno {
        private $nome;
        private $sobrenome;
        private $nota;
        private $dataNascimento;

        public function __construct($nome, $sobrenome, $nota, $dataNascimento) { // fazer validação da criação do objeto
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            $this->nota = $nota;
            $this->dataNascimento = $dataNascimento;
        }

        public function salvar(){
            // cria o array se ainda não existir
            if (!isset($_SESSION['alunos'])) {
                $_SESSION['alunos'] = [];
            }
    
            $_SESSION['alunos'][] = [
                'nome'  => $this->nome,
                'sobrenome' => $this->sobrenome,
                'nota' => $this->nota,
                'dataNascimento' => $this->dataNascimento
            ];
        }
    }
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $nota = $_POST['nota'];
        $dataNascimento = $_POST['dataNascimento'];

        $aluno = new Aluno($nome, $sobrenome, $nota, $dataNascimento);
        $aluno->salvar();
    }

    function calcularIdade($dataNascimento){
        $dataNasc = new DateTime($dataNascimento); // transformar para o padrao DateTime, para depois poder realizar a conta correta
        $hoje = new DateTime(); // pegar a data de hoje

        $idade = $hoje->diff($dataNasc); // realiza a conta da diferença entre as datas

        return $idade->y; // retornar a anos (idade) de diferença
    }


    if (isset($_GET['reset'])) {
        session_destroy();
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário Alunos</title>
</head>
<body>
    <h2>Cadastro de Alunos</h2>

    <form action="" method="POST">
        <label>Nome: </label>
        <input type="text" name="nome" value=""><br>
        <label>Sobrenome: </label>
        <input type="text" name="sobrenome" value=""><br>
        <label>Nota: </label>
        <input type="number" name="nota" value=""><br>
        <label>Data Nascimento: </label>
        <input type="date" name="dataNascimento" value=""><br>
        <button type="submit">Cadastrar</button>
        <button type="reset">Limpar</button>
    </form>
    <?php if(isset($_SESSION['alunos'])): ?>
        <table border="1">
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Nota</th>
                <th>Data Nascimento</th>
                <th>Idade</th>
            </tr>
        <?php foreach($_SESSION['alunos'] as $aluno): 
            $totalNotas += $aluno['nota'];
            $cont++;
            $media = $totalNotas/$cont;
        ?>
            <tr>
                <td><?= $aluno['nome'] ?></td>
                <td><?= $aluno['sobrenome'] ?></td>
                <td><?= $aluno['nota'] ?></td>
                <td><?= $aluno['dataNascimento'] ?></td>
                <td><?= calcularIdade($aluno['dataNascimento']) ?></td>
            </tr>
        <?php endforeach ?>
       </table>
       <strong>Media dos alunos: <?=$media ?></strong>
    <?php endif; ?>
</body>
</html>
