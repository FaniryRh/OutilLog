<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MainCourante
 *
 * @package App
 * @property string $gdh
 * @property string $expeditaire
 * @property string $destinataire
 * @property string $event
 * @property text $detail
 * @property string $joint
 * @property string $photo1
 * @property string $photo2
 * @property text $action_entreprise
 * @property string $impacte_desastre
 * @property string $longitude
 * @property string $latitude
*/
class MainCourante extends Model
{
    use SoftDeletes;

    protected $fillable = ['gdh', 'expeditaire', 'destinataire', 'detail', 'joint', 'photo1', 'photo2', 'action_entreprise', 'impacte_desastre', 'longitude', 'latitude', 'event_id'];
    
    
    public static function boot()
    {
        parent::boot();

        MainCourante::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setEventIdAttribute($input)
    {
        $this->attributes['event_id'] = $input ? $input : null;
    }
    
    public function event()
    {
        return $this->belongsTo(TypeRisque::class, 'event_id')->withTrashed();
    }
    
}
