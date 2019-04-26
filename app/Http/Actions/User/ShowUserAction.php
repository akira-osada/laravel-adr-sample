<?php

namespace App\Http\Actions\User;

use App\Http\Responder\ShowUserResponder;
use Domain\Usecase\ShowUserUsecase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
/**
 * Class ShowSalesReportAction
 * @package App\Http\Actions
 */
class ShowUserAction extends Controller
{
    /**
     * @var ShowUserUsecase
     */
    private $use_case;

    /**
     * @var ShowUserResponder
     */
    private $responder;

    public function __construct(ShowUserUsecase $use_case, ShowUserResponder $responder)
    {
        $this->use_case = $use_case;
        $this->responder = $responder;
    }

    /**
     * @Get("/users/{id}",middleware="web")
     * @param Request $request
     * @return \App\Http\Resources\ShowUserResource
     */
    public function __invoke(Request $request)
    {
        \Log::debug('test');
        $report = $this->use_case->run($request->all());
        return $this->responder->emit($report);
    }
}
