
--  SELECT EXTRACT(MONTH FROM debut) moisD,EXTRACT(YEAR FROM debut) anneeD,
--  EXTRACT(MONTH FROM Fin) moisF,EXTRACT(YEAR FROM Fin) anneeD from Exercice;


-- View caractère actuelle
CREATE OR REPLACE VIEW View_caractereactu AS
select * from CaractereCompte where dateheure < (CURRENT_DATE + '1 day'::interval) order by dateheure desc limit 1;

--  View_ecriture
CREATE OR REPLACE VIEW View_ecriture AS
SELECT e.*,t.numero numero_tiers,t.nom nom_tiers,c.numero numero_compte,c.intitule,getdate(exo.debut,exo.fin,e.jour,e.mois) date from Tiers t 
right join Ecriture e on t.id=e.idtiers 
left join Compte c on c.id=e.idcompte join Exercice exo on e.idexercice=exo.id;

--VIEW grand_livre
CREATE OR REPLACE VIEW v_grand_livre as
select max(getdate(debut,fin,jour,mois)) date,annee,Exercice.id idexercice,debut,fin,numero,intitule,
sum(debit) mvd,sum(credit) mvc,
CASE
    WHEN sum(debit)<sum(credit) THEN sum(credit)-sum(debit)
    ELSE 0::money
END
crediteur,
CASE
    WHEN sum(debit)>sum(credit) THEN sum(debit)-sum(credit)
    ELSE 0::money
END
debiteur
from ecriture
join Exercice on Exercice.id = ecriture.idexercice
join Compte on ecriture.idcompte = compte.id
group by numero,intitule,annee,debut,fin,Exercice.id;

-- VIEW v_mouvement
CREATE OR REPLACE VIEW v_mouvement as
select getdate(debut,fin,jour,mois) date,
debut,fin,journal.libelle code_journal,Tiers.numero num_tiers,Tiers.nom nom_tiers,refpiece,jour,mois,
compte.numero num_compte, compte.intitule intitule,ecriture.libelle,debit,credit,Exercice.id idexo
from ecriture
join Exercice on Exercice.id = ecriture.idexercice
join Compte on ecriture.idcompte = compte.id
join journal on journal.id = ecriture.idjournal
left join Tiers on Tiers.id = ecriture.idtiers;


-- Historique de devise
CREATE OR REPLACE VIEW HistoriqueDevise as
Select td.id,e.mois,e.jour,e.numero_compte,e.numero_tiers,e.debit,e.credit,td.Nom devise,d.taux,
CASE
    when e.debit> 0::money then
        (e.debit::decimal(18,2)/d.taux::decimal(18,2))::decimal(18,2)
    when e.credit > 0::money then
        (e.credit::decimal(18,2)/d.taux::decimal(18,2))::decimal(18,2)
    end prixdevise
from Devise d
join TypeDevise td on td.id = d.idtype 
join View_ecriture e on e.id = d.idecriture;

-- View compte_tiers
CREATE OR REPLACE VIEW View_comptetiers AS
SELECT t.id,t.numero identifiant,t.nom,ct.idcompte,c.numero,c.intitule from Tiers t left join Comptetiers ct on t.id=ct.idtiers
left join Compte c on c.id=ct.idcompte;


-- View_balance
CREATE OR REPLACE VIEW View_balance AS
SELECT v.*,SUM(debiteur) OVER (PARTITION BY v.*) solde_debit,SUM(crediteur) OVER (PARTITION BY v.*) solde_credit
from v_grand_livre  v;

-- View_grandlivre
CREATE OR REPLACE VIEW View_grandlivre AS
SELECT v.*,SUM(v.debit) OVER (PARTITION BY v.*) mvd,SUM(v.credit) OVER (PARTITION BY v.*) mvc from v_mouvement v;


-- Teste view_balances

-- CREATE OR REPLACE VIEW view_balance as
-- select max(getdate(debut,fin,jour,mois)) date,annee,Exercice.id idexercice,debut,fin,numero,intitule,
-- sum(debit) mvd,sum(credit) mvc,
-- CASE
--     WHEN sum(debit)<sum(credit) THEN sum(credit)-sum(debit)
--     ELSE 0::money
-- END
-- crediteur,
-- CASE
--     WHEN sum(debit)>sum(credit) THEN sum(debit)-sum(credit)
--     ELSE 0::money
-- END
-- debiteur
-- from ecriture
-- join Exercice on Exercice.id = ecriture.idexercice
-- join Compte on ecriture.idcompte = compte.id
-- where getdate(debut,fin,jour,mois)<'2012-12-31'
-- group by numero,intitule,annee,debut,fin,Exercice.id;



-- View_bilan
-- View_actifs_nonCourants
CREATE OR REPLACE View View_actifs_nonCourants AS 
SELECT num_compte,intitule,debit::decimal(18,2) montant,idexo from View_grandlivre where num_compte like '13%' or num_compte like '2%' and num_compte not like '28%' and num_compte not like  '29%' order by num_compte ASC;

-- View_actifs_courants
CREATE OR REPLACE View View_actifs_courants AS 
SELECT num_compte,intitule,debit::decimal(18,2) montant,idexo from View_grandlivre where debit!=0::money and ((num_compte like '4%' and num_compte not like '49%'  ) or (num_compte like '5%' and num_compte not like '59%')) or (num_compte like '3%' and num_compte not like '39%') order by num_compte ASC;

-- View_capitaux
CREATE OR REPLACE View View_capitaux AS 
SELECT num_compte,intitule,credit::decimal(18,2) montant,idexo from View_grandlivre where credit!=0::money and (num_compte like '1%' and (num_compte not like '13%' and num_compte not like '16%')  ) order by num_compte ASC;

-- View_passifs_nonCourants
CREATE OR REPLACE View View_passifs_nonCourants AS 
SELECT num_compte,intitule,credit::decimal(18,2) montant,idexo from View_grandlivre where credit!=0::money and (num_compte like '28%' or num_compte like '_9%') order by num_compte ASC;

-- View_passifs_courants
CREATE OR REPLACE View View_passifs_courants AS 
SELECT num_compte,intitule,credit::decimal(18,2) montant,idexo from View_grandlivre where credit!=0::money and ((num_compte like '4%' and num_compte not like '49%'  ) or (num_compte like '5%' and num_compte not like '59%')) or num_compte like '16%' order by num_compte ASC;
