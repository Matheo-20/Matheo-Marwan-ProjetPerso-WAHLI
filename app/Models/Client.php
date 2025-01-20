<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 * 
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $nom
 * @property string $prenom
 * @property string $email
 * @property string $numero-tel
 *
 * @package App\Models
 */
class Client extends Model
{
	protected $table = 'clients';

	protected $fillable = [
		'nom',
		'prenom',
		'email',
		'numero-tel'
	];
}
