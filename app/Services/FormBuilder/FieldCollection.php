<?php

namespace App\Services\FormBuilder;

use Filament\Forms\Components\Card;
use Filament\Forms\Components\Component;
use Traversable;
use Filament\Forms\Components\Tabs;

abstract class FieldCollection implements Field, \IteratorAggregate {

    protected array $fields;


    public function __construct(Field ...$fields) {
        $this->fields = $fields;
    }

    public function build(): Component {
        $fields = [];
        foreach ($this->fields as $field) {
            $fields[] = $field->build();
        }

        return Card::make()->schema($fields);
    }

    public function getIterator(): Traversable {
        return new \ArrayIterator($this->fields);
    }
}
