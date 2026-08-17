<?php

class Candidatura
{

    private const STATUS_PERMITIDOS = [
        'Candidatura enviada',
        'Entrevista agendada',
        'Teste técnico',
        'Aprovado',
        'Reprovado'
    ];

    private string $status;

    public function __construct(
        private string $empresa,
        private string $cargo,
        private string $dataCandidatura,
        string $status   
    ) {
        $this->alterarStatus($status);
    }

    public function alterarStatus(string $status): void
    {

        if (!in_array($status, self::STATUS_PERMITIDOS, true)) {
            throw new InvalidArgumentException('Status inválido.');
        }
        $this->status = $status;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}
