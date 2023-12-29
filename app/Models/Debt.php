<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Debt extends Model
{
    use HasFactory;

    public static array $status = ['paid', 'open', 'closed'];

    public function profile(): BelongsTo
    {
        return $this->belongsTo(Profile::class);
    }

    public function creditor(): HasOneThrough
    {
        return $this->hasOneThrough(Creditor::class, User::class);
    }

    public function installments(): HasMany
    {
        return $this->hasMany(Installment::class);
    }
}
