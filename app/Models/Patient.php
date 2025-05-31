<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    // BUG: fillable empty → mass assignment risk
    protected $guarded = ['id'];

    public function getBirthdateAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d M Y');
    }
}
