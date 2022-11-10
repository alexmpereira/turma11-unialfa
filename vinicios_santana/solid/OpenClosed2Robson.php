<?php


//arrumada
class GerenciamentoProjeto
{
  public function process(Membercode $membercode)
  {
    return $membercode->process();
  }
    
}
//solucao minha
interface Membercode
{
  public function process();
}

class Programadores implements Membercode
{
  public function process()
  {
    return 'coding';
  }
}

class Testadores implements Membercode
{
  public function process()
  {
    return 'tester';
  }
}
