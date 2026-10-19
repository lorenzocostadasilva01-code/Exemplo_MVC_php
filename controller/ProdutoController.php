<?php
require_once __DIR__ . '/../model/Produto.php';

class ProdutoController {

    public function exibirFormulario($mensagem = '', $tipoAlerta = '') {
        require_once __DIR__ . '/../view/form_produto.php';
    }

    public function salvar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = trim($_POST['nome_produto'] ?? '');
            $preco = $_POST['preco'] ?? 0;
            $quantidade = $_POST['quantidade'] ?? 0;
            $descricao = trim($_POST['descricao'] ?? '');

            if ($nome === '') {
                $mensagem = 'O nome do produto é obrigatório.';
                $tipoAlerta = 'danger';
                $this->exibirFormulario($mensagem, $tipoAlerta);
                return;
            }

            if (!is_numeric($preco) || (float) $preco < 0) {
                $mensagem = 'O preço não pode ser negativo.';
                $tipoAlerta = 'danger';
                $this->exibirFormulario($mensagem, $tipoAlerta);
                return;
            }

            if (!is_numeric($quantidade) || (int) $quantidade < 0) {
                $mensagem = 'A quantidade não pode ser negativa.';
                $tipoAlerta = 'danger';
                $this->exibirFormulario($mensagem, $tipoAlerta);
                return;
            }

            $produto = new Produto($nome, $preco, $quantidade, $descricao);
            $sucesso = $produto->salvar();

            if ($sucesso) {
                header('Location: index.php?acao=listar');
                exit();
            }

            $mensagem = 'Erro ao cadastrar o produto.';
            $tipoAlerta = 'danger';
            $this->exibirFormulario($mensagem, $tipoAlerta);
        }
    }

    public function listar() {
        $produtos = Produto::listarTodos();
        require_once __DIR__ . '/../view/lista_produtos.php';
    }
}