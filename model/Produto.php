<?php
class Produto {
    private $nome;
    private $preco;
    private $quantidade;
    private $descricao;

    public function __construct($nome = null, $preco = null, $quantidade = null, $descricao = null) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        $this->descricao = $descricao;
    }

    public function salvar() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $produtos = $_SESSION['produtos'] ?? self::listarTodos();

        $produtos[] = [
            'id' => count($produtos) + 1,
            'nome' => $this->nome,
            'preco' => (float) $this->preco,
            'quantidade' => (int) $this->quantidade,
            'descricao' => $this->descricao,
        ];

        $_SESSION['produtos'] = $produtos;

        return true;
    }

    // NOVO MÉTODO PARA LISTAR OS PRODUTOS
    public static function listarTodos() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (empty($_SESSION['produtos'])) {
            $_SESSION['produtos'] = [
                [
                    'id' => 1,
                    'nome' => 'Teclado Mecânico',
                    'preco' => 250.00,
                    'quantidade' => 15,
                    'descricao' => 'Teclado RGB switch azul'
                ],
                [
                    'id' => 2,
                    'nome' => 'Rato Gamer',
                    'preco' => 120.50,
                    'quantidade' => 30,
                    'descricao' => 'Rato óptico 10000 DPI'
                ],
                [
                    'id' => 3,
                    'nome' => 'Monitor 24"',
                    'preco' => 899.90,
                    'quantidade' => 8,
                    'descricao' => 'Monitor IPS Full HD 75Hz'
                ]
            ];
        }

        return $_SESSION['produtos'];
    }
}