<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SpamiRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\Spami;

/**
 * Class SpamiCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SpamiCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\BulkDeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\FetchOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Spami::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/spami');
        CRUD::setEntityNameStrings('SPAMI', 'SPAMIs');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::addColumn(['name'=>'code', 'type'=>'text', 'label'=>'SPAMI code']);
        CRUD::addColumn(['name'=>'countries', 'type'=>'relationship', 'label'=>'Country(ies)']);

        CRUD::addColumn(['name'=>'eng_name', 'type'=>'text', 'label'=>'English Name']);
        CRUD::addColumn(['name'=>'fr_name', 'type'=>'text', 'label'=>'French Name']);
        CRUD::addColumn(['name'=>'year_inclusion', 'type'=>'text', 'label'=>'Year of Inclusion']);
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
        CRUD::setValidation(SpamiRequest::class);

        CRUD::addField(['name'=>'countries', 'type'=>'select2_multiple', 'label'=>'Country(ies)']);
        CRUD::addField(['name'=>'code', 'type'=>'text', 'label'=>'SPAMI code']);
        CRUD::addField(['name'=>'eng_name', 'type'=>'text', 'label'=>'English Name']);
        CRUD::addField(['name'=>'fr_name', 'type'=>'text', 'label'=>'French Name']);
        CRUD::addField(['name'=>'year_inclusion', 'type'=>'text', 'label'=>'Year of Inclusion']);
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
