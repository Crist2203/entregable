<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicio
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $precio
 * @property $created_at
 * @property $updated_at
 *
 * @property Datoscrud.reserva[] $datoscrud_reservas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Servicio extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'descripcion', 'precio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function datoscrud_reservas()
    {
        return $this->hasMany(\App\Models\reserva::class, 'id', 'servicio_id');
    }
    
}
