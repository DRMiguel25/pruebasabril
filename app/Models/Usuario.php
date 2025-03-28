<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    // Nombre de la tabla en la base de datos
    protected $table = 'Usuario';

    // Clave primaria de la tabla
    protected $primaryKey = 'id_usuario';

    // Desactivar timestamps si no usas `created_at` y `updated_at`
    public $timestamps = false;

    // Campos que se pueden llenar masivamente
    protected $fillable = [
        'nombre',
        'apellidoP',
        'apellidoM',
        'correo',
        'password', // Asegúrate de que coincida con el nombre de la columna en la base de datos
        'id_rol',
    ];

    // Campos ocultos al serializar el modelo
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Casting de campos
    protected function casts(): array
    {
        return [
            'password' => 'hashed', // Asegura que las contraseñas se almacenen como hashes
        ];
    }

    // Relaciones
    public function rol()
    {
        return $this->belongsTo(Rol::class, 'id_rol');
    }

    public function lugares()
    {
        return $this->hasMany(Lugar::class, 'id_usuario');
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'id_usuario');
    }

    public function favoritos()
    {
        return $this->hasMany(Favorito::class, 'id_usuario');
    }

    public function pagos()
    {
        return $this->hasMany(Pago::class, 'id_usuario');
    }

    public function listas()
    {
        return $this->hasMany(Lista::class, 'id_usuario');
    }
}