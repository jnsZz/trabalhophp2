<?php
include 'conexaoBD.php';
class registroBancoDeDados {
    public $nome;
    public $email;
    public $senha;
    public $sobrenome;
    
    public function incluir($nome,$email,$senha,$sobrenome) {
        $conexao = new ConexaoBD();
        $conecta = $conexao->conectar(); 
        // Inserir registro
        $sql = "INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `senha`, `sobrenome`) VALUES (NULL, '$nome', '$email', '$senha', '$sobrenome');";
        if ($conecta->query($sql) === TRUE) {
            echo "Novo registro criado com sucesso";
        } else {
            echo "Erro: " . $sql . "<br>" . $conecta->error."<br>";
        }
        $conexao->desconectar();
    }

}


