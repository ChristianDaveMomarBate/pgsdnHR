<?php

use App\Http\Controllers\LeaveCredit\LeaveCardController;
use App\Http\Controllers\LeaveCredit\LeaveController;
use App\Http\Controllers\LeaveCredit\LeaveSkipController;
use App\Http\Controllers\LeaveCredit\LeaveDirectDeductionController;
use App\Http\Controllers\LeaveCredit\LeaveApplicationController;



// leave records
Route::middleware(['auth'])->prefix('leaves')->group(function () {

    //employee list for leave viewing
    Route::get('/employees', [LeaveController::class, 'get_employees'])->name('leave.getEmployees');
    

    // view leave records dashboard
    Route::get('/', [LeaveController::class, 'index'])->name('leave.index');

    // view leave records by employee
    Route::get('/view/{id}', [LeaveController::class, 'leave_record'])->name('leave.view');

    // view leave records info
    Route::get('/viewRecord/{record_id?}', [LeaveController::class, 'viewRecord'])->name('leave.viewRecord');

    // destroy leave record
    Route::post('/record/destroy', [LeaveController::class, 'destroy'])->name('leave.destroy');

    // leave record edit
    Route::post('/record/update', [LeaveController::class, 'update'])->name('leave.update');

    // leaves stores
    Route::post('/record/store/deduction', [LeaveController::class, 'store_deduction'])->name('leave.store.deduction');
    Route::post('/record/store/undertime', [LeaveController::class, 'store_undertime'])->name('leave.store.undertime');
    Route::post('/record/store/others', [LeaveController::class, 'store_others'])->name('leave.store.others');
    Route::post('/record/store/recall', [LeaveController::class, 'store_recall'])->name('leave.store.recall');
    Route::post('/record/store/md-monetization', [LeaveController::class, 'store_md_monetization'])->name('leave.store.md_monetization');
    Route::post('/record/store/sd-monetization', [LeaveController::class, 'store_sd_monetization'])->name('leave.store.sd_monetization');

    
    // generate of leave card per employee
    Route::get('/record/{id}', [LeaveCardController::class, 'generate'])->name('leave.generate');

    //offset records routes
    Route::post('/record/store/offset', [LeaveController::class, 'store_offset'])->name('leave.store.offset');
    Route::post('/record/destroy/offset', [LeaveController::class, 'destroy_offset'])->name('leave.destroy.offset');

    
    // leaves skips routes
    Route::get('/skips/{id?}', [LeaveSkipController::class, 'view'])->name('leave.skips.view');
    Route::post('/skips/store', [LeaveSkipController::class, 'store_skips'])->name('leave.skips.store');
    Route::post('/skips/destroy', [LeaveSkipController::class, 'destroy_skips'])->name('leave.skips.destroy');


    // leave direct deductions routes
    Route::post('/direct/store', [LeaveDirectDeductionController::class, 'store'])->name('leave.direct.store');
    Route::get('/direct/destroy/{id?}', [LeaveDirectDeductionController::class, 'destroy'])->name('leave.direct.destroy');
    Route::get('/direct/viewall/{id?}', [LeaveDirectDeductionController::class, 'index_list'])->name('leave.direct.viewall');

    // all leaves records viewing
    Route::get('/leaves/all', [LeaveController::class, 'all_leave_records'])->name('leave.all');
    Route::get('/leaves/all/list', [LeaveController::class, 'leave_all_list'])->name('leave_all_list');

   //Leave Application
    Route::get('/leave-application', [leaveApplicationController::class, 'leave_application_index'])->name('leave_application.index');
    Route::get('/leave-application/fetch', [leaveApplicationController::class, 'leave_application_fetch'])->name('leave_application.fetch');
    Route::post('/leaves/leave-application/submission', [LeaveController::class, 'leave_application_submission'])->name('leave_application.submission');
});
