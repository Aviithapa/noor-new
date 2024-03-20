<?php

namespace App\Repositories\SahakariAccountForm;

use App\Models\SahakariAccountForm;
use App\Repositories\Repository;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class SahakariAccountFormRepository extends Repository
{

    /**
     * SahakariAccountFormRepository constructor.
     * @param SahakariAccountForm  $model
     */
    public function __construct(SahakariAccountForm $model)
    {
        parent::__construct($model);
    }

    /**
     * @param Request $request
     * @param array $columns
     * @return LengthAwarePaginator
     */
    public function getPaginatedList(Request $request, $type, array $columns = array('*')): LengthAwarePaginator
    {
        $limit = $request->get('limit', config('app.per_page'));
        return $this->model->newQuery()
            ->latest()
            ->paginate($limit);
    }
}
