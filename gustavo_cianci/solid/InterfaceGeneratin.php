<?php

interface Personagem {
    public function atacar(Personagem $alvo);
    public function pular();
}

interface PersonagemDiferentao extends Personagem
{
    public function usarMagia();
}

interface PersonagemDiferentaoQueDefende extends Personagem
{
    public function defender();
}
  
  class Cavaleiro implements PersonagemDiferentaoQueDefende {
    public function atacar(Personagem $alvo) {}
    public function defender() {}
    public function pular() {}
  }
  
  class Arqueiro implements Personagem {
    public function atacar(Personagem $alvo) {}
    public function pular() {}
  }
  
  class Mago implements PersonagemDiferentao {
    public function atacar(Personagem $alvo) {}
    public function usarMagia() {}
    public function pular() {}
  }