<?php
require_once __DIR__ . '/ProdutoController.php';

$controller = new ProdutoController();

// Ação padrão alterada para 'listar' se nenhuma for informada
$acao = $_GET['acao'] ?? 'listar';

if ($acao === 'salvar') {
    $controller->salvar();
} elseif ($acao === 'novo') {
    $controller->exibirFormulario();
} else {
    $controller->listar();
}