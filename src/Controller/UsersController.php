<?php

namespace App\Controller;
use App\Controller\AppController;

class UsersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash');
        //$this->loadComponent('Flash'); // Include the FlashComponent
    }

    public function index()
    {
        $this->set('users', $this->Users->find('all'));
    }

    public function view($id)
    {
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }
    public function register()
    {
        $user = $this->Users->newEntity();
        if($this->request->is('post'))
        {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            //$user->user_id = 1;
            if($this->Users->save($user))
            {
                $this->Flash->success('Your have regist successfull');
                return $this->redirect(['action'=>'index']);
            }
            else
            {
                $this->Flash->error("Your information 's invalid");
            }
        }
        $this->set('user',$user);
    }

    public function login()
    {
        if($this->request->is('post')) {
            $email = $this->request->getData('email');
            $password = $this->request->getData('password');
            $user = $this->Users
                ->find()
                ->where(['email' => $email,'password' => $password])
                ->first()
            ;
            //$user = $this->Users->find();
            if ($user)
            {
                $this->Auth->setUser($user);
               return $this->redirect(['controller'=>'Articles', 'action'=>'index']);
            }
            //$this->Flash->error(__('Invalid username or password, try again'));
        }

    }
}
