<?php

namespace Acme;

class Business {

  protected $staff;

  public function __construct(Staff $staff)
  {
    $this->staff=$staff;
  }

  protected function hire(Person $person) {

    $this->staff->add()->$person;
  }

  public function getStaffMembers() {
    
    return $this->staff->members();
  }

}

