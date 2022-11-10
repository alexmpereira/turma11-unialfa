<?php

interface Personagem {
  public function atacar(Personagem $alvo);  
  public function pular();
}

interface Magia extends Personagem
{
    public function usarMagia();
}

interface Defesa extends Personagem
{
    public function defender();
}

class Cavaleiro implements Defesa {
  public function atacar(Personagem $alvo) {}
  public function defender() {}
  public function pular() {}
}

class Arqueiro implements Defesa {
  public function atacar(Personagem $alvo) {}
  public function defender() {}
  public function pular() {}
}

class Mago implements Magia, Defesa {
  public function atacar(Personagem $alvo) {}
  public function defender() {}
  public function usarMagia() {}
  public function pular() {}
}