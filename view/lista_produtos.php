<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page-shell">
        <div class="panel panel-wide">
            <div class="panel-header">
                <span class="eyebrow">Dashboard</span>
                <h1 class="panel-title">Lista de Produtos</h1>
                <p class="panel-subtitle">Produtos cadastrados em seu sistema.</p>
            </div>

            <div class="panel-body">
                <div class="topbar">
                    <div>
                        <h2>Estoque</h2>
                        <p>Visualize e gerencie seus produtos.</p>
                    </div>
                    <a href="index.php?acao=novo" class="btn btn-success">+ Cadastrar Novo Produto</a>
                </div>

                <div class="table-wrap">
                    <table class="table table-hover align-middle mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Preço</th>
                                <th>Quantidade</th>
                                <th>Descrição</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($produtos)): ?>
                                <?php foreach ($produtos as $produto): ?>
                                    <tr>
                                        <td><?= $produto['id']; ?></td>
                                        <td class="fw-semibold"><?= htmlspecialchars($produto['nome']); ?></td>
                                        <td>R$ <?= number_format($produto['preco'], 2, ',', '.'); ?></td>
                                        <td>
                                            <span class="badge bg-<?= $produto['quantidade'] > 10 ? 'secondary' : 'warning'; ?>">
                                                <?= $produto['quantidade']; ?> un
                                            </span>
                                        </td>
                                        <td class="text-muted small"><?= htmlspecialchars($produto['descricao']); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5" class="text-center py-4 text-muted">
                                        Nenhum produto cadastrado.
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                <?php include 'Rodapé.php'; ?>
            </div>
        </div>
    </div>
</body>
</html>