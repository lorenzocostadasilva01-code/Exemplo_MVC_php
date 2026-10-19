<?php
require_once 'model/Produto.php';

class ProdutoController {

    public function exibirFormulario() {
        $mensagem = '';
        $tipoAlerta = '';
        require_once 'view/form_produto.php';
    }

    public function salvar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome_produto'] ?? '';
            $preco = $_POST['preco'] ?? 0;
            $quantidade = $_POST['quantidade'] ?? 0;
            $descricao = $_POST['descricao'] ?? '';

            $produto = new Produto($nome, $preco, $quantidade, $descricao);
            $sucesso = $produto->salvar();

            if ($sucesso) {
                $mensagem = "Produto cadastrado com sucesso!";
                $tipoAlerta = "success";
            } else {
                $mensagem = "Erro ao cadastrar o produto.";
                $tipoAlerta = "danger";
            }

            // Exibe a view novamente com a mensagem
            require_once 'view/form_produto.php';
        }
    }
}