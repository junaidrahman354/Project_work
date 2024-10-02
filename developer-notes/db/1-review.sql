ALTER TABLE user_registration DROP COLUMN review;

CREATE TABLE IF NOT EXISTS user_reviews(
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `review` INT NOT NULL DEFAULT 5,
  `desc` TEXT
);
