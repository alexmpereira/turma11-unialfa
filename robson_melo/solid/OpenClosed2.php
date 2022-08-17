<?php

interface Trabalhavel
{
    public function work();
}


class Programador implements Trabalhavel
{
    public function work()
    {
        return 'coding';
    }
}

class Tester implements Trabalhavel
{
    public function work()
    {
        return 'testing';
    }
}

class GerenciamentoProjeto
{
    public function process(Trabalhavel $member)
    {
       return $member->work();
    }

    
}