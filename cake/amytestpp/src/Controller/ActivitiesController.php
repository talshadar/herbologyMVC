<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Http\Exception\BadRequestException;
use Cake\I18n\Time;

/**
 * Activities Controller
 *
 * @property \App\Model\Table\ActivitiesTable $Activities
 */
class ActivitiesController extends AppController
{

    /**
     * Index method
     *
     */
    public function index()
    {
        //query for the full list of activities
        $activities = $this->Activities->find('all', ['contain' => ['Tags']]);
        $this->set(['activities' => $activities, '_serialize' => 'activities']);
    }

    /**
     * View method
     *
     */
    public function view($id = null)
    {
        //get a single activity
        $activity = $this->Activities->get($id, [
            'contain' => ['Tags']
        ]);
        $this->set(['activity' => $activity, '_serialize' => 'activity']);
    }

    /**
     * Add method
     *
     */
    public function add()
    {

        /**
         * TODO: Make sure that associated tags are saved with the activity, and serve the newly created activity
         *
         */



    }

}
