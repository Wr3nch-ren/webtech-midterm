<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Enum\RoleAccessibility;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

        'email',
        'password',
        'name_title',
        'name',
        'surname',
        'student_code',
        'nickname',
        'date_of_birth',
        //'campus_id',
        'faculty',
        'major',
        'year',
        'phone',
        'line_id',
        'facebook',
        'congenital_disease',
        'allergy',
        'activity',
        'image_path',
        // 'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'role' => RoleAccessibility::class, //based on saacsos' work
        'year' => 'integer'
    ];

    public function activities(): BelongsTo
    {
        return $this->belongsTo(Activity::class);
    }

    // public function roles(): BelongsToMany
    // {
    //     return $this->belongsToMany(Role::class);
    // }

    public function registeredList(): BelongsTo
    {
        return $this->belongsTo(RegisteredList::class);
    }
    public function organizerList(): BelongsTo
    {
        return $this->belongsTo(OrganizerList::class);
    }



    public function teams(): HasMany
    {
        return $this->hasMany(Team::class);
    }

    public function teamMembers(): HasMany
    {
        return $this->hasMany(TeamMember::class);
    }

    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }

    public function announcements(): HasMany
    {
        return $this->hasMany(Announcement::class);
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function comments(): HasMany     //User has many Comment
    {
        return $this->hasMany(Comment::class);
    }

    public function isHost(): bool
    {
        return  $this->role === RoleAccessibility::HOST;
    }

    public function isOrganizer(): bool
    {
        return  $this->role === RoleAccessibility::ORGANIZER;
    }

    public function isStaff(): bool
    {
        return  $this->role === RoleAccessibility::STAFF;
    }

    public function isAdmin(): bool
    {
        return $this->role === RoleAccessibility::ADMIN;
    }
}
