<?php
class Personnage
{
  // Attributs
  private $_force; // Sa force
  private $_localisation; // Sa localisation
  private $_experience = 0; // Son expérience
  private $_degats = 0; // Ses dégâts

  // Constantes
  const FORCE_PETITE = 20;
  const FORCE_MOYENNE = 50;
  const FORCE_GRANDE = 80;


  // Constructeur
  public function __construct($forceInitiale, $exp)
  {
    $this->setForce($forceInitiale);
    $this->_experience = $exp;
  }
  
  // Getters
  public function getForce()
  {
    return $this->_force;
  }

  public function getLocalisation()
  {
    return $this->_localisation;
  }

  public function getExperience()
  {
    return $this->_experience;
  }

  public function getDegats()
  {
    return $this->_degats;
  }

    // Setters
    public function setForce($force)
    {
      if (in_array($force, [self::FORCE_PETITE, self::FORCE_MOYENNE, self::FORCE_GRANDE]))
      {
        $this->_force = $force;
      }
    }
  
    public function setLocalisation($localisation)
    {
      $this->_localisation = $localisation;
    }
  
    public function setExperience($experience)
    {
      $this->_experience = $experience;
    }
  
    public function setDegats($degats)
    {
      $this->_degats = $degats;
    }

  // Méthodes
    public function ATH($numéro) // Pour afficher les différents éléments du personnage
  {
    echo 'Personnage n°' . $numéro . ' :<br>Expérience = ' . $this->_experience . '<br> Force = ' . $this->_force . '<br> Dégats = ' . $this->_degats . '<br> Localisation = ' . $this->_localisation . '<br>';
  }
  
  public function deplacer() // Pour déplacer le personnage (modifier sa localisation).
  {
    
  }
  
  public function frapper(Personnage $persoAFrapper) // Pour frapper un personnage (suivant la force qu'il a).
  {
    $persoAFrapper->_degats += $this->_force;
  }
  
  public function gagnerExperience() // Pour augmenter l'attribut $experience du personnage.
  {
    $this->_experience = $this->_experience + 1;
  }

  public function parler($numéro) // Pour faire parler le personnage (afficher un texte).
  {
    echo 'Bonjour, je suis le personnage n°' . $numéro . ' !<br>';
  }

}