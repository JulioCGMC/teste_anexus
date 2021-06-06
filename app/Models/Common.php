<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Common extends Model
{
    use HasFactory;

    public $incrementing = false;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'points', 'indicator', 
        'left_indicated', 'right_indicated'
    ];

    /**
     * Create a new instance of the given model.
     *
     * @param  array  $attributes
     * @param  bool  $exists
     * @return static
    */
    public static function create($attributes = [], $exists = false) {
        /// Create user as common
        $user = User::create(array_merge($attributes, ['type' => 'common']));
        if ($user->profile->indicator != null) {
            /// Associate this user with the indicator
            Common::find($user->profile->indicator)->addIndication(
            $user->profile);
        }
        return $user->profile;
    }

    /**
     * Tries to relate $indicated with this model
     *
     * @param  Common  $indicated
     * @return bool
    */
    public function addIndication(Common $indicated)
    {
        if ($this->indicatedLeft == null) {
            // echo'<pre>';var_dump($indicated->attributes).exit;
            if ($this->indicatedLeft()->associate($indicated)->save()) {
                return true;
            }
        }
        else if ($this->indicatedRight == null) {
            if ($this->indicatedRight()->associate($indicated)->save()) {
                return true;
            }
        }
        return false;
    }

    /**
     * Get the user that owns the Common
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id');
    }

    /**
     * Get the indicator associated with the Common
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function indicatorModel(): BelongsTo
    {
        return $this->belongsTo(Common::class, 'indicator');
    }

    /**
     * Get the first indicated associated with the Common
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function indicatedLeft(): BelongsTo
    {
        return $this->belongsTo(Common::class, 'left_indicated');
    }

    /**
     * Get the second/last indicated associated with the Common
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function indicatedRight(): BelongsTo
    {
        return $this->belongsTo(Common::class, 'right_indicated');
    }

    /**
     * Get the sum of the indicateds plus it's own points
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getAllPoints()
    {
        $points = $this->points;
        if ($this->indicatedLeft != null) {
            $points += $this->indicatedLeft->getAllPoints();
        }
        if ($this->indicatedRight != null) {
            $points += $this->indicatedRight->getAllPoints();
        }
        return $points;
    }

    /**
     * Get the points of the first indicated and all his indications
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getLeftPoints()
    {
        $points = 0;
        if ($this->indicatedLeft != null) {
            $points = $this->indicatedLeft->getAllPoints();
        }
        return $points;
    }

    /**
     * Get the points of the second/last indicated and all his indications
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getRightPoints()
    {
        $points = 0;
        if ($this->indicatedRight != null) {
            $points = $this->indicatedRight->getAllPoints();
        }
        return $points;
    }
}
