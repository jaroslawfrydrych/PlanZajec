<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class HarmonogramsTable extends Table
{
    public function initialize(array $config)
    {
        $this->hasMany('Schedules');

    }

}