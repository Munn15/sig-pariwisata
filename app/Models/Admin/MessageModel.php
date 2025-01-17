<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class MessageModel extends Model
{
    protected $table = 'messages';
    protected $primaryKey = 'id_messages';
    protected $allowedFields = ['nama', 'email', 'message', 'subscribe', 'created_at'];
}
