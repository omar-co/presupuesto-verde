<?php

namespace App\Services\FormBuilder;

use Traversable;
use Filament\Forms\Components\Tabs;

abstract class FieldCollection implements Field, \IteratorAggregate {

    protected array $fields;
    private string $sectionName;


    public function __construct(string $sectionName, Field ...$fields) {
        $this->fields = $fields;
        $this->sectionName = $sectionName;
    }

    public function build(): \Filament\Forms\Components\Component {
        $fields = [];
        foreach ($this->fields as $field) {
            $fields[] = $field->build();
        }

        return Tabs\Tab::make($this->sectionName)->schema($fields);
    }

    public function getIterator(): Traversable {
        return new \ArrayIterator($this->fields);
    }
}
