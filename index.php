<?php
$coffeeItems = require_once 'config/coffee_data.php';
$dessertItems = require_once 'config/desserts_data.php';
$freshItems = require_once 'config/fresh_data.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoffeeSense</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Marck+Script&family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom LESS -->
    <link rel="stylesheet/less" type="text/css" href="css/style.less">
    <script src="https://cdn.jsdelivr.net/npm/less"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>
    <div class="container-main">
    <header class="header">
        <div class="burger-menu">
            <span class="burger-line"></span>
            <span class="burger-line"></span>
            <span class="burger-line"></span>
        </div>
        <nav class="nav-list desktop-nav">
            <ul>
                <li class="nav-item"><a class="nav-link" href="#">Меню</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Контакты</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Отзывы</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Галерея</a></li>
            </ul>
        </nav>
        <div class="mobile-menu">
            <nav class="mobile-nav">
                <ul class="nav-list">
                    <li class="nav-item"><a class="nav-link" href="#">Меню</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Контакты</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Отзывы</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Галерея</a></li>
                </ul>
            </nav>
            <div class="mobile-menu-footer">
                <div class="social-links">
                    <a href="#" class="social-link">Instagram</a>
                    <a href="#" class="social-link">Facebook</a>
                    <a href="#" class="social-link">VK</a>
                </div>
                <div class="contact-info">
                    <p>Работаем ежедневно</p>
                    <p>с 8:00 до 22:00</p>
                    <p>+7 (999) 123-45-67</p>
                    <p>г. Москва, ул. Кофейная, 15</p>
                </div>
            </div>
        </div>
        <div class="logo">
            <a class="logo-link" href="#">CoffeeSense</a>
        </div>
        <div class="profile-block">
            <div class="avatar">
                <img src="img/icons/user.svg" alt="User">
            </div>
            <div class="profile-content">
                <span class="name">Голосов Максим</span>
                <span class="role">Клиент</span>
            </div>
            <div class="icon-profile">
                <img src="img/icons/basket.svg" alt="Basket">
            </div>
        </div>
    </header>

    <main class="main-section">
        <div class="main-content">
            <h1 class="main-content-name">
                Каждая чашка — <span>маленькая история</span>
            </h1>
            <div class="main-content-description">
                Мы верим, что кофе — это больше, чем просто напиток. Это момент для себя, уютная беседа с друзьями или вдохновение для новых идей. Каждая наша чашка создаётся с заботой и любовью, чтобы сделать твой день немного лучше.
            </div>
            <a href="#" class="main-content-button">
                <img src="img/icons/coffee.svg" alt="Coffee icon">
                Заказать
            </a>
        </div>
        <div class="main-img">
            <img src="img/objects/coffee.png" alt="Coffee">
        </div>
    </main>
    </div>

    <section class="coffee-menu">
        <h2 class="title">Кофе</h2>
        <div class="coffee-cards">
            <?php foreach($coffeeItems as $coffee): ?>
            <div class="coffee-card">
                <div class="coffee-image">
                    <img src="<?php echo htmlspecialchars($coffee['image']); ?>" alt="<?php echo htmlspecialchars($coffee['name']); ?>">
                </div>
                <div class="coffee-info">
                    <div class="coffee-header">
                        <div class="coffee-name"><?php echo htmlspecialchars($coffee['name']); ?></div>
                        <div class="coffee-price-volume">
                            <div><?php echo htmlspecialchars($coffee['price']); ?>₽</div>
                            <div><?php echo htmlspecialchars($coffee['volume']); ?>мл</div>
                        </div>
                    </div>
                    <p class="coffee-description">
                        <?php echo htmlspecialchars($coffee['description']); ?>
                    </p>
                    <button class="coffee-button">
                        Хочу
                    </button>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="coffee-menu">
        <h2 class="title">Десерты</h2>
        <div class="coffee-cards">
            <?php foreach($dessertItems as $dessert): ?>
            <div class="coffee-card">
                <div class="coffee-image">
                    <img src="<?php echo htmlspecialchars($dessert['image']); ?>" alt="<?php echo htmlspecialchars($dessert['name']); ?>">
                </div>
                <div class="coffee-info">
                    <div class="coffee-header">
                        <div class="coffee-name"><?php echo htmlspecialchars($dessert['name']); ?></div>
                        <div class="coffee-price-volume">
                            <div><?php echo htmlspecialchars($dessert['price']); ?>₽</div>
                            <div><?php echo htmlspecialchars($dessert['volume']); ?>г</div>
                        </div>
                    </div>
                    <p class="coffee-description">
                        <?php echo htmlspecialchars($dessert['description']); ?>
                    </p>
                    <button class="coffee-button">
                        Хочу
                    </button>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="fresh-friday">
        <h2 class="fresh-friday-title">
            Свежая пятница
            <span class="fresh-friday-subtitle">Каждую неделю</span>
        </h2>
        <div class="fresh-friday-content">
            <?php foreach($freshItems as $fresh): ?>
            <div class="fresh-card">
                <div class="fresh-image">
                    <img src="<?php echo htmlspecialchars($fresh['image']); ?>" alt="<?php echo htmlspecialchars($fresh['name']); ?>">
                </div>
                <div class="fresh-info">
                    <div class="fresh-header">
                        <div class="fresh-name"><?php echo htmlspecialchars($fresh['name']); ?></div>
                    </div>
                    <p class="fresh-description">
                        <?php echo htmlspecialchars($fresh['description']); ?>
                    </p>
                    <div class="fresh-price-volume">
                            <div><?php echo htmlspecialchars($fresh['price']); ?>₽</div>
                            <div class="fresh-price-ml">
                                <div><?php echo htmlspecialchars($fresh['price']); ?>₽</div>
                                <div><?php echo htmlspecialchars($fresh['volume']); ?>мл</div>
                            </div>
                        </div>
                </div>
                <button class="fresh-button">
                        Хочу
                    </button>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="bonus">
        <h2 class="title">
            Бонусная программа
        </h2>
        <div class="bonus-content">
            <div class="swiper">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                <div class="swiper-slide slide-one">
                    <div class="text-content">
                        <div class="span-title">
                            <span>Получи 100 бонусных баллов!</span>
                            <span>Один бонусный балл = 1 рубль</span>
                        </div>
                        <div class="description">
                            <p>Бонус каждому первому покупателю при регистрации бонусной карты кофеен CoffeeSense</p>
                            <p>В честь дня рождения кофейня CoffeeSense дарит вам 100 подарочных рублей на счёт</p>
                        </div>
                        <button class="content-button">Подробнее</button>
                    </div>
                    <div class="img-content qr">
                        <img src="img/objects/qr-monitor/qr.png" alt="qr-code">
                    </div>
                    <div class="img-content woman">
                    <img src="img/objects/qr-monitor/woman.png" alt="woman">
                    </div>
                    </div>
                    <div class="swiper-slide">ПРИВЕТ</div>
                    <div class="swiper-slide">ПРИВЕТ</div>
                    
                </div>
                <div class="swiper-button swiper-button-next"></div>
                <div class="swiper-button swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
            </div>
        </div>
        
    </section>
    
    <section class="reviews">
        <h2 class="title">
            Отзывы
        </h2>
        <div class="reviews-content">
        <?php for ($c = 0; $c < 8; $c++): ?>
            <div class="review-card">
                <div class="review-header">
                    <div class="avatar"><img src="img/icons/avatar.svg" alt="Avatar"></div>
                    <div class="review-title">
                        <div class="name">Андрей</div>
                        <div class="platform">Яндекс.Карты</div>
                    </div>
                </div>
                <div class="review-content">
                    <div class="content-title">Лучший кофе</div>
                    <div class="content-description">
                        Такой классный кофе я плачу ваще.
                         Я просто баристе рот целовал ежжи.
                         Просто от души да сестричка лучший кент ваще поехали шарики дуть <a href="#" class="more">More</a>
                        </div>
                </div>
                <?php
$filledStars = 5; // Количество заполненных звезд
$totalStars = 5; // Общее количество звезд
?>
<div class="stars">
    <?php
for ($i = 0; $i < $totalStars; $i++) {
    if ($i < $filledStars) {
        // Если индекс меньше количества заполненных звезд, выводим обычную звезду
        echo '<img src="img/icons/star.svg" alt="Star">';
    } else {
        // Если индекс больше или равен количеству заполненных звезд, выводим серую звезду
        echo '<img src="img/icons/star-gray.svg" alt="Gray Star">';
    }
}
?>
</div>  
            </div>
            <?php endfor; ?>
        </div>
    </section>

    <!-- Swiper.js -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="js/script.js"></script>
</body>
</html> 