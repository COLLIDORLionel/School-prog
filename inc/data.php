<?php

// import des classes
require_once('classes/coreModel.php');
require_once('classes/course.php');
require_once('classes/professor.php');

/* instanciation de la classe Course pour obtenir un nouvel objet
qui sera stocké dans la variable $coursPhp */
$coursPhp = new Course();
$coursPhp->setTitle('Les bases de PHP');
$coursPhp->setImage('cours-php.jpg');
$coursPhp->setShortDescription('Adapté aux débutants');
$coursPhp->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus lacus sit amet diam rhoncus, at congue magna maximus. Pellentesque ultrices vitae magna ut laoreet. Nunc ac sem faucibus, placerat justo sit amet, posuere quam.
Suspendisse potenti. Ut sapien turpis, suscipit tristique enim sit amet, eleifend bibendum leo. Maecenas in quam sed nibh feugiat tristique a et lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.');
$coursPhp->SetProgramContent([
    'Les variables',
    'Les conditions',
    'Les boucles',
    'Les tableaux',
    'Les classes',
    'Interaction avec une base de données'
]);
$coursPhp->setNumberOfHours(70);
$coursPhp->setPrice(790);
$coursPhp->setClassDate('14/03/2022 au 18/03/2022');
$coursPhp->setProfessor('Nicolas R.');
$coursPhp->setModality('A distance');
$coursPhp->setRequiredLevel('Débutant');

/* instanciation de la classe Course pour obtenir un nouvel objet
    qui sera stocké dans la variable $coursGDP */
$coursGDP = new Course();
$coursGDP->setTitle('Gestion de projet');
$coursGDP->setImage('cours-gdp.jpg');
$coursGDP->setShortDescription('Piloter des projets au quotidien');
$coursGDP->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus lacus sit amet diam rhoncus, at congue magna maximus. Pellentesque ultrices vitae magna ut laoreet. Nunc ac sem faucibus, placerat justo sit amet, posuere quam.
Suspendisse potenti. Ut sapien turpis, suscipit tristique enim sit amet, eleifend bibendum leo. Maecenas in quam sed nibh feugiat tristique a et lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.');
/*
$coursGDP->setProgramContent([
    'Cahier des charges',
    'Les méthodes des gestions de projets',
    'Les intervenants',
    'La communication'
]);
*/
$coursGDP->addToProgramContent('Cahier des charges');
$coursGDP->addToProgramContent('Les méthodes des gestions de projets');
$coursGDP->addToProgramContent('Les intervenants');
$coursGDP->addToProgramContent('La communication');


$coursGDP->setNumberOfHours(35);
$coursGDP->setPrice(490);
$coursGDP->setClassDate('sept 2022');
$coursGDP->setProfessor('Nicolas R.');
$coursGDP->setModality('A distance');
$coursGDP->setRequiredLevel('Intermédiaire');

/* instanciation de la classe Course pour obtenir un nouvel objet
    qui sera stocké dans la variable $coursSEO */
$coursSEO = new Course(
    'SEO',
    'cours-seo.jpg',
    'Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus lacus sit amet diam rhoncus, at congue magna maximus. Pellentesque ultrices vitae magna ut laoreet. Nunc ac sem faucibus, placerat justo sit amet, posuere quam.
    Suspendisse potenti. Ut sapien turpis, suscipit tristique enim sit amet, eleifend bibendum leo. Maecenas in quam sed nibh feugiat tristique a et lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    [],
    35,
    490,
    'juin 2023',
    'Pierre C.',
    'Présentiel',
    'Débutant'
);

/* instanciation de la classe Course pour obtenir un nouvel objet
    qui sera stocké dans la variable $coursCM */
$coursCM = new Course(
    'Community manager',
    'cours-community-manager.jpg',
    'Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus lacus sit amet diam rhoncus, at congue magna maximus. Pellentesque ultrices vitae magna ut laoreet. Nunc ac sem faucibus, placerat justo sit amet, posuere quam.
    Suspendisse potenti. Ut sapien turpis, suscipit tristique enim sit amet, eleifend bibendum leo. Maecenas in quam sed nibh feugiat tristique a et lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    [],
    60,
    800,
    'dec. 2022',
    'Pierre C.',
    'Présentiel',
    'Débutant'
);

/* instanciation de la classe Course pour obtenir un nouvel objet
    qui sera stocké dans la variable $coursAdminSys */
$coursAdminSys = new Course(
    'Administrateur système',
    'cours-admin-systeme.jpg',
    'Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus lacus sit amet diam rhoncus, at congue magna maximus. Pellentesque ultrices vitae magna ut laoreet. Nunc ac sem faucibus, placerat justo sit amet, posuere quam.
    Suspendisse potenti. Ut sapien turpis, suscipit tristique enim sit amet, eleifend bibendum leo. Maecenas in quam sed nibh feugiat tristique a et lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    [],
    120,
    2900,
    'nov. 2022',
    'Nicolas R.',
    'A distance et présentiel',
    'Intermédiaire'
);

// liste des cours
$courses = [
    1 => $coursPhp,
    2 => $coursGDP,
    3 => $coursSEO,
    4 => $coursCM,
    5 => $coursAdminSys
];

// Liste des professeurs
$professors = [
    new Professor(1, 'Nicolas', 'Ramel'),
    new Professor(2, 'Pierre', 'Castin'),
    new Professor(3, 'Alexandre', 'Bareau')
];