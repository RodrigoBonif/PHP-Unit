<?php

use PHPUnit\Framework\TestCase;

class SegurancaBaladaTest extends TestCase {
    // Arrange
    public function testSegurancaDeveDeixarEntrar() {
        $pessoa = $this->createStub(Pessoa::class);
        $pessoa->method('nome')->willReturn('Vinicius');
        $pessoa->method('idade')->willReturn(22);

        $seguranca = new SegurancaBalada();
        
        // Act
        $deixouPessoaEntrar = $seguranca->deixaEntrar($pessoa);

        // Assert
        $this->assertTrue($deixouPessoaEntrar);

    }
}