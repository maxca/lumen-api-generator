<?php
namespace App\Repositories\{replace};

use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\{replace};

/**
 * Interface DemoInterface
 * @package App\Repositories\{replace}
 */
interface DemoInterface {


    /**
     * @return mixed
     */
    public function model();

    /**
     * @return mixed
     */
    public function getAll($filters =[], $page = 25, $orderBy = 'created_at', $sort = 'desc') : LengthAwarePaginator;

    /**
     * @return mixed
     */
    public function findById($id);

    /**
     * @return mixed
     */
    public function create(array $data) : {replace};
}