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
    private DateTimeImmutable $dataCandidatura;

    public function __construct(
        private string $empresa,
        private string $cargo,
        string $dataCandidatura,
        string $status   
    ) {
        $this->alterarStatus($status);

       $data = DateTimeImmutable::createFromFormat(
            'd/m/Y',
            $dataCandidatura
        );

        if (!($data instanceof DateTimeImmutable)){
            throw new InvalidArgumentException('Data inválida.');
        }

        $this->dataCandidatura = $data;
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
