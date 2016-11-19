<?php

namespace Middlewares\Tests;

use Middlewares\Skeleton;
use Zend\Diactoros\ServerRequest;
use Zend\Diactoros\Response;
use mindplay\middleman\Dispatcher;

class SkeletonTest extends \PHPUnit_Framework_TestCase
{
    public function testSkeleton()
    {
        $request = new ServerRequest();
        $response = (new Dispatcher([
            new Skeleton(),
            function () {
                return new Response();
            },
        ]))->dispatch($request);

        $this->assertInstanceOf('Psr\\Http\\Message\\ResponseInterface', $response);
    }
}
