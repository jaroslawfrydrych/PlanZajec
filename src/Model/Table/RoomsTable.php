<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class RoomsTable extends Table
{
    public function initialize(array $config)
    {
        $this->hasMany('Places');

    }
}