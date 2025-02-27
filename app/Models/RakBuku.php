<?php

namespace App\Models;

use App\Models\Buku;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class RakBuku extends Model
{
    // use HasFactory;
    protected $table = 'rak_buku';
    public function buku(): HasMany
    {
        return $this->hasMany(Buku::class, 'id_rak_buku', 'id');
    }

    protected $guarded = ['id'];
}
