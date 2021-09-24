<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TestCovid extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public const SEXE_RADIO = [
        'Homme' => 'Homme',
        'Femme' => 'Femme',
    ];

    public const STATUT_SELECT = [
        'Effectue' => 'Effectué',
        'Reporte'  => 'Reporté',
        'Annule'   => 'Annulé',
        'Programmé'  => 'Programmé',
    ];

    public $table = 'test_covids';

    protected $dates = [
        'date_rendez_vous',
        'date_voyage',
        'date_naissance',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'date_rendez_vous',
        'date_voyage',
        'nom',
        'prenoms',
        'nom_complet',
        'sexe',
        'telephone',
        'date_naissance',
        'email',
        'adresse',
        'heure_rendez_vous',
        'destination',
        'heure_voyage',
        'message',
        'statut',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getDateRendezVousAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateRendezVousAttribute($value)
    {
        $this->attributes['date_rendez_vous'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getDateVoyageAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateVoyageAttribute($value)
    {
        $this->attributes['date_voyage'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getDateNaissanceAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateNaissanceAttribute($value)
    {
        $this->attributes['date_naissance'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
