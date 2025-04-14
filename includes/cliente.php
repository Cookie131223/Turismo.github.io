<?php
class Cliente {
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $cpf;
    private $telefone;
    private $endereco;
    private $reservas = [];

    public function __construct($nome, $email, $senha, $cpf, $telefone) {
        $this->nome = htmlspecialchars($nome, ENT_QUOTES, 'UTF-8');
        $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $this->senha = $this->hashSenha($senha);
        $this->cpf = preg_replace('/[^0-9]/', '', $cpf);
        $this->telefone = preg_replace('/[^0-9]/', '', $telefone);
    }

    private function hashSenha($senha) {
        return password_hash($senha, PASSWORD_BCRYPT);
    }

    public function autenticar($senha) {
        return password_verify($senha, $this->senha);
    }

    public function adicionarReserva($reserva) {
        $this->reservas[] = $reserva;
    }

    // Getters
    public function getId() { return $this->id; }
    public function getNome() { return $this->nome; }
    public function getEmail() { return $this->email; }
    public function getCpf() { return $this->cpf; }
    public function getTelefone() { return $this->telefone; }
    public function getReservas() { return $this->reservas; }

    // Setters com validação
    public function setEndereco($endereco) {
        $this->endereco = htmlspecialchars($endereco, ENT_QUOTES, 'UTF-8');
    }
}
?>