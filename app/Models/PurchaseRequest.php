<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseRequest extends Model
{
    use HasFactory;
    protected $table = 'properties';

    // List all attributes that can be mass-assigned
    protected $fillable = [
        'name',
        'email',
        'phone',
        'property_id',
        'status', 
        ];

        protected $guarded = [
          'attachment',
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

        public function property()
        {
          return $this->belongsTo(Type::class, 'property_id', 'id');
        }
}
