<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Prefecture
 *
 * @package App
 * @property string $region
 * @property string $name
*/
class Prefecture extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'region_id'];
    
    
    public static function boot()
    {
        parent::boot();

        Prefecture::observe(new \App\Observers\UserActionsObserver);
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
    
}
