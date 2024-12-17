<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Sector;
use App\Models\Chapter;
use App\Models\Section;
use App\Models\Item;

class SearchController extends Controller
{
    public function searchExercises()
    {
        $searchTerm = request('search');

        $sectorResults = Sector::search($searchTerm)->get();
        $chapterResults = Chapter::search($searchTerm)->get();
        $sectionResults = Section::search($searchTerm)->get();
        $itemResults = Item::search($searchTerm)->get();
        $exerciseResults = Exercise::search($searchTerm)->get();

        return view('search', compact('searchTerm','sectorResults', 'chapterResults', 'sectionResults', 'itemResults', 'exerciseResults'));
    }
}
