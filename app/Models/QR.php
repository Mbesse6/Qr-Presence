<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QR extends Model
{
    use HasFactory;
    protected $fillable = ['code', 'employe'];

    public function QR(): BelongsTo
    {
        return $this->belongsTo(QR::class);
    }
}
