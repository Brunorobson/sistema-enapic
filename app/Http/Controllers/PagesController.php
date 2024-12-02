<?php

namespace App\Http\Controllers;

use App\Models\{Avaliation, Inscription, Submission, User};
use Illuminate\Support\Facades\{Auth, Cache};

class PagesController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $submissionsCountUser = Submission::where('user_id', $user->id)->count();
        $inscription = Inscription::where('user_id', $user->id)->first();
        $avaliationsCountUser = Avaliation::where('user_id', $user->id)->count();


        $inscriptionPending = Inscription::where('status', 'P')->count();
        $inscriptionAction = Inscription::where('status', 'I')->count();
        $submissionsCount = Submission::count();
        $AvaliationsCompleted = Submission::whereIn('status', ['AP', 'AC', 'RE'])->count();




        $statusOptions = Inscription::getStatus();

        return view('pages.dashboard-index', compact('submissionsCount', 'submissionsCountUser', 'inscriptionAction', 'inscriptionPending', 'AvaliationsCompleted', 'user', 'inscription', 'statusOptions', 'avaliationsCountUser'));
    }
}
