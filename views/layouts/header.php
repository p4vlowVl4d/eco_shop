<!DOCTYPE html>

<html lang="ru">

<head>

    <title>Page Title</title>
    <meta charset="<?=mb_internal_encoding()?>">
    <meta name="viewport" content="initial-scale=1.0">
    <link rel="stylesheet" href="/template/css/style.css" type="text/css">
    <link rel="stylesheet" href="/template/css/icon-style.css" type="text/css">
    <link rel="stylesheet" href="/template/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/template/css/style-full-icon.css" type="text/css">
    <script src="/template/js/jquery-3.3.1.min.js"></script>
</head>

<body>
    <div class="preloader" id="preload">
        <div class="preload-line spin"></div>
    </div>
    <div class="wrapper">
        <header>
            <div class="greenHead">
                <ul>
                    
                <?php if(User::isGuest()): ?>
                    <?php echo '<li><a href="/login/">Войти</a></li>';?>
                    <?php echo '<li><a href="/sign_up/">Регистрация</a></li>';?>
                <?php else: ?>
                    <?php echo '<li><a href="/cabinet/">Кабинет</a></li>';?>
                    <?php echo '<li><a href="/user/logout/">Выйти</a></li>';?> 
                <?php endif;?>
                </ul>
            </div>
            <div class="navMenu">
                <div class="logo">
                    <a href="">Eco Shop</a>
                </div>
                <ul>
                    <li><a href="/">Главная</a></li>
                    <li><a href="/product/">Каталог</a></li>
                    <li><a href="/about/">О нас</a></li>
                    <li><a href="/contacts/">Контакты</a></li>
                    <li><a href="/blog/">Блог</a></li>
                </ul>
                <div class="search_input">
                    <input type="text">
                </div>
                <div class="cart-block">
                    <div class="cart-block__link">
                        <a href="/cart/" class="icon-cart">
                        </a>
                        <span class="cart-block-count"><p>Корзина:&nbsp; </p>(<p class="cart-count"><?php echo Cart::countItems()?></p>)</span>
                    
                    </div>



                </div>
            </div>
            <div class="slideShow">
                <p>лучшие экопродукты</p>
                <p>в нижнем новгороде</p>
            </div>
        </header>
