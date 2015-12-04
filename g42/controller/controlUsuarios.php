<?php

class User{
  private $login;
  private $name;
  private $email;
  private $pass;
  private $tipo;

  public function _construct($login=NULL, $name=NULL, $email=NULL, $pass=NULL, $tipo=NULL){
    this->login=$login;
    this->name=$name;
    this->email=$email;
    this->pass=$pass;
    this->tipo=$tipo;
  }

  public function getLogin() {
    return $this->login;
  }
  public function setLogin($login) {
    $this->login = $login;
  }

  public function getName() {
    return $this->name;
  }
  public function setName($name) {
    $this->name = $name;
  }

  public function getEmail() {
    return $this->email;
  }
  public function setEmail($email) {
    $this->email = $email;
  }

  public function getPass() {
    return $this->pass;
  }
  public function setPass($pass) {
    $this->pass = $pass;
  }

  public function getTipo() {
    return $this->tipo;
  }
  public function setTipo($tipo) {
    $this->tipo = $tipo;
  }

  /* Comprueba si el usuario actual es válido para registrarse en la base de datos,si no lo es devuelve un mensaje por cada tipo de error encontrado */
  public function checkIsValidForRegisterPop($pass2) {

    $errors = array();//Se inializa un array errors con los distintos errores que posteriormente serán mostrados si estos se producen
    /*Error de longitud en el email*/
    if (strlen($this->login) < 3) {
      $errors["login"] = "El login debe contener al menos 3 caracteres de longitud";
    }
    /*Error en la eleccion del tipo de usuario*/
    if (strlen($this->name) < 3) {
      $errors["name"] = "El nombre debe contener al menos 3 caracteres de longitud";
    }
    if (strlen($this->email) < 6) {
      $errors["email"] = "El email debe contener al menos 6 caracteres de longitud";
    }
    /*Error de longitud de la contraseña*/
    if (strlen($this->pass) < 5) {
      $errors["pass"] = "La contraseña debe contener al menos 5 caracteres de longitud";
    }
    /*Error que se produce cuando la contraseña y la contraseña repetida tienen valores diferentes*/
    if ($this->pass != $pass2) {
      $errors["pass2"] = "Las contraseñas no coinciden";
    }
    /*Si hay algún error en las anteriores comprobaciones muestra un mensaje*/
    if (sizeof($errors)>0){
      throw new ValidationException($errors, "El usuario no es válido");
    }

    /* Comprueba si la modificacion del Jurado Popular es válida,si no lo es devuelve un mensaje por cada tipo de error encontrado */
    public function checkIsValidForModificacionPop($pass2) {

      $errors = array(); //Se inializa un array errors con los distintos errores que posteriormente serán mostrados si estos se producen

      if (strlen($this->email) < 6) {
        $errors["email"] = "El email debe contener al menos 6 caracteres de longitud";
      }
      /*Error de longitud de la contraseña*/
      if (strlen($this->pass) < 5) {
        $errors["pass"] = "La contraseña debe contener al menos 5 caracteres de longitud";
      }
      /*Error que se produce cuando la contraseña y la contraseña repetida tienen valores diferentes*/
      if ($this->pass != $pass2) {
        $errors["pass2"] = "Las contraseñas no coinciden";
      }
      /*Si hay algún error en las anteriores comprobaciones muestra un mensaje*/
      if (sizeof($errors)>0){
        throw new ValidationException($errors, "El usuario no es válido");
      }

    }

    /* Comprueba si el usuario actual es válido para registrarse en la base de datos,si no lo es devuelve un mensaje por cada tipo de error encontrado */
    public function checkIsValidForRegisterPart($pass2) {

      $errors = array();//Se inializa un array errors con los distintos errores que posteriormente serán mostrados si estos se producen
      /*Error de longitud en el email*/
      if (strlen($this->login) < 3) {
        $errors["login"] = "El login debe contener al menos 3 caracteres de longitud";
      }
      /*Error en la eleccion del tipo de usuario*/
      if (strlen($this->name) < 3) {
        $errors["name"] = "El nombre debe contener al menos 3 caracteres de longitud";
      }
      if (strlen($this->email) < 6) {
        $errors["email"] = "El email debe contener al menos 6 caracteres de longitud";
      }
      /*Error de longitud de la contraseña*/
      if (strlen($this->pass) < 5) {
        $errors["pass"] = "La contraseña debe contener al menos 5 caracteres de longitud";
      }
      /*Error que se produce cuando la contraseña y la contraseña repetida tienen valores diferentes*/
      if ($this->pass != $pass2) {
        $errors["pass2"] = "Las contraseñas no coinciden";
      }
      /*Si hay algún error en las anteriores comprobaciones muestra un mensaje*/
      if (sizeof($errors)>0){
        throw new ValidationException($errors, "El usuario no es válido");
      }

      /* Comprueba si la modificacion del Jurado Popular es válida,si no lo es devuelve un mensaje por cada tipo de error encontrado */
      public function checkIsValidForModificacionPart($pass2) {

        $errors = array(); //Se inializa un array errors con los distintos errores que posteriormente serán mostrados si estos se producen

        if (strlen($this->email) < 6) {
          $errors["email"] = "El email debe contener al menos 6 caracteres de longitud";
        }
        /*Error de longitud de la contraseña*/
        if (strlen($this->pass) < 5) {
          $errors["pass"] = "La contraseña debe contener al menos 5 caracteres de longitud";
        }
        /*Error que se produce cuando la contraseña y la contraseña repetida tienen valores diferentes*/
        if ($this->pass != $pass2) {
          $errors["pass2"] = "Las contraseñas no coinciden";
        }
        /*Si hay algún error en las anteriores comprobaciones muestra un mensaje*/
        if (sizeof($errors)>0){
          throw new ValidationException($errors, "El usuario no es válido");
        }

      }

      public function usernameExists($login) {

        $stmt = $db->prepare("SELECT count(login) FROM tablausuarios where login='".$login."'");
        $stmt->execute(array($this->login));

        if ($stmt->fetchColumn() > 0) {
          return true;
        }
      }

      public function verDatos($login,$tipo) {
        $db = BDconectar::getInstance();
        $stmt = $db->prepare("SELECT * FROM tablausuarios where login='".$login."'");
        $stmt->execute(array($login));
        $user_db=$stmt->fetch(BDconectar::FETCH_ASSOC);

        if(sizeof($user_db)==0){
          return null;

        }else{
          return new User(
          $user_db["login"],
          $user_db["nombreU"],
          $user_db["emailU"],
          $user_db["contraseña"],
          $user_db["tipo"]
        );

        }
      }
}
?>
