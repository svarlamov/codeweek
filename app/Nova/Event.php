<?php

namespace App\Nova;


use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Country;

class Event extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Event';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'title'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('Title')->sortable(),
            Text::make('Description')->sortable()->onlyOnDetail(),
            Text::make('Organizer')->sortable()->onlyOnDetail(),
            Text::make('codeweek_for_all_participation_code')->sortable()->onlyOnDetail(),

            BelongsTo::make('User', 'owner')->onlyOnDetail(),

            Country::make('Country', 'country_iso'),

            Select::make('Status')->options([
                'APPROVED' => 'Approved',
                'REJECTED' => 'Rejected',
                'PENDING' => 'Pending',
            ])

        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [new Metrics\EventsPerDay];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [
            new Filters\EventCountry,
            new Filters\EventStatus,
        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function actions(Request $request)
    {

      /*  return [
            new Actions\ApproveEvent
        ];*/

      return [
          (new Actions\ApproveEvent)->canSee(function ($request) {
              return ($request->user()->hasRole('super admin') || $request->user()->hasRole('ambassador'));

          })->canRun(function($request){
              return ($request->user()->hasRole('super admin') || $request->user()->hasRole('ambassador'));
          })
      ];


    }
}
