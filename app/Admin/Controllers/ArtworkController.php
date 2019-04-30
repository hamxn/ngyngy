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

        $grid->id(__('admin.artworks.id'));
        $grid->name(__('admin.artworks.name'));
        $grid->price(__('admin.artworks.price'));
        $grid->size(__('admin.artworks.size'));
        $grid->status(__('admin.artworks.status'))->display(function($status) {
            return Artwork::textStatus($status);
        });
        $grid->type(__('admin.artworks.type'))->display(function($type) {
            return Artwork::textType($type);
        });
        $grid->created_at(__('admin.artworks.created_at'));
        $grid->updated_at(__('admin.artworks.updated_at'));

        $grid->actions(function ($actions) {
            $actions->disableView();
        });

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

        $show->id(__('admin.artworks.id'));
        $show->name(__('admin.artworks.name'));
        $show->price(__('admin.artworks.price'));
        $show->size(__('admin.artworks.size'));
        $show->status(__('admin.artworks.status'));
        $show->type(__('admin.artworks.type'));
        $show->description(__('admin.artworks.description'));
        $show->created_at(__('admin.artworks.created_at'));
        $show->updated_at(__('admin.artworks.updated_at'));

        $show->photos('Photos', function ($photo) {
            $photo->image(__('admin.photos.image'))->image();
            $photo->order(__('admin.photos.order'));
            $photo->status(__('admin.photos.status'));
        });

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

        $form->text('name', __('admin.artworks.name'));
        $form->currency('price', __('admin.artworks.price'))->symbol('$');
        $form->text('size', __('admin.artworks.size'));
        $form->select('type', __('admin.artworks.type'))->options(Artwork::listTextTypes());
        $form->select('status', __('admin.artworks.status'))->options(config('config.artworks.status'));
        $form->textarea('description', __('admin.artworks.description'));
        $form->hasMany('photos', function (Form\NestedForm $form) {
            $form->image('image', __('admin.photos.image'));
            $form->text('order', __('admin.photos.order'));
            $form->select('status', __('admin.photos.status'))->options(config('config.photos.status'));
        });

        $form->footer(function ($footer) {

            // disable `View` checkbox
            $footer->disableViewCheck();

            // disable `Continue editing` checkbox
            $footer->disableEditingCheck();

            // disable `Continue Creating` checkbox
            $footer->disableCreatingCheck();

        });


        return $form;
    }
}
