<?php

interface AtaquesPadrao {
    public function atacar();
    public function defender();
    public function pular();
}

interface AtaquesMágicos extends AtaquesPadrao {
    public function usarMagia(AtaquesMágicos $alvo);
}

interface AtaquesArco extends AtaquesPadrao{
    public function usarArco(AtaquesArco $alvo);
}

interface AtaquesEspada extends AtaquesPadrao {
  public function usarEspada(AtaquesEspada $alvo);
}

class Cavaleiro implements AtaquesEspada {
  public function usarEspada(AtaquesEspada $alvo) {}
  public function atacar() {}
  public function defender() {}
  public function pular() {}
}

class Arqueiro implements AtaquesArco {
  public function usarArco(AtaquesArco $alvo) {}
  public function atacar() {}
  public function defender() {}
  public function pular() {}
}

class Mago implements AtaquesMágicos {
  public function usarMagia(AtaquesMágicos $alvo) {}
  public function atacar() {}
  public function defender() {}
  public function pular() {}
}