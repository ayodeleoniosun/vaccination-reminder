<?php

namespace App\Modules\Api\V1\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccinationSms extends Model
{
    use HasFactory;
    
    public function vaccinationRequest()
    {
        return $this->belongsTo(VaccinationRequest::class, 'vaccination_request_id');
    }

    public function vaccinationSms()
    {
        return $this->belongsTo(VaccinationSms::class, 'vaccination_cycle_id');
    }
}
