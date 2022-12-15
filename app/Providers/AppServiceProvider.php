<?php

namespace App\Providers;
use Illuminate\Pagination\{Paginator, LengthAwarePaginator};
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\URL;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\{ServiceProvider, Arr};

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Collection::macro('paginate', function($perPage, $total = null, $page = null, $pageName = 'page') {
            $page = $page ?: LengthAwarePaginator::resolveCurrentPage($pageName);
            return new LengthAwarePaginator(
                $this->forPage($page, $perPage), $total ?: $this->count(), $perPage, $page, ['path' => LengthAwarePaginator::resolveCurrentPath(), 'pageName' => $pageName]
            );
        });

        Builder::macro('search', function ($attributes, ?string $searchTerm) {
            $searchTerm = '%'.$searchTerm.'%';
            $this->where(function (Builder $query) use ($attributes, $searchTerm) {
                foreach (Arr::wrap($attributes) as $attribute) {
                    $contains = str_contains($attribute, '.');
                    $query->when(
                        str_contains($attribute, '.'), function (Builder $query) use ($attribute, $searchTerm) {
                            [$relationName, $relationAttribute] = explode('.', $attribute);
                            $query->orWhereHas($relationName, function (Builder $query) use ($relationAttribute, $searchTerm) {
                                $query->where($relationAttribute, 'like', $searchTerm);
                            });
                        },  function (Builder $query) use ($attribute, $searchTerm) {
                            $query->orWhere($attribute, 'like', $searchTerm);
                        }
                    );
                }
            });

            return $this;
        });
    }
}
