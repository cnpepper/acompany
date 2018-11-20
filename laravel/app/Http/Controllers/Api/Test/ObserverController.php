<?php

namespace App\Http\Controllers\Api\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ObserverController extends Controller
{
    //
    public function index()
    {
        $observer = new UserObserver();

        $user = new User();
        $user->attach($observer);

        $user->changeEmail('foo@bar.com');
        var_dump($observer->getChangedUsers());
    }
}

/**
 * User 实现观察者模式 (称为主体)，它维护一个观察者列表，
 * 当对象发生变化时通知  User。
 */
class User implements \SplSubject
{
/**
 * @var string
 */
    private $email;

/**
 * @var \SplObjectStorage
 */
    private $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    public function attach(\SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function changeEmail(string $email)
    {
        $this->email = $email;
        $this->notify();
    }

    public function notify()
    {
        /** @var \SplObserver $observer */
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}

class UserObserver implements \SplObserver
{
/**
 * @var User[]
 */
    private $changedUsers = [];

/**
 * 它通常使用  SplSubject::notify()  通知主体
 *
 * @param \SplSubject $subject
 */
    public function update(\SplSubject $subject)
    {
        $this->changedUsers[] = clone $subject;
    }

/**
 * @return User[]
 */
    public function getChangedUsers(): array
    {
        return $this->changedUsers;
    }
}
