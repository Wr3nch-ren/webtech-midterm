<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $casts = [
        'activity_date' => 'datetime',
        'deadline' => 'datetime',
    ];
    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function getName()
    {
        return $this->activity_name;
    }

    public function getType()
    {
        return $this->activity_type;
    }

    public function getDeadLine()
    {
        return $this->deadline;
    }

    public function getHours()
    {
        return $this->activity_hours;
    }

    public function getDate()
    {
        return $this->activity_date;
    }

    public function getNumber()
    {
        return $this->participant_number;
    }

    public function getFee()
    {
        return $this->activity_fee;
    }

    public function getPlace()
    {
        return $this->activity_place;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getContact()
    {
        return $this->contact;
    }

    public function getPoster()
    {
        return $this->poster;
    }

    public function getBudget()
    {
        return $this->budget;
    }

    public function getWorkingTeamNumber()
    {
        return $this->working_team_number;
    }

    public function getVerify()
    {
        return $this->verify;
    }

    public function setName($name)
    {
        $this->activity_name = $name;
    }

    public function setType($type)
    {
        $this->activity_type = $type;
    }

    public function setDeadLine($deadline)
    {
        $this->deadline = $deadline;
    }

    public function setHours($hours)
    {
        $this->activity_hours = $hours;
    }

    public function setDate($date)
    {
        $this->activity_date = $date;
    }

    public function setNumber($number)
    {
        $this->participant_number = $number;
    }

    public function setFee($fee)
    {
        $this->activity_fee = $fee;
    }

    public function setPlace($place)
    {
        $this->activity_place = $place;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    public function setPoster($poster)
    {
        $this->poster = $poster;
    }

    public function setBudget($budget)
    {
        $this->budget = $budget;
    }

    public function setWorkingTeamNumber($working_team_number)
    {
        $this->working_team_number = $working_team_number;
    }

    public function setVerify($verify)
    {
        $this->verify = $verify;
    }
}
