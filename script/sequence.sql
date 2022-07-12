-- Sequence teste
CREATE SEQUENCE teste;

-- Journal
CREATE SEQUENCE public.seq_journal
    INCREMENT 1
    START 1;


-- exercice
CREATE SEQUENCE public.seq_exercice
    INCREMENT 1
    START 1;


-- compteprimaire
CREATE SEQUENCE public.seq_compteprimaire
    INCREMENT 1
    START 1;


-- compte
CREATE SEQUENCE public.seq_compte
    INCREMENT 1
    START 1;


    
-- caracterecompte
CREATE SEQUENCE public.seq_caracterecompte
    INCREMENT 1
    START 1;



-- tiers
CREATE SEQUENCE public.seq_tiers
    INCREMENT 1
    START 1;



-- comptetiers
CREATE SEQUENCE public.seq_comptetiers
    INCREMENT 1
    START 1;


-- ecriture
CREATE SEQUENCE public.seq_ecriture
    INCREMENT 1
    START 1;


-- defaultecriture
CREATE SEQUENCE public.seq_defaultecriture
    INCREMENT 1
    START 1;


-- defaultjournal
CREATE SEQUENCE public.seq_defaultjournal
    INCREMENT 1
    START 1;


-- TypeDevise
CREATE SEQUENCE public.seq_typedevise
    INCREMENT 1
    START 1;


-- Devise
CREATE SEQUENCE public.seq_devise
    INCREMENT 1
    START 1;



ALTER SEQUENCE public.seq_journal
    OWNER TO project;

ALTER SEQUENCE public.seq_exercice
    OWNER TO project;

ALTER SEQUENCE public.seq_compteprimaire
    OWNER TO project;

ALTER SEQUENCE public.seq_compte
    OWNER TO project;

ALTER SEQUENCE public.seq_caracterecompte
    OWNER TO project;

ALTER SEQUENCE public.seq_tiers
    OWNER TO project;

ALTER SEQUENCE public.seq_comptetiers
    OWNER TO project;
    
ALTER SEQUENCE public.seq_ecriture
    OWNER TO project;

ALTER SEQUENCE public.seq_defaultecriture
    OWNER TO project;

ALTER SEQUENCE public.seq_defaultjournal
    OWNER TO project;

ALTER SEQUENCE public.seq_typedevise
    OWNER TO project;

ALTER SEQUENCE public.seq_devise
    OWNER TO project;