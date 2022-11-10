<?php

namespace Unialfa\Poo\Infra\Presenters;

use Unialfa\Poo\Domain\Attedance;

class AttedancePresentable
{
    public static function present(Attedance $attedance): string
    {
        return json_encode([
            'client' => [
                'name' => $attedance->getClient()->getName(),
                'lastName' => $attedance->getClient()->getLastName(),
                'cpf' => $attedance->getClient()->getCpf()->__toString(),
                'car' => [
                    'brand' => $attedance->getClient()->getCar()->getBrand(),
                    'model' => $attedance->getClient()->getCar()->getModel(),
                    'year' => $attedance->getClient()->getCar()->getYear(),
                    'color' => $attedance->getClient()->getCar()->getColor(),
                ]
            ],
            'description' => $attedance->getDescription(),
            'value' => $attedance->getValue(),
            'date' => $attedance->getDate()
        ]);
    }
}
