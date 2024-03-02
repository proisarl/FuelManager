<?php

namespace App\Livewire;

use App\Models\Consommation;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Validation\Rules\Can;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;

final class ListeConsommationComponent extends PowerGridComponent
{
    use WithExport;

    public function setUp(): array
    {
        // $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        
        return Consommation::query();
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('plaque')
            ->add('littre')
            ->add('index')
            ->add('companie')
            ->add('chauffeur')
            ->add('gardien', fn (Consommation $model) => strtoupper(e($model->affectation->user->name)))
            ->add('station', fn (Consommation $model) => strtoupper(e($model->affectation->poste->designation)))
            ->add('affectation_id')
            ->add('pompiste')
            ->add('created_at');
    }

    public function columns(): array
    {
        return [
            Column::make('#', 'id'),
            Column::make('Plaque', 'plaque')
                ->sortable()
                ->searchable(),

            Column::make('Littre', 'littre')
                ->sortable()
                ->searchable(),

            Column::make('Index', 'index')
                ->sortable()
                ->searchable(),

            Column::make('Companie', 'companie')
                ->sortable()
                ->searchable(),

            Column::make('Chauffeur', 'chauffeur')
                ->sortable()
                ->searchable(),

            Column::make('Station', 'station'),
            Column::make('Garde', 'gardien'),
            Column::make('Pompiste', 'pompiste')
                ->sortable()
                ->searchable(),
            

            // Column::make('Created at', 'created_at_formatted', 'created_at')
            //     ->sortable(),

            Column::make('Date Enregistrement', 'created_at')
                ->sortable()
                ->searchable(),

            // Column::action('Action')
        ];
    }

    public function filters(): array
    {
        return [
        ];
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        $this->js('alert('.$rowId.')');
    }

    // public function actions(Consommation $row): array
    // {
    //     return [
    //         Button::add('edit')
    //             ->slot('Edit: '.$row->id)
    //             ->id()
    //             ->class('btn btn-success btn-sm')
    //             ->dispatch('edit', ['rowId' => $row->id])
    //     ];
    // }

    /*
    public function actionRules($row): array
    {
       return [
            // Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($row) => $row->id === 1)
                ->hide(),
        ];
    }
    */
}
