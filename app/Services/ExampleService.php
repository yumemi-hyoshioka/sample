<?php

namespace App\Services;

use App\Http\Requests\ExampleRequest;
use App\Http\Responses\ExampleResponse;

class ExampleService
{
    public function get(ExampleRequest $request): array
    {
        return [
            'fragranceCode' => 'aaaaaa',
            'fragranceName' => 'nganga',
            'words' => [
                'word' => 'word1',
                'score' => '0',
                'word' => 'word2',
                'score' => '100',
            ]
        ];

    }
}
