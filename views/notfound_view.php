<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>404 - Page Not Found</title>
        <link rel="stylesheet" href="/assets/css/global.css">
        <link rel="stylesheet" href="/assets/css/notfound.css">
    </head>
    <body>
        <header>
            <?php include_once 'controllers/header_controller.php'; ?>
        </header>
        <main>
            <div class="notfound   flex-container" id="notfound">
                <div class="notfound__title   text--large" id="notfound-title">
                    404 - Page Not Found
                </div>
                <div class="notfound__description" id="notfound-description">
                    The page you are looking for does not exist.
                </div>
            </div>
        </main>
        <footer>

        </footer>
    </body>
</html>