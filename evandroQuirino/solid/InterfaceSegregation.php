<?php

interface Personagem {
  public function atacar(Personagem $alvo);
  public function defender();
  public function pular();
}

interface Magia extends Personagem {
    public function usarMagia();
}

interface Escudo extends Personagem {
    public function usarEscudo();
}


class Cavaleiro implements Personagem {
  public function atacar(Personagem $alvo) {}
  public function defender() {}
  public function pular() {}
  public function usarEscudo(){}
}

class Arqueiro implements Personagem {
  public function atacar(Personagem $alvo) {}
  public function defender() {}
  public function pular() {}
}

class Mago implements Magia, Escudo {
    public function atacar(Personagem $alvo) {}
    public function defender() {}
    public function usarMagia() {}
    public function pular() {}
    public function usarEscudo() {}
}