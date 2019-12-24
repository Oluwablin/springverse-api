<?php
/**
 * Created by PhpStorm.
 * User: abraham
 * Date: 23/12/2019
 * Time: 9:25 PM
 */

namespace App\Repositories;


use App\Models\Enums\LoanApplicationStatus;
use App\Models\Loan;
use App\Repositories\Interfaces\LoanRepositoryInterface;

class LoanRepository implements LoanRepositoryInterface
{

    /**
     * Insert a loan in the database
     *
     * @param array $loanData
     * @return Loan
     */
    public function create(array $loanData): Loan
    {
        return Loan::create($loanData);
    }

    /**
     * Determine if a loan with the loan_identifier exists.
     *
     * @param int $identifier
     * @return bool
     */
    public function loanIdentifierExists(int $identifier): bool
    {
        return Loan::where('loan_identifier', $identifier)->exists();
    }

    /**
     * Update the application_state of a loan in the database.
     *
     * @param Loan $loan
     * @param string $applicationState
     * @return Loan
     */
    public function updateApplicationState(Loan $loan, string $applicationState): Loan
    {
        $loan->application_status = $applicationState;
        $loan->save();

        return $loan;
    }
}