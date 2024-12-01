<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Nova\Metrics\CountNewSupplier;
use Laravel\Nova\Fields\Email;
use Laravel\Nova\Fields\Number;
use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;

class Supplier extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Supplier>
     */
    public static $model = \App\Models\Supplier::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'name',
        'rtn',
        'email',
    ];

    /**
     * Get the plural label for the resource.
     *
     * @return string
     */
    public static function label()
    {
        return __('Proveedores');
    }

    /**
     * Get the singular label for the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __('Proveedor');
    }

    /**
     * Get the text for the create resource button.
     *
     * @return string|null
     */
    public static function createButtonLabel()
    {
        return __('Crear Proveedores');
    }

    /**
     * Get the text for the update resource button.
     *
     * @return string|null
     */
    public static function updateButtonLabel()
    {
        return __('Actualizar Proveedores');
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Proveedor', 'name')
                ->sortable()
                ->rules('required', 'max:100')
                ->placeholder('Nombre Completo'),
            Number::make('DNI/RTN', 'rtn')
                ->rules('required', 'digits:14') // Valida que tenga exactamente 14 dígitos
                ->placeholder('Ingrese el DNI o el RTN'),                  
            Email::make('Correo electrónico', 'email')
                ->rules('email', 'max:254')
                ->sortable()
                ->placeholder('Correo Electrónico')
                ->creationRules('unique:customers,email')
                ->updateRules('unique:customers,email,{{resourceId}}'),
            Select::make('Pais', 'country_id')                
                ->options(
                    Country::all()->pluck('name', 'id')->toArray()
                )
                ->placeholder('Seleccione un país')
                ->displayUsingLabels(),        
            Select::make('Departamento', 'departamento_id')
                ->options(
                    State::all()->pluck('name', 'id')->toArray()
                )
                ->placeholder('Seleccione un departamento')
                ->displayUsingLabels(),            
            Select::make('Municipio', 'municipio_id')
                ->options(
                    City::all()->pluck('name', 'id')->toArray()
                )
                ->placeholder('Seleccione un municipio')
                ->displayUsingLabels(),        
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [
            new CountNewSupplier()
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [
        ];
    }
}
