<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AssetsCategory
 *
 * @package App
 * @property string $title
*/
class AssetsCategory extends Model
{
    protected $fillable = ['title'];
    
    public static function boot()
    {
        parent::boot();

        AssetsCategory::observe(new \App\Observers\UserActionsObserver);
    }
    
}
