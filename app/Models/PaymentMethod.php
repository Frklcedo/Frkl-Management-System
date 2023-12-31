<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'method',
        'content',
    ];

    public function creditor(): BelongsTo
    {
        return $this->belongsTo(Creditor::class);
    }
}
