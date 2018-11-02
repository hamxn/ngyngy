<?php

namespace App\Admin\Controllers;

use App\Artwork;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class ArtworkController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Index')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Artwork);

        $grid->id('Id');
        $grid->name('Name');
        $grid->price('Price');
        $grid->size('Size');
        $grid->status('Status');
        $grid->type('Type');
        $grid->created_at('Created at');
        $grid->updated_at('Updated at');

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
        $show = new Show(Artwork::findOrFail($id));

        $show->id('Id');
        $show->name('Name');
        $show->price('Price');
        $show->size('Size');
        $show->status('Status');
        $show->type('Type');
        $show->description('Description');
        $show->photos('Photos', function ($photo) {
            $photo->path('Image');
            $photo->order('Order');
            $photo->status('Status');
        });

        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Artwork);

        $form->text('name', 'Name');
        $form->currency('price', 'Price');
        $form->text('size', 'Size');
        $form->select('type', 'Type')->options([1 => 'A', 2 => 'B', 3 => 'C']);
        $form->radio('status', 'Status')->options([1 => 'A', 2 => 'B', 3 => 'C']);
        $form->textarea('description', 'Description');

        $form->hasMany('photos',  function(Form\NestedForm $form) {
            $form->image('path', 'Image');
            $form->number('order', 'Order');
            $form->radio('status', 'Status')->options([1 => 'A', 2 => 'B', 3 => 'C']);
        });

        return $form;
    }
}
