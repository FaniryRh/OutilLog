<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ContactDistrict
 *
 * @package App
 * @property string $district
 * @property string $nom_prenom
 * @property string $organisme
 * @property string $fonction
 * @property string $tel
 * @property string $email
*/
class ContactDistrict extends Model
{
    use SoftDeletes;

    protected $fillable = ['nom_prenom', 'fonction', 'tel', 'email', 'district_id', 'organisme_id'];
    
    public static function boot()
    {
        parent::boot();

        ContactDistrict::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setDistrictIdAttribute($input)
    {
        $this->attributes['district_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setOrganismeIdAttribute($input)
    {
        $this->attributes['organisme_id'] = $input ? $input : null;
    }
    
    public function district()
    {
        return $this->belongsTo(District::class, 'district_id')->withTrashed();
    }
    
    public function organisme()
    {
        return $this->belongsTo(ContactCompany::class, 'organisme_id');
    }
    
}
