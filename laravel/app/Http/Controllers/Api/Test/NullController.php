<?php

namespace App\Http\Controllers\Api\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NullController extends Controller
{
    //

    /**
     * 测试 NullLogger 对象，联系上文可以知道什么也没做。
     */
    public function testNullObject()
    {
        $service = new Service(new NullLogger());
        $this->expectOutputString('');
        $service->doSomething();
    }

    /**
     * 测试 PrintLogger 对象，联系上文可以知道在日记中写入了 DesignPatterns\Behavioral\NullObject\Service::doSomething 。
     */
    public function testStandardLogger()
    {
        $service = new Service(new PrintLogger());
        //$this->expectOutputString('We are in DesignPatterns\Behavioral\NullObject\Service::doSomething');
        $service->doSomething();
    }
}

/**
 * 创建服务类 Service 。
 */
class Service
{
    /**
     * @var LoggerInterface
     * 定义日记类对象。
     */
    private $logger;

    /**
     * @param LoggerInterface $logger
     * 传入日记类对象参数。
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * 做些什么。。。
     * 在日记中返回了 '我们在 Service: doSomething 里' 。
     */
    public function doSomething()
    {
        // 提示：这里你只是使用它，而不需要通过如：is_null() 检查 $logger 是否已经设置。
        $this->logger->log('We are in '.__METHOD__);
    }
}

/**
 * 重要特征：空日记必须像其他日记意向从这个接口继承。
 */
interface LoggerInterface
{
    public function log(string $str);
}

/**
 * 创建一个日记打印类实现日记接口。
 */
class PrintLogger implements LoggerInterface
{
    public function log(string $str)
    {
        echo $str;
    }
}

/**
 * 创建一个空日记类实现日记接口。
 */
class NullLogger implements LoggerInterface
{
    public function log(string $str)
    {
        // 什么也不用做
    }
}
