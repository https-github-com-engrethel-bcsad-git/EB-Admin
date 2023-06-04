<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class DocuRequest extends Model
{
    use HasFactory;

    protected $table = 'docu_request';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
