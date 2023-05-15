<?php

use PHPUnit\Framework\TestCase;

class IdadeCertaTest extends TestCase {

    public function testVerificaIdade() {
        $pessoa = $this->createStub(Pessoa::class);
        $pessoa->method('idade')->willReturn(22);
        $pessoa->method('nome')->willReturn('Vinicius');

        $idadePessoa = $pessoa->idade();
        $idadeEsperada = 22;

        $this->assertSame($idadeEsperada,$idadePessoa);
    }
}