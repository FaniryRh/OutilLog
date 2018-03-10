<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CompetanceFormation
 *
 * @package App
 * @property string $titre
 * @property text $description
 * @property string $piece_jointe
*/
class CompetanceFormation extends Model
{
    protected $fillable = ['titre', 'description', 'piece_jointe'];
    
    
    public static function boot()
    {
        parent::boot();

        CompetanceFormation::observe(new \App\Observers\UserActionsObserver);
    }
    
}
