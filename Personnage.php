<?php
class Personnage
{
  private $_force;        // La force du personnage
  private $_localisation; // Sa localisation
  private $_experience;   // Son expérience
  private $_degats;       // Ses dégâts
  
  public function deplacer() // Une méthode qui déplacera le personnage (modifiera sa localisation).
  {

  }
  
  public function frapper() // Une méthode qui frappera un personnage (suivant la force qu'il a).
  {

  }
  
  public function gagnerExperience() // Une méthode augmentant l'attribut $experience du personnage.
  {

  }

  public function parler() // Une méthode pour faire parler le personnage (afficher un texte).
  {
    echo 'Je suis un personnage !';
  }
}