-- blocage au niveau d'insertion du compte
CREATE OR REPLACE FUNCTION bloque_compte() RETURNS TRIGGER AS
$$
DECLARE
num varchar;
firstnum varchar;
lastnum varchar;
zero varchar;
nb int;
    begin
        SELECT get_compteprimaire(new.numero) into num;
        SELECT substring(new.numero,1,1) into firstnum;
        SELECT substring(new.numero,2) into lastnum;
        SELECT zero(length(lastnum)) into zero;
        SELECT nombre into nb from View_caractereactu;
        if num is null then
            RAISE EXCEPTION 'numero du compte primaire invalide';
        end if;  
        if (firstnum<>'2' and firstnum<>'6' and firstnum<>'7') and lastnum=zero then
            RAISE EXCEPTION 'numero invalide';      
        end if;
        if(length(new.numero)>nb) then
            RAISE EXCEPTION 'nombre de caractere doit etre < %',nb;
        end if;
        RETURN NEW;
    end;
$$
    LANGUAGE plpgsql;


CREATE OR REPLACE TRIGGER bloque_compteT BEFORE INSERT on Compte
FOR EACH ROW EXECUTE FUNCTION bloque_compte();


-- blocage de l'insertion du compte tiers
CREATE OR REPLACE FUNCTION bloque_comptetiers() RETURNS TRIGGER AS
$$
DECLARE
numcompte varchar;
num varchar;
    begin
        SELECT numero into numcompte from Compte where id=new.idcompte;
        SELECT get_compteprimaire(numcompte) into num ;
        if num<>'4'  then
            RAISE EXCEPTION 'numero du compte tiers invalide';
        end if;  
        RETURN NEW;
    end;
$$
    LANGUAGE plpgsql;


CREATE OR REPLACE TRIGGER bloque_comptetiersT BEFORE INSERT on Comptetiers
FOR EACH ROW EXECUTE FUNCTION bloque_comptetiers();

-- blocage de l'insertion ou modification du nombre de caractère de compte
CREATE OR REPLACE FUNCTION bloque_caractere() RETURNS TRIGGER AS
$$
DECLARE
nb int;
    begin
        SELECT nombre into nb from View_caractereactu;
        if nb>new.nombre  then
            RAISE EXCEPTION 'nombre de caractere invalide: veuiller inserer un nombre superieur a %',nb;
        end if;  
        RETURN NEW;
    end;
$$
    LANGUAGE plpgsql;


CREATE OR REPLACE TRIGGER bloque_caractereT BEFORE INSERT OR UPDATE on CaractereCompte
FOR EACH ROW EXECUTE FUNCTION bloque_caractere();


-- après modification ou insertion dans "CaractereCompte"
CREATE OR REPLACE FUNCTION remplir_compte1() RETURNS TRIGGER AS
$$
DECLARE
nb int;
rec record;
    begin
        SELECT nombre into nb from View_caractereactu;
        FOR rec in (SELECT * from Compte) loop
            update compte set numero=numero||zero(nb-length(numero)) where id=rec.id;
            RAISE NOTICE ' updating compte: % with numero: % of nb: %',rec.id,rec.numero,nb;
        end loop;
        RETURN NEW;
    end;
$$
    LANGUAGE plpgsql;


CREATE OR REPLACE TRIGGER remplir_compte1T AFTER INSERT OR UPDATE on CaractereCompte
FOR EACH ROW EXECUTE FUNCTION remplir_compte1();

-- après insertion ou modification dans "Compte"

CREATE OR REPLACE FUNCTION remplir_compte2() RETURNS TRIGGER AS
$$
DECLARE
nb int;
    begin
        SELECT nombre into nb from View_caractereactu;
        if length(new.numero)<nb then
            new.numero:=new.numero||zero(nb-length(new.numero));
        end if;
        RETURN NEW;
    end;
$$
    LANGUAGE plpgsql;


CREATE OR REPLACE TRIGGER remplir_compte2T BEFORE INSERT OR UPDATE on Compte
FOR EACH ROW EXECUTE FUNCTION remplir_compte2();