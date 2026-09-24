<?php

class RekeningBank
{
    private string $nomorRekening;
    private string $pemilikRekening;
    private float $saldo;

    public function __construct(
        string $nomorRekening,
        string $pemilikRekening,
        float $saldo
    ) {
        if ($saldo < 0) {
            throw new InvalidArgumentException("Saldo tidak boleh negatif.");
        }

        $this->nomorRekening = $nomorRekening;
        $this->pemilikRekening = $pemilikRekening;
        $this->saldo = $saldo;
    }

    public function getNomorRekening(): string
    {
        return $this->nomorRekening;
    }

    public function getPemilikRekening(): string
    {
        return $this->pemilikRekening;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function setor(float $jumlah): void
    {
        if ($jumlah <= 0) {
            throw new InvalidArgumentException(
                "Jumlah setor harus lebih dari 0."
            );
        }

        $this->saldo += $jumlah;
    }

    public function tarik(float $jumlah): void
    {
        if ($jumlah <= 0) {
            throw new InvalidArgumentException(
                "Jumlah tarik harus lebih dari 0."
            );
        }

        if ($jumlah > $this->saldo) {
            throw new InvalidArgumentException(
                "Saldo tidak mencukupi."
            );
        }

        $this->saldo -= $jumlah;
    }
}
