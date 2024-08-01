<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Paquete;

class PaqueteController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Paquete';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Paquete());

        $grid->column('id', __('Id'));
        $grid->column('nombre', __('Nombre'));
        $grid->column('descripcion', __('Descripcion'));
        $grid->column('detalles', __('Detalles'));
        $grid->column('precio', __('Precio'));
        $grid->column('cantidad_de_niños', __('Cantidad de niños'));
        $grid->column('cantidad_de_adultos', __('Cantidad de adultos'));
        //$grid->column('imagen', __('Imagen'));
        $grid->column('imagen')->image();
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Paquete::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nombre', __('Nombre'));
        $show->field('descripcion', __('Descripcion'));
        $show->field('detalles', __('Detalles'));
        $show->field('precio', __('Precio'));
        $show->field('cantidad_de_niños', __('Cantidad de niños'));
        $show->field('cantidad_de_adultos', __('Cantidad de adultos'));
        $show->field('imagen', __('Imagen'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Paquete());

        $form->text('nombre', __('Nombre'));
        $form->text('descripcion', __('Descripcion'));
        $form->text('detalles', __('Detalles'));
        $form->decimal('precio', __('Precio'));
        $form->number('cantidad_de_niños', __('Cantidad de niños'));
        $form->number('cantidad_de_adultos', __('Cantidad de adultos'));
        $form->image('imagen', __('Imagen'));

        return $form;
    }
}
