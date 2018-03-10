<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EtatImpression
 *
 * @package App
 * @property string $name
*/
class EtatImpression extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];
    
    public static function boot()
    {
        parent::boot();

        EtatImpression::observe(new \App\Observers\UserActionsObserver);
    }
    
}
