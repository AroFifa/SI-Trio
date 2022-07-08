##  Métier
*   Fonction pour prendre la liste des:
        -   Actifs non courants: `get_actifs_nonCourants()`
        -   Actifs courants: `get_actifs_courants()`
        -   Capitaux propres: `get_capitaux()`
        -   Passifs non courants: `get_passifs_nonCourants()`
        -   Passifs courants: `get_actifs_courants()`

*   Fonction pour lister les comptes de résultat par catégorie (avec le montant)

*   Fonction pour calculer les comptes de résultat
    -   insérer dans compte 128: `cumul des résultats (exo N-1)`
    -   insérer dans compte 121: `résultat de l'exo actuel`

*   Fonction pour prendre les valeurs brut,d'amortissement et de provision d'un compte
    -   `get_valeurBrut(num_compte)`
    -   `get_valeurAmortissement(num_compte)`
    -   `get_valeurProvision(num_compte)`
        -   amortisssements: compte 28
        -   provisions: compte .9
        -   > Ny Fomba Fampidirana an'ireo compte ireo mihitsy no tsy azoko:
            -   > il faut équilibrer aussi ces comptes ??
            -   > comment les lier à une seule compte ??

*   Fonction pour calculer amortissements et provisions d'un compte à une date donnée: `get_valeurNet_amorti(num_compte,amortissement,date)`/`get_valeurNet_prov(num_compte,provision,date)`
    -   pour le calcul des amortissements: dépendant du date de l'écriture
        -   > comment obtenier la valeur net de l'ensemble de ces écritures à une date donnée

##  Affichage
*   créer menu `Etat-financier`
    *   page pour les bilans
        -   date fin de l'exercice
        -   get_actifs_nonCourants()
        -   get_actifs_courants()
        -   get_capitaux()
        -   get_passifs_nonCourants()
        -   get_actifs_courants()

            -   get_valeurBrut(num_compte)
            -   get_valeurAmortissement(num_compte)
            -   get_valeurProvision(num_compte)
            -   get_valeurNet...(num_compte,...,date)

    *   page pour les comptes de résultats par catégorie
        -   lister les comptes 7
        -   lister les comptes 6

*   Générer PDF de ce document