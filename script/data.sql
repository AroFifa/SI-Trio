-- Exercice
INSERT INTO Exercice (annee,debut,fin) VALUES
(2018,'2018-02-01','2019-01-31'),
(2019,'2019-02-01','2020-01-31'),
(2020,'2020-02-01','2021-01-31');
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

-- TypeDevise
INSERT INTO TypeDevise (nom)
VALUES 
('Ariary'),
('Euro'),
('Dollar');


--Ecriture
INSERT INTO ecriture values(default,'3','2','pce n20',2,1,76,null,'desk',10000,default);
INSERT INTO ecriture values(default,'3','2','pce n20',29,1,84,null,'charge energie',12000,default);
INSERT INTO ecriture values(default,'3','2','pce n20',3,1,85,null,'carburant',1220000,default);
INSERT INTO ecriture values(default,'3','3','pce n20',3,1,127,null,'vente local',default,400000);
INSERT INTO ecriture values(default,'3','3','pce n20',4,1,131,null,'exportation',default,2000000);
INSERT INTO ecriture values(default,'3','5','pce n20',5,1,70,null,'alimentation caisse',7000000,default);
INSERT INTO ecriture values(default,'3','4','pce n20',5,1,66,null,'alimentation caisse',default,7000000);
INSERT INTO ecriture values(default,'3','4','pce n20',6,1,66,null,'benefice',1158000,default);
