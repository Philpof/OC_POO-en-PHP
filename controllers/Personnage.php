<?php
class Personnage
{
  // Attributs
  private $_id;
  private $_nom;
  private $_force;
  private $_degats;
  private $_niveau;
  private $_experience;

  // Constantes
  const FORCE_PETITE = 20;
  const FORCE_MOYENNE = 50;
  const FORCE_GRANDE = 80;

  // Variables statics privées
  private static $_texteADire = 'Je vais gagner ce combat !<br>';

  // Constructeur
  public function __construct($forceInitiale, $exp)
  {
    $this->setForce($forceInitiale);
    $this->_experience = $exp;
  }
  
  // Getters
  public function getId()
  {
    return $this->_id;
  }

  public function getNom()
  {
    return $this->_nom;
  }

  public function getForce()
  {
    return $this->_force;
  }

  public function getDegats()
  {
    return $this->_degats;
  }

  public function getNiveau()
  {
    return $this->_niveau;
  }

  public function getExperience()
  {
    return $this->_experience;
  }

  // Setters
  public function setId(int $id)
  {
    if ($id > 0)
    {
      $this->_id = $id;
    }
    
  }

  public function setNom(string $nom)
  {
    $this->_nom = $nom;
  }

  public function setForce($force)
  {
    if (in_array($force, [self::FORCE_PETITE, self::FORCE_MOYENNE, self::FORCE_GRANDE]))
    {
      if ($force >= 1 && $force <= 100)
      {
        $this->_force = $force;
      }
      elseif ($force < 1)
      {
        $this->_force = 1;
      }
      else
      {
        $this->_force = 100;
      }
    }
  }

  public function setDegats(int $degats)
  {
    if ($degats >= 1 && $degats <= 100)
    {
      $this->_degats = $degats;
    }
    elseif ($degats < 1)
    {
      $this->_degats = 1;
    }
    else
    {
      $this->_degats = 100;
    }
  }

  public function setNiveau(int $niveau)
  {
    if ($niveau >= 1 && $niveau <= 100)
    {
      $this->_niveau = $niveau;
    }
    elseif ($niveau < 1)
    {
      $this->_niveau = 1;
    }
    else
    {
      $this->_niveau = 100;
    }
  }

  public function setExperience(int $experience)
  {
    if ($experience >= 1 && $experience <= 100)
    {
      $this->_experience = $experience;
    }
    elseif ($experience < 1)
    {
      $this->_experience = 1;
    }
    else
    {
      $this->_experience = 100;
    }
  }

  // Méthodes
    public function ATH($numéro) // Pour afficher les différents éléments du personnage
  {
    echo 'Personnage n°' . $numéro . ' :<br>
      Expérience = ' . $this->_experience . '<br>
      Niveau = ' . $this->_niveau . '<br>
      Force = ' . $this->_force . '<br>
      Dégats = ' . $this->_degats . '<br>';
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

  public static function parler($numéro) // Pour faire parler le personnage (afficher un texte).
  {
    echo 'Bonjour, je suis le personnage n°' . $numéro . ' !<br>';
    echo self::$_texteADire;
  }

}