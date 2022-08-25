<?php 

interface Personagem {

  public function atacar(Personagem $alvo);
  public function pular();

  }

  interface UsuarioDeMagia extends Personagem {
    public function usarMagia();
  }

  interface UsuarioDeEscudo extends Personagem {
    public function defender();
  }


  
  class Cavaleiro implements Personagem {
    public function atacar(Personagem $alvo) {}
    public function defender() {}
    public function usarMagia() {}
    public function pular() {}
  }
  
  class Arqueiro implements Personagem {
    public function atacar(Personagem $alvo) {}
    public function pular() {}
  }
  
  class Mago implements UsuarioDeMagia, UsuarioDeEscudo {
    public function atacar(Personagem $alvo) {}
    public function defender() {}
    public function usarMagia() {}
    public function pular() {}
  }