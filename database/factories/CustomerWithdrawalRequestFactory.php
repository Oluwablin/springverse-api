<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Models\Enums\RequestStatus;
use App\Models\Enums\RequestType;
use App\Models\CustomerWithdrawalRequest;

$factory->define(CustomerWithdrawalRequest::class, function (Faker $faker) {
    $RequestStatuses = [
        RequestStatus::APPROVED,
        RequestStatus::DECLINED,
        RequestStatus::PENDING,
        RequestStatus::DISBURSED
    ];
    $RequestTypes = [
        RequestType::BRANCH_FUND,
        RequestType::BRANCH_EXTRA_FUND,
        RequestType::DEFAULT_CANCELLATION,
        RequestType::VENDOR_PAYOUT
    ];
    $requestAmount = $faker->randomFloat(2, 10000, 10000000);
    $requestPaid = $faker->randomFloat(2, 10000, 5000000);

    return [
        'request_amount' => $faker-> $requestAmount,
        'request_balance' => $faker-> $requestAmount - $requestPaid,
        'request_status' => $RequestStatuses[array_rand($RequestStatuses)],
        'request_type' => $RequestTypes[array_rand($RequestTypes)],
        'request_date' => $faker->date(),
    ];
});
