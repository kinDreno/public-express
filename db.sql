CREATE TABLE freedomwalldb.posts 
    (id INT NOT NULL AUTO_INCREMENT,
     author VARCHAR(100) NOT NULL,
     title VARCHAR(255) NOT NULL,
     content TEXT NOT NULL,
     posted_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
     PRIMARY KEY (id)) ENGINE = InnoDB;