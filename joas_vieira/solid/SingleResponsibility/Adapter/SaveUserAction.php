<?php

class SaveUserAction
{
    protected function handle(string $name, string $cpf, int $age): array
    {
        $input = [
            'name' => $name,
            'cpf' => $cpf,
            'age' => $age,
        ];

        $createUser = new SaveUserUseCase($input);
        return [];
    }
}
