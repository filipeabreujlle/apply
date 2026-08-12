<?php

class Candidatura
{

    public function __construct(
        private string $empresa,
        private string $cargo,
        private string $dataCandidatura,
        private string $status
    ) {}

    public function alterarStatus(string $status): void
    {

        if ($status !== 'Aprovado' && $status !== 'Reprovado') {
            throw new InvalidArgumentException('Status inválido.');
        }
        $this->status = $status;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}
