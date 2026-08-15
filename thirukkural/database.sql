-- Database structure for thirukkural table
-- Update your database credentials in the PHP files

CREATE TABLE IF NOT EXISTS thirukkural (
    id INT PRIMARY KEY AUTO_INCREMENT,
    kural TEXT NOT NULL,
    muVaradharasanarexplanation TEXT,
    solomonpaapaiyaexplanation TEXT,
    kalaignarexplanation TEXT,
    couplet TEXT,
    english_explanation TEXT,
    transliteration TEXT,
    url VARCHAR(255) UNIQUE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Create indexes for better performance
CREATE INDEX idx_kural_search ON thirukkural (kural(100));
CREATE INDEX idx_url ON thirukkural (url);
CREATE INDEX idx_id ON thirukkural (id);

-- Sample data structure (you'll need to populate this with your actual data)
-- INSERT INTO thirukkural (id, kural, muVaradharasanarexplanation, solomonpaapaiyaexplanation, kalaignarexplanation, couplet, english_explanation, transliteration, url) VALUES
-- (1, 'அகர முதல எழுத்தெல்லாம் ஆதி\nபகவன் முதற்றே உலகு', 'Mu Varadarasanar explanation here...', 'Solomon Paapaiya explanation here...', 'Kalaignar explanation here...', 'As the letter A is the first of all letters, so the eternal God is first of all things that are.', 'English explanation here...', 'Agara mudala ezhuththellaam aadhi bhagavan mudharre ulagu', 'kural-1-agara-mudala-ezhuththellaam');

-- Note: Update database connection settings in:
-- - index.php
-- - search.php  
-- - kural/index.php
-- - categories.php

-- Replace these placeholders with your actual database details:
-- $host = 'localhost';
-- $dbname = 'your_database_name';  <- Change this
-- $username = 'your_username';     <- Change this  
-- $password = 'your_password';     <- Change this