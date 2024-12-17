<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Cart extends Model
{
   use HasFactory; // Use the HasFactory trait to enable model factories for testing and seeding.
    public $timestamps = true;// Set the $timestamps property to true to automatically manage created_at and updated_at fields.
    
    
    protected $fillable = [// Define the attributes that are mass assignable.
        'custom_name',  // The custom name of the item in the cart.
        'price',        // The price of the item in the cart.
        'qty'           // The quantity of the item in the cart.
    ];
}
