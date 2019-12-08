<?php

namespace App\Libraries\View;

use Illuminate\Contracts\Support\Renderable;

class Form implements Renderable
{
    public $style = 'primary';

    public $header = '';

    public $formData = [];

    public $items = [];

    public function render()
    {
        $style = $this->formatStyle($this->style);

        $datas = [
            'style' => $style,
            'header' => $this->header,
            'formData' => $this->formData,
            'items' => $this->items,
        ];

        return view('component.form', $datas);
    }

    public function append(Renderable $item)
    {
        $this->items[] = $item;

        return $this;
    }

    public function setStyle($style = 'primary')
    {
        $this->style = $style;
        return $this;
    }

    public function setHeader($header = '')
    {
        $this->header = $header;

        return $this;
    }

    public function setFormData($data)
    {
        $this->formData = $data;

        return $this;
    }

    public function formatStyle($style)
    {
        $xtab = [
            'primary' => 'box-primary',
            'info'    => 'box-info',
            'success' => 'box-success',
            'danger'  => 'box-danger',
            'warning' => 'box-warning',
        ];

        try {
            $jsStyle = $xtab[$style];
        } catch (\Exception $e) {
            throw new Exception('Form style not find: ' . $style);
        }

        return $jsStyle;
    }
}
