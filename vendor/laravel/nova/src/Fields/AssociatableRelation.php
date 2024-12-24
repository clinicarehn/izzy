<?php

namespace Laravel\Nova\Fields;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Http\Requests\NovaRequest;

trait AssociatableRelation
{
    use SupportsRelatableQuery;

    /**
     * The callback that should be run to associate relations.
     *
     * @var (callable(\Laravel\Nova\Http\Requests\NovaRequest, \Illuminate\Contracts\Database\Eloquent\Builder):(\Illuminate\Contracts\Database\Eloquent\Builder))|null
     */
    public $relatableQueryCallback;

    /**
     * Determines if the display values should be automatically sorted.
     *
     * @var (callable(\Laravel\Nova\Http\Requests\NovaRequest):(bool))|bool
     */
    public $reordersOnAssociatableCallback = true;

    /**
     * Determine if the display values should be automatically sorted when rendering associatable relation.
     */
    public function shouldReorderAssociatableValues(NovaRequest $request): bool
    {
        if (is_callable($this->reordersOnAssociatableCallback)) {
            return call_user_func($this->reordersOnAssociatableCallback, $request);
        }

        return $this->reordersOnAssociatableCallback;
    }

    /**
     * Determine reordering on associatables.
     *
     * @return $this
     */
    public function dontReorderAssociatables()
    {
        $this->reordersOnAssociatableCallback = false;

        return $this;
    }

    /**
     * Determine reordering on associatables.
     *
     * @param  (callable(\Laravel\Nova\Http\Requests\NovaRequest):bool)|bool  $value
     * @return $this
     */
    public function reorderAssociatables(callable|bool $value = true)
    {
        $this->reordersOnAssociatableCallback = $value;

        return $this;
    }

    /**
     * Determine the associate relations query.
     *
     * @param  (callable(\Laravel\Nova\Http\Requests\NovaRequest, \Illuminate\Contracts\Database\Eloquent\Builder):(\Illuminate\Contracts\Database\Eloquent\Builder))|null  $callback
     * @return $this
     */
    public function relatableQueryUsing(?callable $callback)
    {
        $this->relatableQueryCallback = $callback;

        return $this;
    }

    /**
     * Applies the relatableQueryCallback if applicable or fallbacks to calling relateQuery method on related resource.
     *
     * @param  class-string<\Laravel\Nova\Resource>  $resourceClass
     * @return void
     */
    protected function applyAssociatableCallbacks(Builder $query, NovaRequest $request, string $resourceClass, Model $model)
    {
        if (is_callable($this->relatableQueryCallback)) {
            call_user_func($this->relatableQueryCallback, $request, $query);

            return;
        }

        forward_static_call(
            $this->relatableQueryCallable($request, $resourceClass, $model),
            $request, $query, $this
        );
    }
}
