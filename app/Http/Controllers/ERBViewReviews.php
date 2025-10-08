<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EvaluatedReviews;
use App\Models\User;
use App\Models\ReviewerFile;
use App\Models\ResearchInformation;
use App\Models\FormsTable;
use App\Models\InitialReview;
class ERBViewReviews extends Controller
{
    public function index()
    {
        // Fetch all evaluated reviews with related protocol, reviewer, and PI info
        $evaluatedReviews = EvaluatedReviews::with([
            'reviewer',
            'protocol.researchInformation.user',
        ])->get();

        return view('erb.view-reviews', compact('evaluatedReviews'));
    }
    public function showFiles($protocolId, $reviewerId)
    {
        $files = ReviewerFile::where('protocol_ID', $protocolId)
            ->where('reviewer_ID', $reviewerId)
            ->get();

        $reviewer = User::where('user_ID', $reviewerId)->first();

        return view('erb.viewing-file', compact('files', 'reviewer'));
    }
}
