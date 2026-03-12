<?php

namespace App\Http\Controllers;

use App\Models\ScanLogs;
use Illuminate\Http\Request;

class LogsController extends Controller
{
    public function index()
    {
        return view('pages.logs.index');
    }

    public function logs_data(Request $request)
    {
        $query = ScanLogs::with('user');

        if ($request->filled('mode')) {
            $query->where('Mode', $request->mode);
        }

        if ($request->filled('user')) {
            $query->where('UserID', $request->user);
        }

        if ($request->filled('date')) {
            $query->whereDate('created_at', $request->date);
        }

        if ($request->filled('search.value')) {
            $search = $request->input('search.value');

            $query->whereHas('user', function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%");
            });
        }

        return datatables()
            ->eloquent($query)
            ->addColumn('actions', function ($log) {
                return '
                    <a href="" class="btn btn-sm btn-soft-primary">
                        <i class="bi bi-eye"></i> View
                    </a>
                ';
            })
            ->addColumn('name', function ($log) {
                return optional($log->user)->name;
            })
            ->editColumn('mode', function ($log) {
                if ($log->Mode == 1) {
                    return '<span class="badge bg-success-subtle text-success fw-semibold px-3 py-2">IN</span>';
                }
                return '<span class="badge bg-danger-subtle text-danger fw-semibold px-3 py-2">OUT</span>';
            })
            ->editColumn('created_at', function ($log) {
                return $log->created_at->format('M d, Y h:i A');
            })
            ->rawColumns(['actions','mode'])
            ->make(true);
    }
}
