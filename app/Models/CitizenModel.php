<?php
namespace App\Models;
use CodeIgniter\Model;
class CitizenModel extends Model{
    protected $table = 'citizen';
    protected $primaryKey = 'national_id';
    protected $allowedFields = [
        'national_id',
        'names',
        'height',
        'weight',
        'dob'

    ];
}
?>