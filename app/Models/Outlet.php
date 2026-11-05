<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Outlet extends Model
{
    use HasFactory;

    protected $table = 'outlets';

    /**
     * Kolom yang dapat diisi massal.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'city',
        'address',
        'phone',
        'is_open',
    ];

    /**
     * Cast tipe data kolom.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_open' => 'boolean',
    ];

    /**
     * Relasi ke transaksi penjualan (One Outlet Has Many Sales).
     */
    public function sales(): HasMany
    {
        return $this->hasMany(Sales::class, 'id_outlet', 'id_outlet');
    }
}
