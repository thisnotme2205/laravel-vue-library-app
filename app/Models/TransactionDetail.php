<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    protected $guarded = ['created_at', 'updated_at'];

    public function transaction(){
        return $this->belongsTo(Transaction::class);
    }
    
    public function book(){
        return $this->belongsTo(Book::class);
    }
}
