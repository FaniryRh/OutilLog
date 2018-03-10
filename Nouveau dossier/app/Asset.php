<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * Class Asset
 *
 * @package App
 * @property string $category
 * @property string $serial_number
 * @property string $title
 * @property string $photo1
 * @property string $photo2
 * @property string $photo3
 * @property string $date_acquisition
 * @property integer $quantite_stock
 * @property string $status
 * @property string $location
 * @property string $assigned_user
 * @property text $notes
 * @property string $latitude
 * @property string $longitude
*/
class Asset extends Model
{
    protected $fillable = ['serial_number', 'title', 'photo1', 'photo2', 'photo3', 'date_acquisition', 'quantite_stock', 'notes', 'latitude', 'longitude', 'category_id', 'status_id', 'location_id', 'assigned_user_id'];
    
    
    public static function boot()
    {
        parent::boot();

        Asset::observe(new \App\Observers\UserActionsObserver);

        Asset::observe(new \App\Observers\AssetsHistoryObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setCategoryIdAttribute($input)
    {
        $this->attributes['category_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDateAcquisitionAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['date_acquisition'] = Carbon::createFromFormat(config('app.date_format') . ' H:i:s', $input)->format('Y-m-d H:i:s');
        } else {
            $this->attributes['date_acquisition'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDateAcquisitionAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format') . ' H:i:s');

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d H:i:s', $input)->format(config('app.date_format') . ' H:i:s');
        } else {
            return '';
        }
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setQuantiteStockAttribute($input)
    {
        $this->attributes['quantite_stock'] = $input ? $input : null;
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
     * Set to null if empty
     * @param $input
     */
    public function setLocationIdAttribute($input)
    {
        $this->attributes['location_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setAssignedUserIdAttribute($input)
    {
        $this->attributes['assigned_user_id'] = $input ? $input : null;
    }
    
    public function category()
    {
        return $this->belongsTo(AssetsCategory::class, 'category_id');
    }
    
    public function status()
    {
        return $this->belongsTo(AssetsStatus::class, 'status_id');
    }
    
    public function location()
    {
        return $this->belongsTo(AssetsLocation::class, 'location_id');
    }
    
    public function assigned_user()
    {
        return $this->belongsTo(PersonnelDuBngrc::class, 'assigned_user_id')->withTrashed();
    }
    
}
