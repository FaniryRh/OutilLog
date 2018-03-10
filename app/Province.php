<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Province
 *
 * @package App
 * @property string $name
*/
class Province extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];
    
    
    public static function boot()
    {
        parent::boot();

        Province::observe(new \App\Observers\UserActionsObserver);
    }
    
    public function region() {
        return $this->hasMany(Region::class, 'province_id');
    }
}
