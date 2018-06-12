<?php

namespace App\GraphQL\Mutation;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use App\Task;

class NewTaskMutation extends Mutation
{
    /**
     * @var array
     */
    protected $attributes = [
        'name' => 'newTask'
    ];

    /**
     * @return null
     */
    public function type()
    {
        return GraphQL::type('Task');
    }

    /**
     * @return array
     */
    public function args()
    {
        return [
            'title' => [
                'name'  => 'title',
                'type'  => Type::nonNull(Type::string()),
                'rules' => [
                    'required'
                ]
            ]
        ];
    }

    /**
     * @param $root
     * @param $args
     *
     * @return Task
     */
    public function resolve($root, $args)
    {
        return Task::create([
            'title' => $args['title']
        ]);
    }
}