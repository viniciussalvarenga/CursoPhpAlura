<?php include_once __DIR__ . '\html-inicio.php'?>

<body>
<div class="container">
    <div class="jumbotron">
        <h1><?= $titulo ?? $titulo = 'Novo curso'; ?> </h1>
    </div>
    <form action="/salvar-curso<?= isset($curso) ? '?id='. $curso->getId() : ''; ?>" method="post">
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" id="descricao" name="descricao" class="form-control"
                   value="<?= isset($curso) ? $curso->getDescricao() : ''; ?>">
        </div>
        <button class="btn btn-primary">Salvar</button>
    </form>
</div>
</body>
</html>