<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Resource extends Model
{
    protected $guarded = [];
    use Searchable;

    public function toSearchableArray()
    {
        $array = $this->toArray();

        $array['targets'] = $this->targets->map(function ($data) {
            return $data['name'];
        })->toArray();

        $array['resource_types'] = $this->resource_types->map(function ($data) {
            return $data['name'];
        })->toArray();

        $array['languages'] = $this->languages->map(function ($data) {
            return $data['name'];
        })->toArray();



        return $array + ["path" => $this->link()];
    }


    public function link(){
        return "https://something.com/" . $this->source;
    }

    public function targets()
    {
        return $this->belongsToMany('App\Target');
    }

    public function languages()
    {
        return $this->belongsToMany('App\Language');
    }

    public function resource_types()
    {
        return $this->belongsToMany('App\ResourceType');
    }

}
