<?php

require_once 'Candidatura.php';

$candidaturaTeste = new Candidatura(
    'Ultra Lims',
    'Desenvolvedor',
    '17/08/2026',
    'Entrevista agendada'
);

var_dump($candidaturaTeste);