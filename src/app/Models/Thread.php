<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Thread extends Model
{
    use HasFactory;
    public function chennel()
    {
        return $this->BelongsTo(Chennel::class);
    }
    
    public function user()
    {
        return $this->BelongsTo(User::class);
    }

    public function answeres()
    {
        return $this->HasMany(Answer::class);
    }
}
