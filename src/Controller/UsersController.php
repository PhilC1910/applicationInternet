<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Utility\Text;
use Cake\Mailer\Email;



/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Roles']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Roles']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
           $user['codeConfirmation'] = Text::uuid();
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                $this->confirmationEmail($user);
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
            public function login() {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            
            if ($user) {
                $this->Auth->setUser($user);
                if($user['verifies'] == false){
                   $this->Flash->error('Votre compte n\'est pas vérifier vours avez le droit à seulement regarder');  
                }
                 $role = $user['role_id'];
                 $this->dirigerVersPage($role);
            } else {
                $this->Flash->error('Votre identifiant ou votre mot de passe est incorrect.');
            }
        }
    }
    
    public function dirigerVersPage($role) {
   
        if ($role === 'admin'|| $role === 'client' || $role === 'agent de marketing' ) {
            return $this->redirect(['controller' => 'BillboardsHired', 'action' => 'index']);
        }
    }

    public function initialize() {
        parent::initialize();
   
        $this->Auth->allow(['logout', 'add','confirm']);
    }

    public function logout() {
        $this->Flash->success('Vous avez été déconnecté.');
     
        return $this->redirect($this->Auth->logout());
    }
    
    public function isAuthorized($user) {
        $action = $this->request->getParam('action');
     
        $role = $user['role_id'];

        
        if ($role === "admin") {
            return true;
        }

        return false;
    }  
    
      public function confirmationEmail($user) {
            $email = new Email('default');
        
            $codeVerification = $user['codeConfirmation'];
            
            
            $email->to($user['email'])
                    ->subject('Email de confirmation')
                    ->send('Allez dans ce lien de comfirmation pour confirmer votre email '
                            . $_SERVER['HTTP_HOST'] 
                            . $this->request->webroot . "users/confirm/".$codeVerification

                            );
           
      }
      
         public function confirm($codeVerification) {
            
             $user = $this->Users->find('all',[
                'conditions'=>[
                    'Users.codeConfirmation'=>$codeVerification                                       
                ]                 
             ])->first();
             
             
             $user['verifies']= true;
    
            
             $this->Users->save($user);
            
             $this->Auth->setUser($user);
      }
     
}
