<?php
require_once 'controller/ProdutoController.php';

$controller = new ProdutoController();

// Pega a ação da URL (ex: index.php?acao=cadastrar)
$acao = $_GET['acao'] ?? 'novo';

if ($acao === 'salvar') {
    $controller->salvar();
} else {
    $controller->exibirFormulario();
}