<?php 

namespace Acme;


class Staff {

  protected $members = [];

  public function __constructor($members = [])
  {
    $this->members = $members;
  }

  public function add($person)
  {
    $this->members[] = $person;
  }

  public function members() {
    return $this->members;
  }
}