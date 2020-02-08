<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $guarded =[];

    public function logFile()
    {
        return $this->hasOne('App\LogFile');
    }

    public function contentFile()
    {
        return $this->hasOne('App\ContentFile');
    }

    public function descriptionFile()
    {
        return $this->hasOne('App\DescriptionFile');
    }
}
