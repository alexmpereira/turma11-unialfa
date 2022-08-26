<?php

interface Personagem
{
  /*
    O método correr faz o Personagem correr, todos personagens pode correr.
    O método pular faz o Personagem pular, todos personagens podem pular.
  */
    public function correr();
    public function pular();
}

interface PersonagemComMana extends Personagem {
  /*
    O método usarMagia faz o Personagem usar magia, apenas personagens com mana poderão usar.
    O método usarMagiaDeAtaque faz o Personagem usar magia para atacar, apenas personagens com mana poderão usar.
    O método usarMagiaDeDefesa faz o Personagem usar magia para defender, apenas personagens com mana poderão usar.
  */
    public function usarMagia();
    public function usarMagiaDeAtaque(PersonagemComMana $alvo);
    public function usarMagiaDeDefesa();
    public function usarMagiaDeVoo();
}

interface PersonagemSemMana extends Personagem {
  /*
    O método atacar faz o Personagem usar atacar usando sua arma, apenas personagens com armas fisicas(espadas, flexas, escudo, lança) poderão usar(magos não utilizam).
    O método defender faz o Personagem usar se defender, apenas personagens com escudo ou outra arma fisica poderão usar(magos não utilizam).
    O método correrRapido faz o Personagem correr mais rápido, os magos não podem utilizar por terem baixa estamina.
  */
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