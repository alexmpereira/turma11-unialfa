<?php

class SaveUserAction
{
    protected function handle(string $name, string $cpf, int $page):array
    {
        $input = [
            "name" => $name,
            "cpf" => $cpf,
            "age" => $page
        ];

        $createUser = new SaveUserUseCase($input);

        return [];
    }
}