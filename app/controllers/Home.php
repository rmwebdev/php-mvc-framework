<?php

class Home extends Controller {

    public function __construct($controller, $action){
        parent::__construct($controller, $action);
    }

    public function indexAction() 
    {
        $db = DB::getInstance();
        $data = [
            'fname' => 'Hiero',
            'lname' => 'Nabit',
            'email' => 'roninabit@gmail.com',
            'phone' => '+627872710300'
        ];

        $contact = $db->delete('contacts',2);
       $this->view->render('home/index');
    }
}