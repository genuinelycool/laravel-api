<?php

// namespace App\Services\V1;
namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

// class CustomerQuery {
class InvoicesFilter extends ApiFilter {
    // $table->integer('customer_id');
    // $table->integer('amount');
    // $table->string('status');       // Billed, Paid, Void
    // $table->dateTime('billed_date');
    // $table->dateTime('paid_date')->nullable();

    protected $safeParams = [
        'CustomerId' => ['eq'],
        'amount' => ['eq', 'lt', 'lte', 'gte'],
        'status' => ['eq', 'ne'],
        'billedDate' => ['eq', 'lt', 'lte', 'gte'],
        'paidDate' => ['eq', 'lt', 'lte', 'gte']
    ];

    protected $columnMap = [
        'CustomerId' => 'customer_id',
        'billedDate' => 'billed_date',
        'paidDate' => 'paid_date'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!='
    ];
}
