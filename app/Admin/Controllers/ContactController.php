<?php

namespace App\Admin\Controllers;

use App\Contact;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class ContactController extends Controller
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
        $grid = new Grid(new Contact);

        $grid->address('Address');
        $grid->content('Content');
        $grid->created_at('Created at');
        $grid->email('Email');
        $grid->id('Id');
        $grid->name('Name');
        $grid->property_id('Property id');
        $grid->status('Status');
        $grid->tel('Tel');
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
        $show = new Show(Contact::findOrFail($id));

        $show->address('Address');
        $show->content('Content');
        $show->created_at('Created at');
        $show->email('Email');
        $show->id('Id');
        $show->name('Name');
        $show->property_id('Property id');
        $show->status('Status');
        $show->tel('Tel');
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
        $form = new Form(new Contact);

        $form->text('address', 'Address');
        $form->textarea('content', 'Content');
        $form->email('email', 'Email');
        $form->text('name', 'Name');
        $form->number('property_id', 'Property id');
        $form->switch('status', 'Status');
        $form->text('tel', 'Tel');

        return $form;
    }
}
