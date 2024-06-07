-- Drop existing tables if they exist to ensure a clean setup
DROP TABLE IF EXISTS deck_cards;
DROP TABLE IF EXISTS cards;
DROP TABLE IF EXISTS decks;
DROP TABLE IF EXISTS users;

-- Decks Table
CREATE TABLE decks (
    deck_id INT AUTO_INCREMENT PRIMARY KEY,

    deck_name VARCHAR(100) NOT NULL,
    deck_description TEXT,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Users Table
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    deck_id INT,

    user_name VARCHAR(50) NOT NULL UNIQUE,
    user_email VARCHAR(100) NOT NULL UNIQUE,
    user_password VARCHAR(255) NOT NULL,
    user_bio TEXT,
    user_profile_picture_url VARCHAR(255),
    user_role ENUM('admin', 'player') DEFAULT 'player',

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    CONSTRAINT users_deck_id_fk FOREIGN KEY (deck_id) REFERENCES decks(deck_id) ON DELETE SET NULL ON UPDATE CASCADE
);

-- Cards Table
CREATE TABLE cards (
    card_id INT AUTO_INCREMENT PRIMARY KEY,

    card_name VARCHAR(100) NOT NULL,
    card_cost INT,
    card_rarity ENUM('D', 'C', 'B', 'A', 'S', 'S+', 'SS', 'SS+') NOT NULL,
    card_image_url VARCHAR(255),

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Character Cards Table
CREATE TABLE character_cards (
    character_id INT AUTO_INCREMENT PRIMARY KEY,
    card_id INT

    chracter_power INT,
    character_health INT,
    character_quirk TEXT,
)

-- Deck Cards Table
CREATE TABLE deck_cards (
    deck_card_id INT AUTO_INCREMENT PRIMARY KEY,
    deck_id INT NOT NULL,
    card_id INT NOT NULL,
    quantity INT DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT fk_deck FOREIGN KEY (deck_id) REFERENCES decks(deck_id) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT fk_card FOREIGN KEY (card_id) REFERENCES cards(card_id) ON DELETE CASCADE ON UPDATE CASCADE
);