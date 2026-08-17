<?php

require_once 'Candidatura.php';

$candidaturaTeste = new Candidatura(
    'Ultra Lims',
    'Desenvolvedor',
    '31/02/2026',
    'Entrevista agendada'
);

$erros = DateTimeImmutable::getLastErrors();

var_dump($erros);