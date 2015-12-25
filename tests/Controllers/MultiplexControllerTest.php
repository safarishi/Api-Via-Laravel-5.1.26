<?php


use App\Http\Controllers\MultiplexController;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MultiplexControllerTest extends TestCase
{
    public function testGetWebServiceClient()
    {
        $response = MultiplexController::getWebServiceClient();

        $this->assertEquals('object', gettype($response));
    }
}
