<link rel="stylesheet" href="/assets//css/header.css">
<script src="/assets/js/header.js"></script>

<header class="header">
    <a class="hyperlink   hyperlink--home" href="/">
        <img class="header__icon   logo" src="<?= $header_content['logo_icon_src'] ?>" alt="Logo">
    </a>
    <nav class="nav">
        <a class="hyperlink   hyperlink--match" href="/match">
            <div class="nav__item">
                Match
            </div>
        </a>
        <a class="hyperlink   hyperlink--inventory" href="/inventory">
            <div class="nav__item">
                Inventory
            </div>
        </a>
        <a class="hyperlink   hyperlink--store" href="/store">
            <div class="nav__item">
                Store
            </div>
        </a>
    </nav>
    <div class="header__wrapper   avatar__wrapper">
        <img class="header__icon   avatar" id="avatar-icon" src="<?= $header_content['avatar_icon_src'] ?>" alt="Avatar">
        <div class="dropdown" id="avatar-dropdown">
            <div class="dropdown__item">
                <div class="dropdown__icon">

                </div>
                <a href="/account">
                    <div class="dropdown__label">
                        My Account
                    </div>
                </a>
            </div>
            <div class="dropdown__item">
                <div class="dropdown__icon">

                </div>
                <a href="/settings">
                    <div class="dropdown__label">
                        Settings
                    </div>
                </a>
            </div>
        </div>
    </div>
</header>