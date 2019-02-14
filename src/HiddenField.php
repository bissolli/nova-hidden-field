<?php

namespace Bissolli\NovaHiddenField;

use Laravel\Nova\Fields\Field;

class HiddenField extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-hidden-field';

    /**
     * Fill the field value with the provided value.
     *
     * @param  string $value
     * @return $this
     */
    public function value(string $value = null)
    {
        return $this->withMeta(['value' => $value]);
    }
}
