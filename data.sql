-- Exercice
INSERT INTO Exercice (annee,debut,fin) VALUES
(2018,'2018-06-30','2019-07-01'),
(2019,'2019-06-30','2020-07-01'),
(2020,'2020-06-30','2021-07-01');
-- Journal

INSERT INTO Journal (libelle) VALUES 
('A NOUVEAU'),
('Achat'),
('Vente'),
('Banque'),
('Caisse'),
('Paye'),
('Opération diverse');

-- ComptePrimaire

INSERT INTO ComptePrimaire (numero,intitule) VALUES
('1','capitaux et passifs'),
('2','immobilisation'),
('3','stock'),
('4','compte tiers'),
('5','tresorerie'),
('6','charge'),
('7','produit');

-- Tiers
-- INSERT INTO Tiers (intitule) VALUES
-- ('Client'),
-- ('Fournisseur'),
-- ('Actionnaire'),
-- ('Débiteur our créditeur divers');


-- -- Compte
-- INSERT INTO Compte  VALUES
-- ('1','152','Salut je mon nom est Jean et cette teste est necessaire pour verifier kintegraliete du trigger'),
-- ('2','40122','dsd;ml'),
-- ('3','44456','dsd;ml'),
-- ('4','1235','dsd;ml');

-- -- Comptetiers
-- INSERT INTO Comptetiers (numero,nom,idcompte) VALUES 
-- ('RAK','RAKOTO Hafa','2');
-- ('KIO','Kira Hafa','2');
-- ('RAK','RAKOTO Izy','3');


-- CaractereCompte
-- INSERT INTO CaractereCompte (nombre) VALUES
-- (8);
