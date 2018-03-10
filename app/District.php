<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class District
 *
 * @package App
 * @property string $region
 * @property string $name
*/
class District extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'region_id'];
    
    
    public static function boot()
    {
        parent::boot();

        District::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setRegionIdAttribute($input)
    {
        $this->attributes['region_id'] = $input ? $input : null;
    }
    
    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id')->withTrashed();
    }
    
    public function contactDistrict() {
        return $this->hasMany(ContactDistrict::class, 'district_id');
    }
}
