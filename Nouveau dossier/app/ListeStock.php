<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ListeStock
 *
 * @package App
 * @property string $designation
 * @property text $description
 * @property double $quantite
 * @property string $unite
*/
class ListeStock extends Model
{
    protected $fillable = ['designation', 'description', 'quantite', 'unite_id'];
    
    
    public static function boot()
    {
        parent::boot();

        ListeStock::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setQuantiteAttribute($input)
    {
        if ($input != '') {
            $this->attributes['quantite'] = $input;
        } else {
            $this->attributes['quantite'] = null;
        }
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setUniteIdAttribute($input)
    {
        $this->attributes['unite_id'] = $input ? $input : null;
    }
    
    public function unite()
    {
        return $this->belongsTo(Unite::class, 'unite_id');
    }
    
}
