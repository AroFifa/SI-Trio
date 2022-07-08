#   DATABASE
*   création table
    -   Ammmortissement (id,idecriture,montant)
        -   trigger: bloquer si num_compte != 2...
    -   Provision(id,idecriture,montant)
*   création vue:
    -   View_amorissement
        - groupé par compte
    -   View_provision
        - groupé par compte
    
#   METIER
*   Créer fonctions
    -   getAmortissement(idexo,num_compte,...)   
    -   getProvision(idexo,num_compte,...)   
    -   get_ValeurNet_Amorti(brut,montant_amorti,date)
    -   get_ValeurNet_Prov(brut,montant_provision,date)
    -   get_ValeurNet(brut,montant_amorti,montant_provision,date)

    -   get_depreciation(idexo,num_compte,date1,date2)
        -  > de préférence retourner objet(idexo,num_compte,brut,amortissement/provision,net(date1),net(date2))

    -   get_listeDepreciation(idexo,date1,date2)
        -   retourner liste
            -   intitulé compte + numéro ( `à 2 unités seulement`)
            -   Valeur brut
            -   Valeur amortissement
            -   Valeur provision
            -   Valeur net date1
            -   Valeur net date2

    
    -   getListe_resultat(idexo) `ou utiliser une vue depuis la base de donnée`
        -   retourner liste
            -   intitulé
            -   num_compte
            -   ...
            -   somme totale

#   JS/Affichage
*   ajouter une insertion d'amortissement dans l'écriture si compte == 2...
    -   compte `28`
*   ajouter un bouton pour insérer les provisions pour toute les comptes
    -   click on button -> Add input  (ajouter dans le comtpe `1stCharacter`.9)
*   enregistrer et lier ces valeurs aux écritures correspondants 