<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tags Controller
 *
 * @property \App\Model\Table\TagsTable $Tags
 *
 * @method \App\Model\Entity\Tag[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TagsController extends AppController
{

    /**
     * Index method
     *
     */
    public function index()
    {
        //start with an empty conditions array
        $conditions = [];
        if(!empty($this->request->getQuery('name'))) {
            //if name was added to the query string, use it to create sql condition
            $conditions['name LIKE'] = $this->request->getQuery('name') . '%';
        }
        //get the tags
        $tags = $this->Tags->find('all', ['conditions' => $conditions]);

        //and set it
        $this->set(['tags' => $tags, '_serialize' => 'tags']);

    }

    /**
     * View method
     *
     */
    public function view($id = null)
    {
        $tag = $this->Tags->get($id, [
            'contain' => []
        ]);

        $this->set(['tag' => $tag, '_serialize' => 'tag']);
    }

    /**
     * Add method
     *
     */
    public function add()
    {
        $this->request->allowMethod('post');
        $tag = $this->Tags->newEntity();
        $tag = $this->Tags->patchEntity($tag, $this->request->getData());
        if ($this->Tags->save($tag)) {
            $this->view($tag->id);
            return;
        }
    }


}
