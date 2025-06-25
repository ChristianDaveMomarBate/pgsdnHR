<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;


class TransferLeaveRecords extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:transfer-leave-records';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';


        public function handle()
    {
        $this->info('Starting transfer from hrmps.leaves to hr_system.leave_applications...');

        $records = DB::table('hrmps.leaves')->get();

        $this->info('Transferring ' . $records->count() . ' records...');

        $this->output->progressStart($records->count());

        foreach ($records as $record) {
            DB::table('hr_system.leave_applications')->insert([
                'id'                        => $record->id,
                'leaveNumber'              => $record->leaveNumber,
                'sgCode'                   => $record->sgCode,
                'leave_series_no'          => $record->series,
                'employee_id'              => $record->empID,
                'position'                 => $record->positionID,
                'salary'                   => $record->salary,
                'leave_application_id'     => $record->leaveID,
                'leave_reason'             => $record->leaveReason,
                'leave_spent'              => $record->leaveSpent,
                'leave_date_file'          => $record->dateFiled,
                'leave_start_date'         => $record->startDate,
                'leave_end_date'           => $record->endDate,
                'leave_pay_type'           => $record->payType,
                'leave_days_of_application'=> $record->days,
                'leave_credit_deductions'  => $record->taken,
                'office_designation_id'    => $record->officeID,
                'released_to'              => $record->releaseTo,
                'released_by'              => null,
                'status'                   => '1',
                'signatoryPhase1'          => $record->sigName1,
                'signatoryPhase2'          => $record->sigName2,
                'signatoryPhase3'          => $record->sigName3,
                'created_at'               => now(),
                'updated_at'               => now(),
            ]);

            $this->output->progressAdvance();
        }

        $this->output->progressFinish();

        $this->info('Transfer complete!');
    }

}
