<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                
                <div class="text-center mb-4">
                    <h1 class="h3 fw-bold text-primary">Cadastro de Produtos</h1>
                </div>

                <?php if (!empty($mensagem)): ?>
                    <div class="alert alert-<?= $tipoAlerta = $tipoAlerta ?? ''; htmlspecialchars($tipoAlerta ?: 'info'); ?> alert-dismissible fade show" role="alert">
                        <?= htmlspecialchars($mensagem); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <form action="index.php?acao=salvar" method="POST">
                            
                            <div class="mb-3">
                                <label for="nome_produto" class="form-label fw-semibold">Nome do Produto</label>
                                <input type="text" class="form-control" id="nome_produto" name="nome_produto" required>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="preco" class="form-label fw-semibold">Preço (R$)</label>
                                    <input type="number" step="0.01" class="form-control" id="preco" name="preco" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="quantidade" class="form-label fw-semibold">Quantidade</label>
                                    <input type="number" class="form-control" id="quantidade" name="quantidade" required>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="descricao" class="form-label fw-semibold">Descrição</label>
                                <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Salvar Produto</button>
                            </div>

                        </form>
                    </div>
                </div>

                <?php include 'Rodapé.php'; ?>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>