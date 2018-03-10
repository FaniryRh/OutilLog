<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ContactsRegion
 *
 * @package App
 * @property string $region
 * @property string $nom_prenom
 * @property string $organisme
 * @property string $fonction
 * @property string $tel
 * @property string $email
*/
class ContactsRegion extends Model
{
    use SoftDeletes;

    protected $fillable = ['nom_prenom', 'fonction', 'tel', 'email', 'region_id', 'organisme_id'];
    
    
    public static function boot()
    {
        parent::boot();

        ContactsRegion::observe(new \App\Observers\UserActionsObserver);
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
    public function setOrganismeIdAttribute($input)
    {
        $this->attributes['organisme_id'] = $input ? $input : null;
    }
    
    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id')->withTrashed();
    }
    
    public function organisme()
    {
        return $this->belongsTo(ContactCompany::class, 'organisme_id');
    }
    
}
