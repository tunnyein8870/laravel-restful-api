<?php 
namespace App\Filters\V1;
use App\Filters\LocalFilter;

class InvoiceFilter extends LocalFilter{
    protected $pair_arr = [
        'customerId' => ['eq', 'ne'],
        'amount' => ['eq', 'gt', 'lt', 'lte', 'gte'],
        'status' => ['eq', 'gt', 'lt', 'lte', 'gte'],
        'billedDate' => ['eq', 'gt', 'lt', 'lte', 'gte'],
        'paidDate' => ['eq', 'gt', 'lt', 'lte', 'gte'],
    ];
    protected $map_col = [
        'customerId' => 'customer_id',
        'billedDate' => 'billed_date',
        'paidDate' => 'paid_date',
    ];
    protected $map_ops = [
        'eq' => '=',
        'lt' => '<',
        'gt' => '>',
        'lte' => '<=',
        'gte' => '>=',
        'ne' => '!=',
    ];
}