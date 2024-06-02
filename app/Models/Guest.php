<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = ['NIKID', 'Name', 'Email', 'Phone', 'Address', 'CreditCardNumber'];

    public $primaryKey = 'NIKID';
    public $incrementing = false;
    protected $keyType = 'string';
}