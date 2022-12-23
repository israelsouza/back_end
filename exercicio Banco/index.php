<?php
    include_once 'classe Conta.php';

    // Instanciando objeto
    $clienteJ = new Conta("Joao", "Conta corrente", "Bradesco", 0);

    // Alteração dos atributos por funçoes
    $clienteJ->abrirConta();
    $clienteJ->depositar(300);
    $clienteJ->getSaldo();
    $clienteJ->depositar(50);
    $clienteJ->getSaldo();
    $clienteJ->sacar(100);
    $clienteJ->getSaldo();
    $clienteJ->pagarMensal(25);
    $clienteJ->getSaldo();
    $clienteJ->sacar(225);
    $clienteJ->getStatus();
    $clienteJ->fecharConta();
?>