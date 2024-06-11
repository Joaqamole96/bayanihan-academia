<link rel="stylesheet" href="/assets/css/header.css">
<script src="/assets/js/header.js"></script>

<header class="header   flex-container" id="header">
    <a class="hyperlink" id="hyperlink-home" href="/">
        <img class="header__icon" id="logo-icon" src="<?= $header_content['logo_icon_src'] ?>" alt="Logo">
    </a>
    <nav class="nav   flex-container" id="nav">
        <a class="hyperlink" id="hyperlink-match" href="/match">
            <div class="nav__item" id="nav-match">
                Match
            </div>
        </a>
        <a class="hyperlink" id="hyperlink-agency" href="/agency">
            <div class="nav__item" id="nav-agency">
                My Agency
            </div>
        </a>
        <a class="hyperlink" id="hyperlink-store" href="/store">
            <div class="nav__item" id="nav-store">
                Store
            </div>
        </a>
    </nav>
    <div class="header__wrapper" id="avatar-wrapper">
        <img class="header__icon" id="avatar-icon" src="<?= $header_content['avatar_icon_src'] ?>" alt="Avatar">
        <div class="dropdown" id="avatar-dropdown">
            <div class="dropdown__item" id="account">
                <div class="dropdown__icon" id="account-icon">

                </div>
                <a class="hyperlink" id="hyperlink-account" href="/account">
                    <div class="dropdown__label" id="account-label">
                        My Account
                    </div>
                </a>
            </div>
            <div class="dropdown__item" id="settings">
                <div class="dropdown__icon" id="settings-icon">

                </div>
                <a class="hyperlink" id="hyperlink-settings" href="/settings">
                    <div class="dropdown__label" id="settings-label">
                        Settings
                    </div>
                </a>
            </div>
        </div>
    </div>
</header>