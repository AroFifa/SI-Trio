
-- get_comptetiers
CREATE OR REPLACE FUNCTION public.get_comptetiers(pattern VARCHAR)
    RETURNS TABLE(
        idcomptetiers VARCHAR
    )AS $$
    BEGIN
        RETURN QUERY SELECT id from View_comptetiers where tiers = pattern;
    END; $$
    LANGUAGE 'plpgsql';



SELECT * from View_comptetiers where id in (SELECT * from get_comptetiers('Client'));


-- get_compteprimaire
SELECT * from ComptePrimaire where id =(SELECT substring(numero,1,1) from ComptePrimaire)
SELECT * from ComptePrimaire where id=(SELECT substring(numerocompte,1,1) from View_comptetiers)
CREATE OR REPLACE FUNCTION get_compteprimaire(numero_compte VARCHAR)
    RETURNS VARCHAR AS $$
    DECLARE 
        idcompte VARCHAR;
    BEGIN
        SELECT id into idcompte from ComptePrimaire where numero=(SELECT substring(numero_compte,1,1));
        RETURN idcompte;
    END; $$ 
    LANGUAGE 'plpgsql';

SELECT * from ComptePrimaire where id=get_compteprimaire('40110');


-- génerer un caractère 0

CREATE OR REPLACE FUNCTION zero(nb int)
    RETURNS VARCHAR AS $$
    DECLARE
        i int:=0;
        num VARCHAR:=''; 
    BEGIN
        while(i<nb) loop
            num=num||'0';
            i=i+1;
        end loop;
        RETURN num;
    END; $$
    LANGUAGE 'plpgsql';
	
SELECT zero(4);

-- générer une date depuis une écriture

CREATE OR REPLACE FUNCTION getdate(debut date,fin date,jour int,mois int)
    RETURNS VARCHAR AS $$
    DECLARE
        j int:=jour;
        m VARCHAR:=mois; 
        d date;
        finD date;
    BEGIN
        SELECT date(concat(EXTRACT(year from debut)::varchar,concat(concat('-',mois::varchar),concat('-',jour::varchar)))) into d;
        SELECT (DATE (EXTRACT(year from debut) || '-12-31')) into finD;
        if(d>=debut and d<=finD) THEN
            return d;
        else 
            SELECT date(concat(EXTRACT(year from fin)::varchar,concat(concat('-',mois::varchar),concat('-',jour::varchar)))) into d;
            return d;
        END IF;
    END; $$
    LANGUAGE 'plpgsql';

SELECT getdate(debut,fin,05,12) from Exercice;
-- SELECT EXTRACT(year from debut) from Exercice
-- SELECT (DATE (EXTRACT(year from debut) || '-12-31')) from Exercice;




-- get_balance by date

-- CREATE OR REPLACE FUNCTION public.get_balance(pattern date)
--     RETURNS TABLE(
--         anne Integer,
--         idexercice varchar(4),
--         debut date,
--         fin date,
--         numero varchar(13),
--         intitule varchar(35),
--         mvd money,
--         mvc money,
--         crediteur money,
--         debiteur money
--     )AS $$
--     BEGIN
--         RETURN QUERY 
--             select ex.annee,ex.id idexercice,ex.debut,ex.fin,c.numero,c.intitule,
--             sum(e.debit) mvd,sum(e.credit) mvc,
--             CASE
--                 WHEN sum(e.debit)<sum(e.credit) THEN sum(e.credit)-sum(e.debit)
--                 ELSE 0::money
--             END
--             crediteur,
--             CASE
--                 WHEN sum(e.debit)>sum(e.credit) THEN sum(e.debit)-sum(e.credit)
--                 ELSE 0::money
--             END
--             debiteur
--             from ecriture e
--             join Exercice ex on ex.id = e.idexercice
--             join Compte c on e.idcompte = c.id
--             where getdate(ex.debut,ex.fin,e.jour,e.mois)<pattern::date
--             group by c.numero,c.intitule,ex.annee,ex.debut,ex.fin,ex.id;
--     END; $$
--     LANGUAGE 'plpgsql';