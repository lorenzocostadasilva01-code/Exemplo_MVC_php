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
        // AQUI VOCÊ CONECTA NO BANCO DE DADOS E FAZ O INSERT
        // Exemplo fictício com PDO:
        // $stmt = $pdo->prepare("INSERT INTO produtos (nome, preco, quantidade, descricao) VALUES (?, ?, ?, ?)");
        // return $stmt->execute([$this->nome, $this->preco, $this->quantidade, $this->descricao]);
        
        return true; // Simulação de sucesso
    }
}