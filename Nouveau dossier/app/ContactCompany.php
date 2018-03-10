<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContactCompany
 *
 * @package App
 * @property string $logo
 * @property string $name
 * @property string $address
 * @property string $website
 * @property string $email
 * @property string $tel
*/
class ContactCompany extends Model
{
    protected $fillable = ['logo', 'name', 'address', 'website', 'email', 'tel'];
    
    public static function boot()
    {
        parent::boot();

        ContactCompany::observe(new \App\Observers\UserActionsObserver);
    }
    
    public function contactsRegion() {
        return $this->hasMany(ContactsRegion::class, 'organisme_id');
    }
    public function listeGroupeSectoriel() {
        return $this->hasMany(ListeGroupeSectoriel::class, 'organisme_id');
    }
}
