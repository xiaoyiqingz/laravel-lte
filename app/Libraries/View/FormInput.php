<?php

namespace App\Libraries\View;

use Illuminate\Contracts\Support\Renderable;

class FormInput implements Renderable
{
    public $ctrlId = null;

    public $datas = [];

    public function __construct()
    {
        $this->datas = [
            'type' => 'text',
            'label' => 'label',
            'name' => '',
            'placeholder' => '',
            'value' => '',
        ];
    }

    public function render()
    {
        if (!$this->ctrlId) {
            throw new \Exception('Form Input id is null');
        }

        if (!$this->get('name')) {
            throw new \Exception('Form Input name is null');
        }

        $this->datas['id'] = $this->ctrlId;

        return view('component.form-parts.input', $this->datas);
    }

    public function setId($ctrlId)
    {
        $this->ctrlId = $ctrlId;
        return $this;
    }

    public function setAttrs($type, $label, $name, $value = '', $placeholder = '')
    {
        $this->set('type', $type);
        $this->set('label', $label);
        $this->set('name', $name);
        if ($value) {
            $this->set('value', $value);
        }
        if ($placeholder) {
            $this->set('placeholder', $placeholder);
        }

        return $this;
    }

    public function set($key, $val)
    {
        $this->datas[$key] = $val;

        return $this;
    }

    public function get($key)
    {
        return $this->datas[$key] ?? '';
    }
}
