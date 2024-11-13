<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\GlobalPartner;
use Filament\Facades\Filament;
use Filament\Resources\Resource;
use App\Http\Controllers\FilamentForm;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\Layout\Stack;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\GlobalPartnerResource\Pages;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use App\Filament\Resources\GlobalPartnerResource\RelationManagers;

class GlobalPartnerResource extends Resource
{
    protected static ?string $model = GlobalPartner::class;

    protected static ?string $navigationIcon = 'carbon-partnership';

    protected static ?string $navigationGroup = 'Home Management';
    protected static ?int $navigationSort = 5;
    protected static ?string $navigationLabel = 'Partnership Section';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(FilamentForm::globalPartnerForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Stack::make([
                    SpatieMediaLibraryImageColumn::make('image') ->square()->square() ->width(200)->height(200),
                Tables\Columns\TextColumn::make('name')
                ->searchable(),
                ]),

            Tables\Columns\TextColumn::make('description')
                ->markdown()->wrap(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                 ActionGroup::make([
                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])->contentGrid([
                'md' => 2,
                'xl' => 3,
            ])->reorderable('sort_id');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageGlobalPartners::route('/'),
        ];
    }
}
