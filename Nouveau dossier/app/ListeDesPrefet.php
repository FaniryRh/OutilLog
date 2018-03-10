<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ListeDesPrefet
 *
 * @package App
 * @property string $province
 * @property string $region
 * @property string $prefecture
 * @property string $nom_prenom
 * @property string $tel1
 * @property string $tel2
 * @property string $email
*/
class ListeDesPrefet extends Model
{
    use SoftDeletes;

    protected $fillable = ['nom_prenom', 'tel1', 'tel2', 'email', 'province_id', 'region_id', 'prefecture_id'];
    
    
    public static function boot()
    {
        parent::boot();

        ListeDesPrefet::observe(new \App\Observers\UserActionsObserver);
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

    /**
     * Set to null if empty
     * @param $input
     */
    public function setPrefectureIdAttribute($input)
    {
        $this->attributes['prefecture_id'] = $input ? $input : null;
    }
    
    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id')->withTrashed();
    }
    
    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id')->withTrashed();
    }
    
    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class, 'prefecture_id')->withTrashed();
    }
    
}
