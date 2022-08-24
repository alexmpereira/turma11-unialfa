<?php

interface AtaquesPadrao {
    public function atacar();
    public function defender();
    public function pular();
}

interface AtaquesMágicos {
    public function usarMagia(AtaquesMágicos $alvo);
}

interface AtaquesArco {
    public function usarArco(AtaquesArco $alvo);
}

interface AtaquesEspada {
  public function usarEspada(AtaquesEspada $alvo);
}

class Cavaleiro implements AtaquesPadrao, AtaquesEspada {
  public function usarEspada(AtaquesEspada $alvo) {}
  public function atacar() {}
  public function defender() {}
  public function pular() {}
}

class Arqueiro implements AtaquesPadrao, AtaquesArco {
  public function usarArco(AtaquesArco $alv) {}
  public function atacar() {}
  public function defender() {}
  public function pular() {}
}

class Mago implements AtaquesPadrao, AtaquesMágicos {
  public function usarMagia(AtaquesMágicos $alvo) {}
  public function atacar() {}
  public function defender() {}
  public function pular() {}
}