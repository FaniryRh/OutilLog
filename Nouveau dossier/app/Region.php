<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Region
 *
 * @package App
 * @property string $province
 * @property string $name
*/
class Region extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'province_id'];
    
    
    public static function boot()
    {
        parent::boot();

        Region::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setProvinceIdAttribute($input)
    {
        $this->attributes['province_id'] = $input ? $input : null;
    }
    
    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id')->withTrashed();
    }
    
    public function contactsRegion() {
        return $this->hasMany(ContactsRegion::class, 'region_id');
    }
    public function district() {
        return $this->hasMany(District::class, 'region_id');
    }
    public function prefecture() {
        return $this->hasMany(Prefecture::class, 'region_id');
    }
}
