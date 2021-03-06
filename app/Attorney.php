<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Attorney extends Model
{
    
    use Notifiable;
    

    protected $fillable = [
        'nombres', 'apellidoPaterno', 'apellidoMaterno','dni','sexo','est_civil','direccion','celular'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       'remember_token',
    ];

}
