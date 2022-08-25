<?php

interface PersonagemBase {
  public function atacar();
  public function defender();
  public function pular();
}

interface PersonagemMago extends PersonagemBase {
   
    public function usarMagia();
    
  }

  interface PersonagemFighter {
    public function atacar();
    public function usarFlecha();
    
  }


class Cavaleiro implements PersonagemBase {
  public function atacar(PersonagemBase $alvo) {}
 
}

class Arqueiro implements PersonagemFighter {
  public function atacar(PersonagemFighter $alvo) {}
  public function usarFlecha(){}

}

class Mago implements PersonagemMago {
  public function atacar(PersonagemMago $alvo) {}
  public function usarMagia() {}
 
}3