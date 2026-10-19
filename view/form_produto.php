<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page-shell">
        <div class="panel">
            <div class="panel-header">
                <span class="eyebrow">Loja</span>
                <h1 class="panel-title">Cadastro de Produtos</h1>
                <p class="panel-subtitle">Gerencie seus itens com rapidez.</p>
            </div>

            <div class="panel-body">
                <?php if (!empty($mensagem)): ?>
                    <div class="alert alert-<?= $tipoAlerta = $tipoAlerta ?? ''; htmlspecialchars($tipoAlerta ?: 'info'); ?>" role="alert">
                        <?= htmlspecialchars($mensagem); ?>
                    </div>
                <?php endif; ?>

                <div class="form-card">
                    <form action="index.php?acao=salvar" method="POST">
                        <div class="mb-3">
                            <label for="nome_produto" class="form-label">Nome do Produto</label>
                            <input type="text" class="form-control" id="nome_produto" name="nome_produto" placeholder="Ex: Notebook Gamer" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="preco" class="form-label">Preço (R$)</label>
                                <input type="number" step="0.01" min="0" class="form-control" id="preco" name="preco" placeholder="0.00" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="quantidade" class="form-label">Quantidade</label>
                                <input type="number" min="0" class="form-control" id="quantidade" name="quantidade" placeholder="1" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="descricao" class="form-label">Descrição</label>
                            <textarea class="form-control" id="descricao" name="descricao" rows="4" placeholder="Descreva o produto..."></textarea>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Salvar Produto</button>
                        </div>
                    </form>
                </div>

                <?php include 'Rodapé.php'; ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>