<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">My Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home page</a>
                </li>

            </ul>

        </div>
    </div>
</nav>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <? if ($message = Messages::get()) { ?>
                <div class="alert <?= $message["type"] ?>" role="alert">
                    <?= $message["text"] ?>
                </div>
            <? } ?>

            <a href="/create" class="btn btn-success mb-3">Add Post</a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <? foreach ($posts as $post) { ?>
                    <tr>
                        <th scope="row"><?= $post["id"] ?></th>
                        <td><a href="/show?id=<?= $post["id"] ?>"><?= $post["title"] ?></a></td>
                        <td>
                            <a href="/edit?id=<?= $post['id'] ?>" class="btn btn-warning">Edit</a>
                            <a href="/delete?id=<?= $post['id'] ?>" class="btn btn-danger"
                               onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                <? } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


</body>
</html>