<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sales extends Model
{
    use HasFactory;

    protected $table = 'sales';

    protected $primaryKey = 'id_sales';

    /**
     * Kolom yang dapat diisi massal.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_outlet',
        'invoice_number',
        'total_price',
        'total_items',
        'sale_date',
    ];

    /**
     * Cast tipe data kolom.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'sale_date' => 'datetime',
        'total_price' => 'decimal:2',
        'total_items' => 'integer',
    ];

    /**
     * Relasi ke outlet cabang (Sale Belongs To Outlet).
     */
    public function outlet(): BelongsTo
    {
        return $this->belongsTo(Outlet::class, 'id_outlet', 'id_outlet');
    }

    /**
     * Scope Query untuk Filter Data Penjualan Seminggu (7 Hari Terakhir).
     */
    public function scopeWeekly(Builder $query): Builder
    {
        return $query->where('sale_date', '>=', Carbon::now()->subDays(7));
    }

    /**
     * Scope Query untuk Filter Data Penjualan Sebulan (30 Hari Terakhir).
     */
    public function scopeMonthly(Builder $query): Builder
    {
        return $query->where('sale_date', '>=', Carbon::now()->subDays(30));
    }
}
