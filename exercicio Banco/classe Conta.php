<?php
    class Conta{
        public $numeroConta;
        private $tipo;
        public $dono;
        private $saldo;
        private $status;
        private $banco;

        public function __construct($name, $type, $bank){
            $this->setDono($name);
            $this->setTipoConta($type);
            $this->setBanco($bank);

            echo "<p>Olá $name, estamos contentes em te receber no banco $bank!!</p>";
            echo "<p>Seu modelo de conta será $type e seu saldo inicial é de 0.</p>";
            echo "<p>Para começar a fazer depósitos solicitamos que abra uma conta.</p><hr>";
        }

        // Numero da conta
        public function getNumeroConta(){
            echo "<p>". $this->numeroConta;
        }
        public function setNumeroConta(){
            $this->numeroConta = mt_rand(000,999).".".mt_rand(000,999).".".mt_rand(000,999)."-".mt_rand(0,9);
        }

        // Tipo da conta
        public function getTipoConta(){
            echo $this->tipo;
        }
        public function setTipoConta($t){
            $this->tipo = $t;
        }

        // Nome do dono da conta
        public function getDono(){
            echo $this->dono;
        }
        public function setDono($name){
            $this->dono = $name;
        }

        // Saldo da conta
        public function getSaldo(){
            echo "<p>Seu saldo atual, $this->dono, é de R$$this->saldo</p>";
        }

        // Status da conta
        public function getStatus(){
            echo "<p>O status atual de sua conta é: ".$this->status;
        }
        public function setStatus($stts){
            $this->status = $stts;
        }

        // Qual o banco?
        public function getBanco(){
            echo $this->banco;
        }
        public function setBanco($b){
            $this->banco = $b;
        }

        public function abrirConta(){
            $this->setStatus('aberta');
            echo "<p>Sua conta foi aberta com sucesso </p>";
            echo "O numero de sua conta é: ". $this->setNumeroConta();
            echo $this->getNumeroConta();
        }

        public function fecharConta(){
            $this->setStatus('Fechada');
            if ($this->saldo > 0) {
                echo "<p>Passe no caixa para retirar o seu saldo de R$$this->saldo antes de fechar a conta!</p>";
            } else if ($this->saldo < 0) {
                echo "<p>Primeiro pague as suas dívidas para conseguir encerrar a conta, ou negocie com um de nossos atendentes.</p>";
            } else {
                echo "<p>$this->dono, sua conta foi fechada com sucesso, não demore muito a retornar</p>";
            }
        }

        public function depositar($money){
            $this->saldo = $this->saldo + $money;
            echo "<p>O valor $money foi depositado!</p>";
        }

        public function sacar($money){
            $this->saldo = $this->saldo - $money;
            echo "<p>Você acaba de sacar R$$money</p>";
        }

        public function pagarMensal($money){
            $this->saldo = $this->saldo - $money;
            echo "A taxa de manutenção no valor de R$$money foi descontada de sua conta.";
        }
    }
?>