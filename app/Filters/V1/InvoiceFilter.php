<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class InvoiceFilter extends ApiFilter
{
    protected $safeParams =[
        'name'=>['eq'],
        'type'=>['eq'],
        'email'=>['eq'],
        'address'=>['eq'],
        'city'=>['eq'],
        'state'=>['eq']
    ];

    protected $columnMap=[
        'state'=>'state'
    ];

    protected $operatorMap=[
        'eq'=>'=',
        'gt'=>'>',
        'gte'=>'>=',
        'lt'=>'<',
        'lte'=>'<='
    ];
 
}
