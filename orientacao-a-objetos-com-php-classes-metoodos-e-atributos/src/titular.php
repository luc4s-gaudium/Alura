<?php
class Titular
{
    private string $cpfTitular;
    private string $nomeTitular;

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        $this->cpfTitular = $cpfTitular;
        $this->nomeTitular = $nomeTitular;
    }


    function recuperaCpf()
    {
        return $this->nomeTitular;
    }
    function recuperaNome()
    {
        return $this->cpfTitular;
    }
}
