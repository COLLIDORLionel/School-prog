<?php

interface Model{
    public function getId();
    public function save();

    public static function findById($id);
}