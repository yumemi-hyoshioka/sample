<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Http\Requests\ExampleRequest;
use App\Facades\ExampleService;

class ExampleController extends Controller
{
    /**
     * リクエストをパラメータを受け取ることでコントローラに
     * 入る前にバリデーションチェックができます。
     * わざわざコントローラーにバリデーションチェックすると無駄なロジックが増えるため
     */
    public function get(ExampleRequest $request) :JsonResponse
    {
        /**
         * 基本的にコントローラにはビジネスロジックは明記しません。
         * 記載しても５行程度までにするのがベストです。
         * ここではFacadeを使いサービスを呼んでいます。
         * コンストラクタインジェクションでもいいのですが、コンストラクタが肥大化するため
         * Facadeを使っています。
         */
        return response()->json(ExampleService::get($request));
    }
}
