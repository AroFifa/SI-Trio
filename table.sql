

-- Exercice

CREATE TABLE Exercice(
    id varchar(4) not null PRIMARY KEY default (nextval('seq_exercice')),
    annee Integer not null check(annee>1800 and annee<5000) default (EXTRACT(year from CURRENT_DATE)),
    debut date not null,
    fin date not null
);

-- Journal
CREATE TABLE Journal(
    id varchar(4) not null PRIMARY KEY default (nextval('seq_journal')),
    libelle varchar(35) unique not null
);

-- ComptePrimaire
CREATE TABLE ComptePrimaire(
    id varchar(4) not null PRIMARY KEY default(nextval('seq_compteprimaire')),
    numero varchar(1) unique not null,
    intitule varchar(35) not null
);

-- Compte
CREATE TABLE Compte (
    id varchar(4) not null PRIMARY KEY default(nextval('seq_compte')),
    numero varchar(13) unique not null,
    intitule varchar(35) not null
);

-- CaractereCompte
CREATE TABLE CaractereCompte(
    id varchar(4) not null PRIMARY KEY default(nextval('seq_caracterecompte')),
    nombre Integer default 5 check(nombre<13 and nombre >2),
    dateheure TIMESTAMP default CURRENT_TIMESTAMP unique not null
);

-- Tiers
-- CREATE TABLE Tiers(
--     id varchar(4) not null PRIMARY KEY default(nextval('seq_tiers')),
--     intitule varchar(35) unique not null
-- );

-- CompteTiers
CREATE TABLE CompteTiers(
    id varchar(4) not null PRIMARY KEY default(nextval('seq_comptetiers')),
    numero varchar(13) unique not null,
    nom varchar(35) not null,
    -- idtiers varchar(4) REFERENCES Tiers(id),
    idcompte varchar(4) REFERENCES Compte(id)
);



-- Ecriture
CREATE TABLE Ecriture(
    id varchar(4) not null PRIMARY KEY default(nextval('seq_ecriture')),
    idexercice varchar(4) REFERENCES Exercice(id),
    idjournal varchar(4) REFERENCES Journal(id),
    refpiece varchar(15) not null,
    jour integer not null check(jour>0 and jour<32),
    mois integer not null check(mois>0 and mois<13),
    idcompte varchar(4) REFERENCES Compte(id),
    idcomptetiers varchar(4) REFERENCES CompteTiers(id),
    libelle varchar(35) not null,
    debit money not null default 0,
    credit money not null default 0
);




-- Devise
CREATE TABLE Devise(
    id SERIAL PRIMARY KEY,
    Nom varchar(30)
);


-- Taux Dynamique
CREATE TABLE HISTORIQUEDEVISE(
    id SERIAL PRIMARY KEY,
    idDevise int reference TauxDevise(id),
    Taux double precision
);
