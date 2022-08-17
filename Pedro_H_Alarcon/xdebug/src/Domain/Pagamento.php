<?php

namespace Unialfa\Phpxdebug\Domain;

class Pagamento
{
    protected string $tipoPagamento;

    public function __construct($tipoPagamento)
    {
        $this->setTipoPagamanto($tipoPagamento["tipoPagamento"]);
    }

    public function imprimePagamento()
    {
        return [
            "tipoPagamento"=> $this->tipoPagamento
        ];
    }

    public function setTipoPagamanto($tipoPagamento)
    {
        $this->tipoPagamento = $tipoPagamento;

        return $this;
    }
}
