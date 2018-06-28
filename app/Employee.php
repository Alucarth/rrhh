<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\Util;

class Employee extends Model
{
    //
    public function employee_type()
    {
        return $this->belongsTo(EmployeeType::class,'employee_type_id','id');
    }
    public function city_identity_card()
    {
        return $this->belongsTo(City::class, 'city_identity_card_id', 'id');
    }
    public function city_birth()
    {
        return $this->belongsTo(City::class, 'city_birth_id', 'id');
    }
    public function management_entity()
    {
        return $this->belongsTo(ManagementEntity::class, 'management_entity_id', 'id');
    }
    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }
    public function fullName($style="uppercase", $order="name_first")
    {
        return Util::fullName($this, $style, $order);
    }

}
