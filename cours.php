<?php
// inclusion du fichier avec les données
include('inc/data.php');

// inclusion du fichier qui contiendra nos fonctions
include('inc/fonctions.php');

// récupération de l'id du cours
// $_GET est un tableau associatif qui est automatiquement créer par PHP
// Ce tableau contient les valeurs des paramètres transmis dans l'url (query string)
$id = $_GET['id'] ?? null;

// recherche le cours par son id
$course = getCourseOrRedirect($id, $courses);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>School'prog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <?php include_once('inc/menu.tpl.php'); ?>

    <main class="container mb-5">

        <div class="row">
            <div class="col">
                <h1><?= $course->title ?></h1>
            </div>
            <div class="col text-end">
                <span class="badge bg-success"><?= $course->numberOfHours?></span>
                <span class="badge bg-warning"><?= $course->price?></span>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="img/<?= $course->image?>" class="float-start img-fluid" alt="image descriptif du cours <?= $course->title ?>">
            </div>
            <div class="col-12 col-md-6">
                <?= nl2br($course->description); ?>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h2>Le programme</h2>
                <ul>
                    <?php foreach ($course->programContent as $notion) : ?>
                        <li><?= $notion ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h2>Caractéristiques</h2>
                <table class="table table-striped">
                    <tr>
                        <td>Dates</td>
                        <td><?= $course->classDate ?></td>
                    </tr>
                    <tr>
                        <td>Votre prof</td>
                        <td><?= $course->professor ?></td>
                    </tr>
                    <tr>
                        <td>Durée</td>
                        <td><?= $course->numberOfHours ?></td>
                    </tr>
                    <tr>
                        <td>Modalité</td>
                        <td><?= $course->modality ?></td>
                    </tr>
                    <tr>
                        <td>Niveau requis</td>
                        <td><?= $course->requiredLevel ?></td>
                    </tr>
                </table>
            </div>
        </div>

    </main>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>