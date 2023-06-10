<?php

trait Log {

    public function whriteLog(string $message)
    {
        // Code pour écrire le message dans un fichier de log
    }

    public function erase()
    {
        //supprime tout les logs
    }

    public function rotate()
    {
        //archivage des logs du jours, puis redémarrage à zéro
    } 

}