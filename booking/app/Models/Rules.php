<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Guid\Fields;

class Rules extends Model
{
    use HasFactory;

    protected $fillable = [
        
        //field_id ini tambahan untuk merelasikan field
        'field_id',

        'rule_in_field',
        'rule_out_field',
        'rule_rent'
    ];

    //ini relasi ke lapangan, tetapi lapangan belum ada
    function rules(){
        return $this->belongsTo(Fields::class);
    }
}
