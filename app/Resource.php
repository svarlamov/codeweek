<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Resource extends Model
{
    protected $guarded = [];
    use Searchable;


    public function targets()
    {
        return $this->belongsToMany('App\Target');
    }

    public function resource_types()
    {
        return $this->belongsToMany('App\ResourceType');
    }

}
