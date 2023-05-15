<?php

class Pessoa {
    public function __construct(
        public string $nome,
        public DateTimeImmutable $dataNascimento
    )
    {}
    public function nome(): string {
        return $this->nome;
    }
    public function idade(): int {
        $hoje = new DateTimeImmutable();
        $diferenca = $this->dataNascimento->diff($hoje);

        return $diferenca->y;
    }
}