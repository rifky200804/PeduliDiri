<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perjalanan extends Model
{
    protected $table = 'perjalanans';

    protected $fillable = [
        'tanggal',
        'jam',
        'lokasi',
        'suhu_tubuh',
        'id_user',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'id_perjalanan';
       
        public function user()
        {
            return $this->belongsTo(User::class, 'id_user', 'id');
        }    
    
}

