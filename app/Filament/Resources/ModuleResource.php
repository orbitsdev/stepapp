<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Module;
use Filament\Forms\Form;
use App\Models\ModuleType;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Http\Controllers\FilamentForm;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ModuleResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ModuleResource\RelationManagers;

class ModuleResource extends Resource
{
    protected static ?string $model = Module::class;

    protected static ?string $navigationIcon = 'jam-write-f';
    protected static ?string $navigationGroup = 'Program Management';
    protected static ?int $navigationSort = 10;
    protected static ?string $navigationLabel = 'Module Section';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(FilamentForm::moduleForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                ->searchable(),
                Tables\Columns\TextColumn::make('type')
                ->searchable(),

            Tables\Columns\TextColumn::make('description')
                ->markdown()->wrap(),
            ])
            ->filters([
                SelectFilter::make('type')
    ->options(ModuleType::all()->pluck('title', 'title'))
    ->searchable()
    ->preload()
            ], layout:  FiltersLayout::AboveContent)
            ->actions([
                ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListModules::route('/'),
            'create' => Pages\CreateModule::route('/create'),
            'edit' => Pages\EditModule::route('/{record}/edit'),
        ];
    }
}
