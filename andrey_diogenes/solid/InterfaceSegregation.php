<?php

interface Personagem
{
    public function correr();
    public function pular();
}

interface PersonagemComMana extends Personagem{
    public function usarMagia();
    public function usarMagiaDeAtaque(PersonagemComMana $alvo);
    public function usarMagiaDeDefesa();
    public function usarMagiaDeVoo();
}

interface PersonagemSemMana extends Personagem{
    public function atacar(PersonagemSemMana $alvo);
    public function defender();
    public function correrRapido();
}
  
  class Cavaleiro implements PersonagemSemMana {
    public function atacar(PersonagemSemMana $alvo) {}
    public function defender() {}
    public function usarMagia() {}
    public function correr() {}
    public function correrRapido() {}
    public function pular() {}
  }
  
  class Arqueiro implements PersonagemSemMana {
    public function atacar(PersonagemSemMana $alvo) {}
    public function defender() {}
    public function usarMagia() {}
    public function correr() {}
    public function correrRapido() {}
    public function pular() {}
  }
  
  class Mago implements PersonagemComMana {
    public function usarMagia() {}
    public function usarMagiaDeAtaque(PersonagemComMana $alvo) {}
    public function usarMagiaDeDefesa() {}
    public function usarMagiaDeVoo() {}
    public function correr() {}
    public function pular() {}
  }