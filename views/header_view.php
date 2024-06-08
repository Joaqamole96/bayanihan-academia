<div class="header-container">
    <div class="header">
        <div class="logo__wrapper">
            <a href="/" class="logo__link">
                <img class="logo" src="<?= $header_content['logo_src'] ?>" alt="bynha-logo">
            </a>
        </div>
        <div class="title__wrapper">
            <a href="/" class="title__link">
                <h1 class="title"><?= $header_content['title'] ?></h1>
            </a>
        </div>
        <div class="ops__wrapper">  
            <div class="account">
                <a href="/accounts" class="account__link">
                    <img class="account__icon" src="<?= $header_content['account_icon_src'] ?>" alt="account">
                </a>
            </div>
            <div class="settings">
                <a href="/settings" class="settings__link">
                    <img class="settings__icon" src="<?= $header_content['settings_icon_src'] ?>" alt="settings">
                </a>
            </div>
        </div>
    </div>
    <div class="nav">
        <div class="nav-item">
            <a href="/agency" class="nav-item__link">
                <img class="nav-item__icon" src="<?= $header_content['agency_icon_src'] ?>" alt="agency"> 
                <p class="nav-item__label">My Agency</p>
            </a>
        </div>
        <div class="nav-item">
            <a href="/battlefield" class="nav-item__link">
                <img class="nav-item__icon" src="<?= $header_content['battlefield_icon_src'] ?>" alt="battlefield"> 
                <p class="nav-item__label">Battlefield</p>
            </a>
        </div>
    </div>
</div>