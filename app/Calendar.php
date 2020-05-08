<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//the simplified Calendar model also has a color and a timezone.
class Calendar extends Model
{
    protected $fillable = ['google_id', 'name', 'color', 'timezone'];

    public function googleAccount()
    {
        return $this->belongsTo(GoogleAccount::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}