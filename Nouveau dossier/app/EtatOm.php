<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EtatOm
 *
 * @package App
 * @property string $nom
*/
class EtatOm extends Model
{
    protected $fillable = ['nom'];
    
    
    public static function boot()
    {
        parent::boot();

        EtatOm::observe(new \App\Observers\UserActionsObserver);
    }
    
}
