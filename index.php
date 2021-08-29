<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Разработка некоторого механизма на PHP</title>
</head>
<body>
<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary">Главная</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Страница 1</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Страница 2</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Страница 3</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Поиск..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Войти</button>
          <button type="button" class="btn btn-warning">Регистрация</button>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
      <h3 class="mt-5 mb-5">Посты</h3>
      <div class="d-flex flex-wrap">
      <?php  for ($i = 0; $i < 6; $i++): ?>

      <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Название</h4>
            </div>
            <div class="card-body">
              <img src="img/<?php echo ($i + 1)?>.jpg" alt="" class="img-thumbnail card_image">
              <ul class="list-unstyled mt-3 mb-4">
                <li>Строка 1</li>
                <li>Строка 2</li>
                <li>Строка 3</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-primary">Подробнее</button>
            </div>
        </div>
      <?php endfor; ?>
      </div>
  </div>
</body>
</html>