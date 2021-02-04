<?php
spl_autoload_register('chargerClasseController');

function chargerClasseController($classe)
    {
        require 'controllers/' . $classe . '.php';
    }

