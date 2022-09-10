<?php


namespace Insight\Forms\Fields;


use Insight\Elements\TextArea;
use Insight\Forms\Field;
use Insight\Inertia\ViewComponent;

class LongText extends Field
{
    public function resolveViewComponent(): ViewComponent
    {
        return $this->withConfigurationsOn(TextArea::make());
    }
}