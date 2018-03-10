<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EtatRapportOm
 *
 * @package App
 * @property string $nom
*/
class EtatRapportOm extends Model
{
    protected $fillable = ['nom'];
    
    
    public static function boot()
    {
        parent::boot();

        EtatRapportOm::observe(new \App\Observers\UserActionsObserver);
    }
    
}
