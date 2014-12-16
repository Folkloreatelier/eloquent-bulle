<?php namespace Folklore\Bulle\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{

    public function __construct(array $attributes = array())
    {
        $this->table = \Config::get('bulle::table_prefix').$this->table;

        parent::__construct($attributes);
    }
}
