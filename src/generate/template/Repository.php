<?php

namespace App\Repositories;

use App\Contracts\BaseRepository;
use App\Models\{replace};
use App\Exceptions\GeneralException;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 * Class {replace}Repository.
 */
class {replace}Repository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return {replace}::class;
    }

    /**
     * @param int    $page
     * @param string $orderBy
     * @param string $sort
     *
     * @return mixed
     */
    public function getAll($filters =[], $page = 25, $orderBy = 'created_at', $sort = 'desc') : LengthAwarePaginator
    {
        ${replace_sm} = $this->model->orderBy($orderBy, $sort);

        if (isset($filters['name'])) {

            ${replace_sm}->where('name' ,'like', '%'. $filters['name'].'%');
        }

        $result = ${replace_sm}->paginate($page);

        return $result;


    }

    /**
     * @param int    $id
     *
     * @return mixed
     */
    public function findById($id)
    {
        return $this->model
            ->find($id);
    }

    /**
     * @param array $data
     *
     * @return {replace}
     * @throws \Exception
     * @throws \Throwable
     */
    public function create(array $data) : {replace}
    {
        return  $this->model->create([
            'name' => $data['name'],
        ]);
    }

    /**
     * @param {replace}  ${replace}
     * @param array $data
     *
     * @return {replace}
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     */
    public function update($model, array $data) : {replace}
    {
        if ($model) {
            $model->update($data);
        }
        return $model;
    }

    /**
     * @param  $id
     *
     * @return {replace}
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     */
    public function destroy($model)
    {
        if ($model) {
            $model->delete();
        }
        return $model;
    }
}
