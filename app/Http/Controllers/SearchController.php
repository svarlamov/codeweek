<?php

namespace App\Http\Controllers;

use App\Country;
use App\Event;
use App\Filters\EventFilters;
use App\Resource;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function search(EventFilters $filters, Request $request)
    {


        $events = $this->getEvents($filters);
        $selected_themes = $request->input('theme') ?: [];
        $selected_audiences = $request->input('audience') ?: [];

        return view('event.search', compact(['events', 'selected_themes', 'selected_audiences']));
    }

    protected function getEvents(EventFilters $filters)
    {

        $events = Event::where('status', 'like', 'APPROVED')->filter($filters);

        return $events->paginate(20);
    }



    public function show()
    {
        $resources = Resource::search(request('q'))->paginate(25);
        if (request()->expectsJson()) {
            return $resources;
        }
        return view('resources.index', [
            'resources' => $resources
        ]);
    }

}
