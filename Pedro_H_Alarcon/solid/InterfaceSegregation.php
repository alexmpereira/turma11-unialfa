<?php

interface Personagem {
  public function atacar(Personagem $alvo);  
  public function pular();
}

interface UsuarioMagia extends Personagem
{
    public function usarMagia();
}

interface UsuarioDefesa extends Personagem
{
    public function defender();
}

class Cavaleiro implements UsuarioDefesa {
  public function atacar(Personagem $alvo) {}
  public function defender() {}
  public function pular() {}
}

class Arqueiro implements UsuarioDefesa{
  public function atacar(Personagem $alvo) {}
  public function defender() {}
  public function pular() {}
}

class Mago implements UsuarioMagia, UsuarioDefesa {
  public function atacar(Personagem $alvo) {}
  public function defender() {}
  public function usarMagia() {}
  public function pular() {}
}