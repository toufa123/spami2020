<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TacsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class TacsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TacsCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\BulkDeleteOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Tacs::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/tacs');
        CRUD::setEntityNameStrings('TAC', 'TACs');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::addcolumn(['name' => 'code', 'type' => 'text', 'label'=>'TAC Code']);
        CRUD::addcolumn(['name' => 'year', 'type' => 'text', 'label'=>'Evaluation periode']);
        CRUD::addcolumn(['name' => 'spami', 'type' => 'relationship', 'label'=>'SPAMI']);
        CRUD::addcolumn(['name' => 'user', 'type' => 'relationship', 'label'=>'Members']);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
        $this->crud->enableExportButtons();
        $this->crud->orderBy('code','ASC');
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(TacsRequest::class);

        CRUD::addfield(['name' => 'spami_id', 'type' => 'select2', 'label'=>'SPAMI', 'pivot' => true, 'model' => 'App\Models\Spami','entity'=>'spami','attribute'=>'eng_name']);
        CRUD::addfield(['name' => 'code', 'type' => 'text', 'label'=>'TAC Code']);
        CRUD::addfield(['name' => 'year', 'type' => 'text', 'label'=>'Evaluation periode']);
        CRUD::addfield(['name' => 'users', 'type' => 'select2_multiple', 'label'=>'Members']);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
