<?php

use Acme\Person;
use Acme\Business;
use Acme\Staff;

$candice = new Person('Candice');

$staff = new Staff($candice);

$laracasts = new Business($staff);

$laracasts->hire($candice);

$laracasts->hire(new Person('Alexis'));