<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Aprendiz
 *
 * @property $id
 * @property $nombre_completo
 * @property $pregunta1
 * @property $pregunta2
 * @property $pregunta3
 * @property $pregunta4
 * @property $pregunta5
 * @property $pregunta6
 * @property $pregunta7
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Aprendiz extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_completo', 'pregunta1', 'pregunta2', 'pregunta3', 'pregunta4', 'pregunta5', 'pregunta6', 'pregunta7'];



}
