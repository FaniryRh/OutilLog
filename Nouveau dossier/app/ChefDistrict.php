<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ChefDistrict
 *
 * @package App
 * @property string $region
 * @property string $district
 * @property string $nom_prenom
 * @property string $tel1
 * @property string $tel2
 * @property string $email
*/
class ChefDistrict extends Model
{
    use SoftDeletes;

    protected $fillable = ['nom_prenom', 'tel1', 'tel2', 'email', 'region_id', 'district_id'];
    
    
    public static function boot()
    {
        parent::boot();

        ChefDistrict::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setRegionIdAttribute($input)
    {
        $this->attributes['region_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setDistrictIdAttribute($input)
    {
        $this->attributes['district_id'] = $input ? $input : null;
    }
    
    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id')->withTrashed();
    }
    
    public function district()
    {
        return $this->belongsTo(District::class, 'district_id')->withTrashed();
    }
    
}
