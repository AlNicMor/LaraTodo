<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [
        'id', 'label_id'
    ];
    //
    public function label()
    {
        return $this->belongsTo(Label::class);
    }
}
