<?php

namespace App\Services\FormBuilder;

use Traversable;
use Filament\Forms\Components\Tabs;

abstract class FieldCollection implements Field, \IteratorAggregate {

    protected array $fields;


    public function __construct(Field ...$fields) {
        $this->fields = $fields;
    }

    public function build(): \Filament\Forms\Components\Component {
        $fields = [];
        foreach ($this->fields as $field) {
            $fields[] = $field->build();
        }

        return Tabs\Tab::make('Identificación')->schema($fields);
    }

    public function getIterator(): Traversable {
        return new \ArrayIterator($this->fields);
    }
}
