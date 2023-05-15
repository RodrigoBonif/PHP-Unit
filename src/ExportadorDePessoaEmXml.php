<?php

class ExportadorDePessoaEmXml {

    public function __construct(
        private Pessoa $pessoa
    )
    {}
    public function exportaEmXml(): string {
        return "<pessoa><nome>{$this->pessoa->nome()}</nome><idade>{$this->pessoa->idade()}</idade></pessoa>";
    }
}