<?php

namespace App\Repositories\CMS\Post;

use App\Models\Post;
use App\Repositories\Repository;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class PostRepository extends Repository
{

    /**
     * MenuRepository constructor.
     * @param Post $post
     */
    public function __construct(Post $post)
    {
        parent::__construct($post);
    }

    /**
     * @param Request $request
     * @param array $columns
     * @return LengthAwarePaginator
     */
    public function getPaginatedList(Request $request, $type, $second_type = null, array $columns = array('*')): LengthAwarePaginator
    {
        $limit = $request->get('limit', config('app.per_page'));

        // Initialize the query on the model
        $query = $this->model->newQuery();

        // Add a filter to the query for the provided type
        $query->where('type', $type);

        // Check if $second_type is provided and not null
        if ($second_type !== null) {
            // Add an additional filter to the query for the provided second_type
            $query->orWhere('type', $second_type);
        }

        // Order the query results by the latest
        $query->latest();

        // Paginate the query results
        return $query->paginate($limit, $columns);
    }
}
