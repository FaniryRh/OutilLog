<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Reunion
 *
 * @package App
 * @property string $objet
 * @property string $date
 * @property string $personnel
 * @property text $description
 * @property string $rapport
*/
class Reunion extends Model
{
    use SoftDeletes;

    protected $fillable = ['objet', 'date', 'description', 'rapport', 'personnel_id'];
    
    
    public static function boot()
    {
        parent::boot();

        Reunion::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDateAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['date'] = Carbon::createFromFormat(config('app.date_format') . ' H:i:s', $input)->format('Y-m-d H:i:s');
        } else {
            $this->attributes['date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDateAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format') . ' H:i:s');

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d H:i:s', $input)->format(config('app.date_format') . ' H:i:s');
        } else {
            return '';
        }
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setPersonnelIdAttribute($input)
    {
        $this->attributes['personnel_id'] = $input ? $input : null;
    }
    
    public function personnel()
    {
        return $this->belongsTo(PersonnelDuBngrc::class, 'personnel_id')->withTrashed();
    }
    
    public function organisme_id()
    {
        return $this->belongsToMany(ContactCompany::class, 'contact_company_reunion');
    }
    
    public function participant_bngrc()
    {
        return $this->belongsToMany(PersonnelDuBngrc::class, 'personnel_du_bngrc_reunion')->withTrashed();
    }
    
}
