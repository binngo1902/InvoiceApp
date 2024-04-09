<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    /**
     * The InvoiceItem model represents an invoice item.
     *
     * @var string $table The name of the database table for invoice items.
     */
    protected $table = 'invoice_items';
}
