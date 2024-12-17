<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Customer extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $fillable = [
        'name',     // The name of the customer.
        'address',  // The address of the customer.
        'contact'   // The contact information (e.g., phone number or email) of the customer.
    ];
}