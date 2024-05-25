<?php

namespace Modules\Todo\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Modules\Todo\database\factories\TodoFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Html;
use Illuminate\Support\Collection;
use Illuminate\Support\HtmlString;
use Modules\Department\app\Models\Department;
use Modules\Customer\app\Models\Customer;
use Modules\Users\app\Models\User;
use Modules\Team\app\Models\Team;
use Modules\Option\app\Models\Option;
use Modules\Corporation\app\Models\Corporation;
use Modules\Company\app\Models\Company;
use Kalnoy\Nestedset\NodeTrait;
class Todo extends Authenticatable {

	protected $table = 'todo';
	public $timestamps = true;
    protected $primaryKey = 'id';
    // protected $connection = "mysql_second";
    protected $fillable = [
        'time',
        'user_id',
        'team_id',
        'department_id',
        'company_id',
        'corporation_id',
        'status',
        'reminder',   
        'time_interval',
        'time_remaining',
        'time_interval_between',
        'title',
        'tag',
        'description',   
        'photo_path',   
        'log',   
        'created_at',   
        'updated_at',   
        'user_created',   
        'user_updated',   
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id')->where('status','!=', 999)->withDefault();
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id','id')->where('status','!=', 999)->withDefault();
    }
    
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id','id')->where('status','!=', 999)->withDefault();
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id','id')->where('status','!=', 999)->withDefault();
    }

    public function corporation()
    {
        return $this->belongsTo(Corporation::class, 'corporation_id','id')->where('status','!=', 999)->withDefault();
    }
    
    public function scopeSearch($query,$term)
    {
        return $query->wherenot('todo.status', -1)->where(function($query) use ($term){
            $query->where('todo.time','like','%'.trim($term).'%')
            ->orWhere('todo.title','like','%'.trim($term).'%')
            ->orWhere('todo.description','like','%'.trim($term).'%')
            ->orWhere('todo.tag','like','%'.trim($term).'%')
            ;
        });
    }
    
    public function scopeSearchJoinUser($query,$term)
    {
        return $query->join('users', 'users.id', '=', 'todo.user_id')->wherenot('todo.id', -1)->where(function($query) use ($term){
            $query->where('todo.time','like','%'.trim($term).'%')
            ->orWhere('todo.description','like','%'.trim($term).'%')
            ->orWhere('todo.tag','like','%'.trim($term).'%')
            ->orWhere('users.name','like','%'.trim($term).'%')
            ->orWhere('users.code','like','%'.trim($term).'%');
        });
    }

    public function userCreate()
    {

        return $this->belongsTo(User::class, 'user_created','code')->where('status','!=', 999)->withDefault();
    }
    public function userUpdate()
    {

        return $this->belongsTo(User::class, 'user_updated','code')->where('status','!=', 999)->withDefault();
    }
    protected function casts(): array
    {
        return [
            'data' => 'data',
        ];
    }

	protected static function newFactory(): TodoFactory {
		return TodoFactory::new();
	}
}
