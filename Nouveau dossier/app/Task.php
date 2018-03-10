<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * Class Task
 *
 * @package App
 * @property string $type
 * @property string $mission
 * @property string $name
 * @property text $description
 * @property string $status
 * @property string $attachment
 * @property string $due_date
 * @property time $heur
 * @property string $user
*/
class Task extends Model
{
    protected $fillable = ['name', 'description', 'attachment', 'due_date', 'heur', 'type_id', 'mission_id', 'status_id', 'user_id'];
    
    
    public static function boot()
    {
        parent::boot();

        Task::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setTypeIdAttribute($input)
    {
        $this->attributes['type_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setMissionIdAttribute($input)
    {
        $this->attributes['mission_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setStatusIdAttribute($input)
    {
        $this->attributes['status_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDueDateAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['due_date'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['due_date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDueDateAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setHeurAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['heur'] = Carbon::createFromFormat('H:i:s', $input)->format('H:i:s');
        } else {
            $this->attributes['heur'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getHeurAttribute($input)
    {
        if ($input != null && $input != '') {
            return Carbon::createFromFormat('H:i:s', $input)->format('H:i:s');
        } else {
            return '';
        }
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setUserIdAttribute($input)
    {
        $this->attributes['user_id'] = $input ? $input : null;
    }
    
    public function type()
    {
        return $this->belongsTo(TypeTache::class, 'type_id');
    }
    
    public function mission()
    {
        return $this->belongsTo(Mission::class, 'mission_id')->withTrashed();
    }
    
    public function status()
    {
        return $this->belongsTo(TaskStatus::class, 'status_id');
    }
    
    public function user()
    {
        return $this->belongsTo(PersonnelDuBngrc::class, 'user_id')->withTrashed();
    }
    
    public function participant()
    {
        return $this->belongsToMany(PersonnelDuBngrc::class, 'personnel_du_bngrc_task')->withTrashed();
    }
    
    public function organisme()
    {
        return $this->belongsToMany(ContactCompany::class, 'contact_company_task');
    }
    
}
