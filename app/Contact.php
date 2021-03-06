<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contact
 *
 * @package App
 * @property string $company
 * @property string $fonction
 * @property string $first_name
 * @property string $phone1
 * @property string $phone2
 * @property string $email
 * @property string $address
*/
class Contact extends Model
{
    protected $fillable = ['fonction', 'first_name', 'phone1', 'phone2', 'email', 'address', 'company_id'];
    
    public static function boot()
    {
        parent::boot();

        Contact::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setCompanyIdAttribute($input)
    {
        $this->attributes['company_id'] = $input ? $input : null;
    }
    
    public function company()
    {
        return $this->belongsTo(ContactCompany::class, 'company_id');
    }
    
}
