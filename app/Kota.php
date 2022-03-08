<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $table = 'kotas';

    protected $fillable = ['kota'];
    protected $primaryKey = 'id_kota';

    /**
     * Get all of the comments for the Kota
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user(): HasMany
    {
        return $this->hasMany(User::class, 'id_kota', 'id_kota');
    }
}
