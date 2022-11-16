<?php

namespace App\Modules\Settings\Models;

use App\Bll\Constants;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings';

    protected $fillable = [
        'key',
        'value',
    ];


    public function getValueAttribute($value)
    {
        if ($this->key == 'logo') {
            return asset(Constants::SettingPath . $value);
        } else {
            return $value;
        }
    }
}
