<?php
class Produto
{
    private $nome;
    private $preco;
    private $quantidade;

    public function __construct($nome, $preco, $quantidade)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function getNome()
    {
        $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getPreco()
    {
        $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function adicionarEstoque($qtd)
    {
        $this->quantidade += $qtd;
    }

    public function removerEstoque($qtd)
    {
        $this->quantidade -= $qtd;
    }

    public function mostrarDetalhes()
    {
        echo "Produto: " . $this->nome . "<br>";
        echo "Preço: R$" . $this->preco . "<br>";
        echo "Quantidade em estoque: " . $this->quantidade . "<br>";
    }
}
?>