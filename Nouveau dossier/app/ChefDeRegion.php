<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ChefDeRegion
 *
 * @package App
 * @property string $province
 * @property string $region
 * @property string $nom_prenom
 * @property string $tel
 * @property string $tel2
 * @property string $email
*/
class ChefDeRegion extends Model
{
    use SoftDeletes;

    protected $fillable = ['nom_prenom', 'tel', 'tel2', 'email', 'province_id', 'region_id'];
    
    
    public static function boot()
    {
        parent::boot();

        ChefDeRegion::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setProvinceIdAttribute($input)
    {
        $this->attributes['province_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setRegionIdAttribute($input)
    {
        $this->attributes['region_id'] = $input ? $input : null;
    }
    
    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id')->withTrashed();
    }
    
    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id')->withTrashed();
    }
    
}
