# School'Prog
School'prog est notre projet fil rouge pour mettre en pratique les connaissances de la base de php aqcuises durant la formation O'Clock.

## Étapes réalisées

- Réaliser l'intégration avec [Bootstrap 5.1] (Réalisation des pages en pensant mobile first).
- Dynamiser la liste des cours sur la page d'accueil ainsi que la page d'information d'un cours avec du [PHP 7.4].
- Passage en POO :
   - Modification de la visibilité des propriétés de la classe.
   - Ajout des getters et setters manquants.
   - Sécurisation des données de notre objet. Pour cela, on modifiee les setters afin de verifier les données qui sont injectées dans notre objet.
   - Ajout de la méthode `addToProgramContent` qui va ajouter des éléments dans la propriété : `$programContent`.
- Héritage et abstraction :
   - Ajout classe CoreModel pour gérer les propriétés communes
   - Ajout classe professeur
   - utilisation propriétés communes dans l'ensemble des classes
- Interfaces:
   - Ajout interface model pour obliger l'implémentation des methode getId et save
   - Ajout interface dateManager pour obliger l'implémentation des methode getDateCreated et getDateUpdated
- Traits
   - Ajout trait log
   - Utilisation trait dans autres classes
- Ajout PDO
   - Ajout ficher sql pour création des tables
   - Ajout classe db pour utiliser la bdd
   - Ajout méthode findById dans interface model
   - 


[//]: # (les Liens utilisés dans l'ensemble du document sont tous listés ici.)

   [Bootstrap 5.1]: <https://getbootstrap.com/docs/5.1/getting-started/introduction/>
   [PHP 7.4]: <https://www.php.net/manual/en/>