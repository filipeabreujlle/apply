<?php

class Candidatura {
   
public function __construct(
    private string $empresa,
    private string $cargo,
    private string $dataCandidatura,
    private string $status
) {
}
}