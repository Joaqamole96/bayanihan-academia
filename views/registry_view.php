<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registry</title>
        <link rel="stylesheet" href="/assets/css/registry.css">
    </head>
    <body>
        <header>
            <?php require_once 'controllers/header_controller.php' ?>
        </header>
        <main>
            <div class="registry__wrapper">
                <form class="registry" method="post">
                    <div class="registry__fields registry__fields--card">
                        <!-- Card Name -->
                        <div class="registry__input-container registry__input-container--text">
                            <label class="registry__label" for="card_name">
                                Card Name:
                            </label>
                            <input class="registry__input registry__input--text" type="text" name="card_name" id="card_name" placeholder="Use hero or villain names for Character cards." required>
                        </div>
                        <!-- Card Cost -->
                        <div class="registry__input-container registry__input-container--number">
                            <label class="registry__label" for="card_cost">
                                Card Cost:
                            </label>
                            <input class="registry__input registry__input--number" type="number" name="card_cost" id="card_cost" min="0" value="0" required>
                        </div>
                        <!-- Card Rarity -->
                        <div class="registry__input-container registry__input-container--select">
                            <label class="registry__label" for="card_rarity">
                                Card Rarity:
                            </label>
                            <select class="registry__input registry__input--select" name="card_rarity" id="card_rarity">
                                <option value="S+">S+</option>
                                <option value="S">S</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                        </div>
                        <!-- Card Image -->
                        <div class="registry__input-container registry__input-container--file">
                            <label class="registry__label" for="card_image">
                                Card Image:
                            </label>
                            <input class="registry__input registry__input--file" type="file" name="card_image" id="card_image" required>
                        </div>
                        <!-- Card Type -->
                        <div class="registry__input-container registry__input-container--radio">
                            <label class="registry__label" for="card_type">
                                Card Type
                            </label>
                            <div class="registry__input-group">
                                <input class="registry__input registry__input--radio" type="radio" name="card_type" id="card_type_character" value="character">
                                <label class="registry__radio-label" for="card_type_character">
                                    Character
                                </label>
                                <input class="registry__input registry__input--radio" type="radio" name="card_type" id="card_type_item" value="item">
                                <label class="registry__radio-label" for="card_type_item">
                                    Item
                                </label>
                                <input class="registry__input registry__input--radio" type="radio" name="card_type" id="card_type_circumstance" value="circumstance">
                                <label class="registry__radio-label" for="card_type_circumstance">
                                    Circumstance
                                </label>
                            </div>
                        </div>
                    </div>

                    <?php if(true): ?>
                        <div class="registry__fields registry__fields--character">
                            <!-- Character Power -->
                            <div class="registry__input-container registry__input-container--number">
                                <label class="registry__label" for="character_power">
                                    Character Power:
                                </label>
                                <input class="registry__input registry__input--number" type="number" name="character_power" id="character_power" min="0" value="0" required>
                            </div>
                            <!-- Character Health -->
                            <div class="registry__input-container registry__input-container--number">
                                <label class="registry__label" for="character_health">
                                    Character Health:
                                </label>
                                <input class="registry__input registry__input--number" type="number" name="character_health" id="character_health" min="0" value="0" required>
                            </div>
                            <!-- Character Power -->
                            <div class="registry__input-container registry__input-container--textarea">
                                <label class="registry__label" for="character_quirk">
                                    Character Quirk:
                                </label>
                                <textarea class="registry__input registry__input--textarea" name="character_quirk" id="character_quirk" placeholder="Describe the character's quirk in 1-2 sentences." required></textarea>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="registry__fields">
                        <div class="registry__input-container">
                            <input class="registry__input registry__input--submit" type="submit" name="submit-card" value="Create Card">
                        </div>
                    </div>
                </form>
            </div>
        </main>
        <footer>

        </footer>
    </body>
</html>