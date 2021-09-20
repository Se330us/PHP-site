<div class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-secondary">Главная</a></li>
                <li><a href="../about.php" class="nav-link px-2 text-white">О нас</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Страница 2</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Страница 3</a></li>
            </ul>


            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Поиск..." aria-label="Search">
            </form>

            <?php
            if($_COOKIE['user'] == 'Success'):
            ?>
            <a class="btn btn-outline-primary" href="/auth.php">Кабинет пользователя</a>
            <?php
            else:
            ?>
            <div class="text-end">
                <button type="button" class="btn btn-outline-light me-2" href="/auth.php">Войти</button>
                <button type="button" class="btn btn-warning">Регистрация</button>
            </div>

            <?php
            endif;
            ?>
        </div>
    </div>
</div>