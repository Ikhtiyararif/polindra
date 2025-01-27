<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    // If you need timestamps, you can remove the following line or set it to true
    public $timestamps = false;
    
      // If the table name follows Laravel's naming convention, you can remove this line
      protected $table = 'properties';

      // List all attributes that can be mass-assigned
      protected $fillable = [
          'name', 
          'price', 
          'type_id', 
          'category_id', 
          'description',
          'address',
          'province_id',
          'regency_id', 
          'district_id', 
          'village_id',
          'year', 
          'interior',
          'electricity',
          'parking_lot',
          'id_certificate_type',
          'sale_type_id',
          'floor',
          'developer',
          'room_number',
          'bathroom',
          'slug',
          'building_area',
          'recommended',
          'jumlah_lantai',
          'lb',
          'lt',
          'km',
          'kt',
          'hadap',];

          protected $guarded = [
            'image',
        ];

        public function village()
        {
          return $this->belongsTo(Village::class, 'village_id', 'id');
        }

        public function district()
        {
          return $this->belongsTo(District::class, 'district_id', 'id');
        }

        public function province()
        {
          return $this->belongsTo(Province::class, 'province_id', 'id');
        }

        public function regency()
        {
          return $this->belongsTo(Regency::class, 'regency_id', 'id');
        }

        public function category()
        {
          return $this->belongsTo(Category::class, 'category_id', 'id');
        }

        public function type()
        {
          return $this->belongsTo(Type::class, 'type_id', 'id');
        }
}
