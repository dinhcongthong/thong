<?php

namespace App\Http\Controllers;

use App\Exports\LocationExport;
use App\Imports\LocationImport;
use App\Jobs\TestJob;
use App\Mail\TestEmail;
use App\Models\UserIp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class ThongController extends Controller
{
    // private $locationImport;

    public function __construct(LocationImport $locationImport)
    {
        // $this->locationImport = $locationImport;
    }
    public function thong()
    {
        $job = new TestJob();
        dispatch($job);
        // TestJob::dispatch($message, $users)->delay(now()->addMinute(1));
        return 34234;
    }

    public function testImport(Request $request)
    {
        $request->ips();
        // return $request->all();
        $fileImport = $request->file('file_import');

        if ($request->isMethod('POST')) {
            // Excel::filter('chunk')->load($fileImport)->chunk(5000, function ($results) {
            //     foreach ($results as $row) {
            //         $import = new LocationImport($row->toArray());
            //         $import->setChunk($this->currentChunk);
            //         Excel::queueImport($import);
            //     }
            // });
            // Excel::import(new LocationImport, $fileImport);
            Excel::queueImport(new LocationImport, $fileImport);
            return 'Success!';
        }
        return view('import');
    }

    public function testExport(Request $request)
    {
        if ($request->isMethod("POST")) {
            // (new LocationExport)->store('thong.csv');
            // return response()->download(public_path('thong.csv'));

            (new LocationExport)->store(public_path('location.csv'));
            return 'export started!';

            // (new LocationExport)->queue(public_path('location.csv'))->chain([
            //     Mail::to('dinhcongthong97y@gmail.com')->send(new TestEmail(public_path('location.csv')))
            // ]);
        }
        return view('export');
    }

    public function ddosTesting (Request $request) {
        $ip = $request->ip();
        if (!is_null($ip)) {
            UserIp::create(['ip' => $ip]);
        }
        $user = UserIp::all();
        return view('welcome', compact('user'));
    }
}
