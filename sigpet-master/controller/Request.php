<?php
class Request
{
    protected $request;
    public function __construct()
    {
        $this->request = $_REQUEST;
    }
    public function __get($id)
    {
        if (isset($this->request[$id])) {
            return $this->request[$id];
        }
        return false;
    }
}
