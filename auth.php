<?php
    setcookie('user', 'Success', time() + 3600, '/');
    header('Location: /');
?>