<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <title>Todo list</title>
</head>

<body>
    <header class="container mt-5 mb-2">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center">TODO LIST PHP MVC</h1>
                <form class="d-flex shadow-sm rounded card-body" action="/" method="POST">
                    <input type="text" class="form-control" name="input" required minlength="4" maxlength="20" autocomplete="off">
                    <button type="submit" class="btn btn-primary ms-3">Add</button>
                </form>
            </div>
        </div>
    </header>
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <ul class="list-group">
                    <?php foreach ($models as $value) : ?>
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <span class="fs-4"><?= htmlspecialchars($value['todo']) ?></span>
                            <div class="d-flex">
                                <a href="/update/id/<?= $value['id'] ?>/iscomplete/<?= $value['iscomplete'] ?>" class="btn btn-<?= $value['iscomplete'] == 0 ? 'outline-success' : 'success' ?> mx-2">
                                    <i class="bi bi-check"></i>
                                </a>
                                <a href="/delete/id/<?= $value['id'] ?>/iscomplete/<?= $value['iscomplete'] ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>