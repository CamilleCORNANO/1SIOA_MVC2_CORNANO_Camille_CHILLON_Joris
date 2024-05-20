CREATE DATABASE IF NOT EXISTS "m3 - utilisateurs"
CREATE TABLE utilisateurs 
(
nom VARCHAR(18), 
prenom VARCHAR(14), 
email VARCHAR(35),
telephone VARCHAR(15),
remarque VARCHAR(40)
motdepasse varchar(30)
);

INSERT INTO utilisateurs VALUES
    ("Ben Sahid", "Karim", "karim.bensahid@yahoo.fr", "0612345678", "Passionné de cinéma"),
    ("Koné", "Fatou", "fatou.kone@gmail.com", "0623456789", "Jardinage écologique"),
    ("Nowak", "Piotr", "piotr.nowak@yahoo.fr", "0612345678", "Magicien amateur"),
    ("Le Gall", "Morgane", "morgane.legall@yahoo.fr", "0758936448", "Artiste Photographe"),
    ("El Hassani", "Yasmine", "elhassaniyasmine@yahoo.fr", "06563897487", "Yoga et Méditation"),
    ("Kouassi", "Koffi", "kouassi.koffi@yahoo.fr", "0768654858", "Collectionneur de BD"),
    ("Jashejai", "Agnieszka", "justerpairesde@yahoo.fr", "0612345678", "DJ en herbe"),
    ("akjhbzvjkaze", "afhvfafaderr", "jeizuggdergtt@yahoo.fr", "0612345678", "Pêcheur à la ligne"),
    ("Kutabare", "Kucchibukke", "lllllllllllllll@yahoo.fr", "0612345678", "Danseur Contemporain"),
    ("lmeosiajeus", "leosirbysdue", "lopmoiuytghjknbvds@yahoo.fr", "0612345678", "Fan de Jeux de Combat"),
    ("testeur", "test", "testestest@gmail.com", "0612345678", "Testeur du site"),
    ("jjjjjjjjjjjjjj", "abvfyohayzrebvohfer", "bhjbdyuuicgfoer@yahoo.fr", "0663398678", NULL),
    ("llllllesooejnde", "pomoiutecvqz", "tututututututututu@yahoo.fr", "0612345687", NULL),
   
    