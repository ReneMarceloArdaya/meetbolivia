<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Paquete_Img;

class Paquete_ImgController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Paquete_Img';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Paquete_Img());

        $grid->column('id', __('Id'));
        $grid->column('paquete_id', __('Paquete id'));
        $grid->column('nombre_paquete', __('Nombre paquete'));
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
        $show = new Show(Paquete_Img::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('paquete_id', __('Paquete id'));
        $show->field('nombre_paquete', __('Nombre paquete'));
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
        $form = new Form(new Paquete_Img());

        // Campo para seleccionar el nombre del paquete
        $form->select('paquete_id', __('Nombre del Paquete'))
            ->options(\App\Models\Paquete::all()->pluck('nombre', 'id'))
            ->load('nombre_paquete', '/admin/api/paquete/nombre');

        // Campo para el nombre del paquete (rellenado automáticamente)
        $form->hidden('nombre_paquete', __('Nombre paquete'))->default(function ($form) {
            return $form->model()->paquete->nombre ?? '';
        });

        // Campo para la imagen
        $form->image('imagen', __('Imagen'))->required();

        return $form;
    }
}
