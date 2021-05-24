<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'middlename',
        'idno',
        'date_hired',
        'email',
        'phonenumber',
        'krapin',
        'gender',
        'qualification_id',
        'coursename'
    ];

    protected $appends=['full_name'];

    public function setDateHiredAttribute($value)
    {
        $this->attributes['date_hired'] = Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d');
    }

    public function getDateHiredAttribute()
    {
        if ($this->attributes['date_hired'] != null)
        {
            return Carbon::createFromFormat('Y-m-d', $this->attributes['date_hired'])->format('d/m/Y');
        }
    }

    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }

    public function getFullNameAttribute()
    {
        return ucfirst($this->firstname).' '.ucfirst($this->middlename).' '.ucfirst($this->lastname);
    }


}
