<?php
class TopController extends Controller
{
    public $default_view_class = 'ProxyJsonView';

    public function index()
    {
        $user = new User;
        $user->set(array('name' => Param::get('name', 'John Doe')));
        $this->set('user', $user);
    }
}
