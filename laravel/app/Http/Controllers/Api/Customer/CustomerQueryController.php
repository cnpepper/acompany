<?php

namespace App\Http\Controllers\Api\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerQueryController extends Controller
{
    /**
     * @var Decorator\Webservice
     */
    private $service;

    /** 
    * 传入字符串 'foobar' 。
    */
    protected function setUp()
    {
        $this->service = new Webservice(array());
    }

    /**
    * 测试 JSON 装饰者。
    * 这里的 assertEquals 是为了判断返回的结果是否符合预期。
    */
    public function index()
    {   
        $this->setUp();
        $service = new JsonRenderer2(new JsonRenderer($this->service));
        var_dump($service->renderData());
    }
}

/**
* 创建渲染接口。
* 这里的装饰方法 renderData() 返回的是字符串格式数据。
*/
interface RenderableInterface
{
    public function renderData(): array;
}

/**
* 创建 Webservice 服务类实现 RenderableInterface。
* 该类将在后面为装饰者实现数据的输入。
*/
class Webservice implements RenderableInterface
{
    /**
    * @var string
    */
    private $data;

    /**
    * 传入字符串格式数据。
    */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
    * 实现 RenderableInterface 渲染接口中的 renderData() 方法。
    * 返回传入的数据。
    */
    public function renderData(): array
    {
        return $this->data;
    }
}

/**
 * 装饰者必须实现渲染接口类 RenderableInterface 契约，这是该设计
 * 模式的关键点。否则，这将不是一个装饰者而只是一个自欺欺人的包
 * 装。
 * 
 * 创建抽象类 RendererDecorator （渲染器装饰者）实现渲染接口。
 */
abstract class RendererDecorator implements RenderableInterface
{
    /**
     * @var RenderableInterface
     * 定义渲染接口变量。
     */
    protected $wrapped;

    /**
     * @param RenderableInterface $renderer
     * 传入渲染接口类对象 $renderer。
     */
    public function __construct(RenderableInterface $renderer)
    {
        $this->wrapped = $renderer;
    }
}


/**
* 创建 Json 修饰者并继承抽象类 RendererDecorator 。
*/
class JsonRenderer extends RendererDecorator
{
    /**
    * 对传入的渲染接口对象进行处理，生成 JSON 数据。
    */
    public function renderData(): array
    {
        $value = $this->wrapped->renderData();
        $value['woshi'] = 123; 
        return $value;
    }
}

/**
* 创建 Json 修饰者并继承抽象类 RendererDecorator 。
*/
class JsonRenderer2 extends RendererDecorator
{
    /**
    * 对传入的渲染接口对象进行处理，生成 JSON 数据。
    */
    public function renderData(): array
    {
        $value = $this->wrapped->renderData();
        $value['tsshi'] = 123; 
        return $value;
    }
}
