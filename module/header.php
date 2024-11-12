<!-- Header -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Awesome CSS Responsive Navigation menus</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/faiza.css" />
</head>

<body>
    <header>
        <input type="checkbox" name="" id="chk1" />
        <div class="logo">
            <h1>Game Vintage</h1>
        </div>
        <div class="container">
            <form action="https://www.google.com/search" class="search" id="search-bar">
                <input type="search" placeholder="Type something..." name="q" class="search__input">
    
                <div class="search__button" id="search-button">
                    <i class="ri-search-2-line search__icon"></i>
                    <i class="ri-close-line search__close"></i>
                </div>
            </form>
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Sony</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact</a></li>
            <li>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </li>
        </ul>
        <div class="menu">
            <label for="chk1">
                <i class="fa fa-bars"></i>
            </label>
        </div>
    </header>
    <script src="assets/script.js"></script>
</body>

</html>