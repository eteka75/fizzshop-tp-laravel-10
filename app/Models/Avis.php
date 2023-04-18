<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Avis extends Model
{
    use HasFactory;
    //Les status
    const ACTIF='Actif';
    const EN_ATTENTE='En attente';
    const DEFAULT_IMAGE="storage/assets/images/avatar/default.jpeg";
    const DESACTIVE='Désactivé';
    /**
     * Les attributs de la class Avis.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'pseudo',
        'note',
        'commentaire',
        'description',
        'photo',
        'status',
        'produit_id',
    ];

    public function getPhoto()
    {
        if($this->photo!=null){
            return $this->photo;
        }
        return  self::DEFAULT_IMAGE;
    }

    /**
     * Les attributs à caster
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime',
        'produit_id'=>'integer'
    ];

}
