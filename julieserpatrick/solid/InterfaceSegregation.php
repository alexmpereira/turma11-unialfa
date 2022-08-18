<?php

interface PersonagemBase {
  public function atacar(PersonagemBase $alvo);
  public function defender();
  public function pular();
}

interface PersonagemMago {
    public function atacar(PersonagemMago $alvo);
    public function defender();
    public function usarMagia();
    public function pular();
  }

  interface PersonagemFighter {
    public function atacar(PersonagemFighter $alvo);
    public function defender();
    public function usarFlecha();
    public function pular();
  }


class Cavaleiro implements PersonagemBase {
  public function atacar(PersonagemBase $alvo) {}
  public function defender() {}
  public function pular() {}
}

class Arqueiro implements PersonagemFighter {
  public function atacar(PersonagemFighter $alvo) {}
  public function defender() {}
  public function usarFlecha(){}
  public function pular() {}
}

class Mago implements PersonagemMago {
  public function atacar(PersonagemMago $alvo) {}
  public function defender() {}
  public function usarMagia() {}
  public function pular() {}
}