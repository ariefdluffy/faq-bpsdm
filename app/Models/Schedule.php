<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $table ='schedules';

    protected $fillable = [
        'nama_pelatihan',
        'tanggal_buka',
        'link_regis',
        'pic_kegiatan',
        'link_grup'
    ];
}
