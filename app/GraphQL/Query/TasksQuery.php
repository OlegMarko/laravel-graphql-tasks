<?php

namespace App\GraphQL\Query;

use App\Task;
use GraphQL;
use Folklore\GraphQL\Support\Query;
use GraphQL\Type\Definition\Type;

class TasksQuery extends Query
{
    /**
     * @var array
     */
    protected $attributes = [
        'name' => 'tasks'
    ];

    /**
     * @return GraphQL\Type\Definition\ListOfType|null
     */
    public function type()
    {
        return Type::listOf(GraphQL::type('Task'));
    }

    /**
     * @param $root
     * @param $args
     *
     * @return Task[]|\Illuminate\Database\Eloquent\Collection
     */
    public function resolve($root, $args)
    {
        return Task::all();
    }
}