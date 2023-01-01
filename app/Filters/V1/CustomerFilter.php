<?php 
namespace App\Filters\V1;
use App\Filters\LocalFilter;

class CustomerFilter extends LocalFilter{
    protected $pair_arr = [
        'name' => ['eq'],
        'email' => ['eq'],
        'city' => ['eq'],
        'state' => ['eq'],
        'type' => ['eq'],
        'postalCode' => ['eq', 'lt', 'gt'],
    ];
    protected $map_col = [
        'postalCode' => 'postal_code'
    ];
    protected $map_ops = [
        'eq' => '=',
        'lt' => '<',
        'gt' => '>',
    ];
    
}