<?php

function getCourseOrRedirect($id, $courses) {
    // recherche du cours en fonction de son id (index de notre tableau)
    $course = $courses[$id] ?? null;

    /*
        `??` est l'opérateur **Null coalescent**
        ([documentation](https://www.php.net/manual/fr/migration70.new-features.php#migration70.new-features.null-coalesce-op))
        équivalent à, en ternaire :
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        et à :
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            $id = null;
        }
    */

    // si le cours n'existe pas, on redirige vers la page d'erreur 404
    if (!$course) {
        // envoi d'un header dans la réponse HTTP pour rediriger vers la page 404.php
        header('Location: 404.php');
        exit();
    }

    return $course;
}