<?php

class User {

  private $email;
  private $password;

  public function __construct(string $email,
                              string $password) {
        $this->email = $email;
        $this->password = $password;
    }
}
?>