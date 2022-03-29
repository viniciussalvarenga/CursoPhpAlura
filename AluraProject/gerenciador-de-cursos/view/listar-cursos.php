
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
  <div class="jumbotron">
    <h1>Listar cursos</h1>
  </div>

  <a href="/formulario-novo-curso" class="btn btn-primary mb-2">
    Novo curso
  </a>

    <ul class="list-group">
        <?php foreach ($cursos as $curso): ?>
            <li class="list-group-item d-flex justify-content-between">
                <?= $curso->getDescricao(); ?>
                <span>
                <a href="/alterar-curso?id=<?= $curso->getId(); ?>" class="btn btn-info btn-sm">
                    Alterar
                </a>
            <a href="/excluir-curso?id=<?= $curso->getId(); ?>" class="btn btn-danger btn-sm">
                Excluir
            </a>
            </span>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
</body>
</html>
