## Readme de Loic Darras (Licence pro projet Web et Mobile)

- Lien github : https://github.com/loicD77/ControleSymfony
- Entités crées : (ordre conseillé)
   - User : Seulement code de controller et entity
   - Ressource: Seulement code de controller et entity
   - Message : Seulement code de controller et entity
   -  Parcours: Seulement code de controller et entity
   -  Etape : Seulement code de controller et entity
   -  Rendu : Seulement code de controller et entity
   -  Sécurité : Seulement code de controller et entity
   -  Authentification : code (controller et twig)
   -  Enregistrement: code seulement
   - Seul un conseiller peut créer un parcours, une étape, une ressource : NON
   - Seul un conseiller peut se déclarer accompagnant d’un candidat: NON


- CRUD 
  - J'ai réussi à créer 3 crud avec la commande php bin/console make:crud **X** mais sans regarder je connaissais la commande mais décortiquer les fichiers n'a pas était fais.



- Dépôt d’un message : (Tout ceci n'a pas été fais)
  - L’émetteur d’un message est le user connecté est le user connecté
  - Tableau de bord d’un parcours
  - Un parcours doit présenter ses étapes
   - Une étape doit présenter ses ressources associées avec un lien pour les télécharger
   - Une étape doit présenter la dernière version du rendu du user connecté associé à cette étape
   - Un mini formulaire doit permettre le dépôt d’un rendu
   - Si un message est associé à un rendu, un lien vers ce message est proposé
   - Le parcours affiché est un parcours as


   ## Tentative BDD

   ![bdd](../assets/bdd.png "bdd")


   - J'ai essayé de créer des tables dans une BDD mais n'ayant pas eu le reflexe et le courage de réinstaller Wampserver j'ai raté.
