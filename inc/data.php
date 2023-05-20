<?php

// import des classes
require_once('classes/course.php');

/* instanciation de la classe Course pour obtenir un nouvel objet
qui sera stocké dans la variable $coursPhp */
$coursPhp = new Course();
$coursPhp->setTitle('Les bases de PHP');
$coursPhp->image = 'cours-php.jpg';
$coursPhp->shortDescription = 'Adapté aux débutants';
$coursPhp->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus lacus sit amet diam rhoncus, at congue magna maximus. Pellentesque ultrices vitae magna ut laoreet. Nunc ac sem faucibus, placerat justo sit amet, posuere quam.
Suspendisse potenti. Ut sapien turpis, suscipit tristique enim sit amet, eleifend bibendum leo. Maecenas in quam sed nibh feugiat tristique a et lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
$coursPhp->programContent = [
    'Les variables',
    'Les conditions',
    'Les boucles',
    'Les tableaux',
    'Les classes',
    'Interaction avec une base de données'
];
$coursPhp->numberOfHours = 70;
$coursPhp->price = 790;
$coursPhp->classDate = '14/03/2022 au 18/03/2022';
$coursPhp->professor = 'Nicolas R.';
$coursPhp->modality = 'A distance';
$coursPhp->requiredLevel = 'Débutant';

/* instanciation de la classe Course pour obtenir un nouvel objet
    qui sera stocké dans la variable $coursGDP */
$coursGDP = new Course();
$coursGDP->title = 'Gestion de projet';
$coursGDP->image = 'cours-gdp.jpg';
$coursGDP->shortDescription = 'Piloter des projets au quotidien';
$coursGDP->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus lacus sit amet diam rhoncus, at congue magna maximus. Pellentesque ultrices vitae magna ut laoreet. Nunc ac sem faucibus, placerat justo sit amet, posuere quam.
Suspendisse potenti. Ut sapien turpis, suscipit tristique enim sit amet, eleifend bibendum leo. Maecenas in quam sed nibh feugiat tristique a et lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
$coursGDP->programContent = [
    'Cahier des charges',
    'Les méthodes des gestions de projets',
    'Les intervenants',
    'La communication'
];
$coursGDP->numberOfHours = 35;
$coursGDP->price = 490;
$coursGDP->classDate = 'sept 2022';
$coursGDP->professor = 'Nicolas R.';
$coursGDP->modality = 'A distance';
$coursGDP->requiredLevel = 'Intermédiaire';

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