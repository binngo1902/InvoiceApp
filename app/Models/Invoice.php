<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    /**
     * The Invoice model represents an invoice.
     *
     * @var string $table The name of the database table for invoices.
     */
    protected $table = 'invoices';
}
