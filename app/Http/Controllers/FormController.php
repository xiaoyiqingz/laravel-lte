<?php

namespace App\Http\Controllers;

use Log;

use Illuminate\Http\Request;
use App\Facades\View\Column;
use App\Facades\View\Body;
use App\Facades\View\Form;
use App\Facades\View\Row;

class FormController extends Controller
{
    /**
     * 普通表单
     *
     * @return view
     */
    public function general()
    {
        return view('form.general');
    }

    /**
     * 高级表单
     *
     * @return view
     */
    public function advanced()
    {
        return view('form.advanced');
    }

    /**
     * 可编辑表单
     *
     * @return view
     */
    public function editor()
    {
        return view('form.editors');
    }

    /**
     * 自定义表单
     *
     * @return view
     */
    public function custom(Request $request)
    {
        $data = $request->all();

        //$item = "<div><span> item1 </span></div>";
        $form = Form::setStyle('warning')
            ->setHeader('Custom Form')
            ->setFormData($data);

        $column = Column::append($form);

        $row = Row::column(12, $column);

        return Body::row($row)->render();
    }

    public function data1(Request $request)
    {
        Log::info($request->all());

        return $this->custom($request);
    }
}
