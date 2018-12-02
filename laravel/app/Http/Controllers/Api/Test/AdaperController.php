<?php

namespace App\Http\Controllers\Api\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdaperController extends Controller
{
    //

    public function testCanTurnPageOnBook()
    {
        $book = new Book();
        $book->open();
        $book->turnPage();

        $this->assertEquals(2, $book->getPage());
    }

    public function testCanTurnPageOnKindleLikeInANormalBook()
    {
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);

        $book->open();
        $book->turnPage();

        $this->assertEquals(2, $book->getPage());
    }
}

interface BookInterface
{
    public function turnPage();

    public function open();

    public function getPage(): int;
}

class Book implements BookInterface
{
    /**
    * @var int
    */
    private $page;

    public function open()
    {
        $this->page = 1;
    }

    public function turnPage()
    {
        $this->page++;
    }

    public function getPage(): int
    {
        return $this->page;
    }
}

/**
* 这里是一个适配器. 注意他实现了 BookInterface,
* 因此你不必去更改客户端代码当使用 Book
*/
class EBookAdapter implements BookInterface
{
    /**
    * @var EBookInterface
    */
    protected $eBook;

    /**
    * @param EBookInterface $eBook
    */
    public function __construct(EBookInterface $eBook)
    {
        $this->eBook = $eBook;
    }

    /**
    * 这个类使接口进行适当的转换.
    */
    public function open()
    {
        $this->eBook->unlock();
    }

    public function turnPage()
    {
        $this->eBook->pressNext();
    }

    /**
    * 注意这里适配器的行为： EBookInterface::getPage() 将返回两个整型，除了 BookInterface
    * 仅支持获得当前页，所以我们这里适配这个行为
    *
    * @return int
    */
    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }
}

interface EBookInterface
{
    public function unlock();

    public function pressNext();

    /**
    * 返回当前页和总页数，像 [10, 100] 是总页数100中的第10页。
    *
    * @return int[]
    */
    public function getPage(): array;
}

/**
* 这里是适配过的类. 在生产代码中, 这可能是来自另一个包的类，一些供应商提供的代码。
* 注意它使用了另一种命名方案并用另一种方式实现了类似的操作
*/
class Kindle implements EBookInterface
{
    /**
    * @var int
    */
    private $page = 1;

    /**
    * @var int
    */
    private $totalPages = 100;

    public function pressNext()
    {
        $this->page++;
    }

    public function unlock()
    {
    }

    /**
    * 返回当前页和总页数，像 [10, 100] 是总页数100中的第10页。
    *
    * @return int[]
    */
    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}
