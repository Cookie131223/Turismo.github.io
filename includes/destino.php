<?php
class Destino {
    private $nome;
    private $pais;
    private $descricao;
    private $preco;
    private $imagem;

    public function __construct($nome, $pais, $descricao, $preco, $imagem) {
        $this->nome = $nome;
        $this->pais = $pais;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->imagem = $imagem;
    }

    public function mostrarCard() {
        $precoFormatado = number_format($this->preco, 2, ',', '.');
        return '
        <div class="card-destino">
            <img src="'.$this->imagem.'" alt="'.$this->nome.'">
            <div class="card-content">
                <h3>'.$this->nome.', '.$this->pais.'</h3>
                <p>'.$this->descricao.'</p>
                <div class="preco">R$ '.$precoFormatado.'</div>
                <button class="btn-reserva">Reservar</button>
            </div>
        </div>';
    }
}
?>