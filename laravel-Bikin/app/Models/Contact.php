<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';

    protected $fillable = ['titre','sousTitre','infos','icon_id'];

    public function icon(){
        return $this->belongsTo(Icon::class);
    }
}
