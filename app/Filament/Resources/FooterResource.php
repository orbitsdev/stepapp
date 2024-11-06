<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Footer;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Http\Controllers\FilamentForm;
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\FooterResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use App\Filament\Resources\FooterResource\RelationManagers;

class FooterResource extends Resource
{
    protected static ?string $model = Footer::class;

    protected static ?string $navigationIcon = 'css-dock-bottom';

    protected static ?string $navigationGroup = 'Footer Management';
    protected static ?int $navigationSort = 6;
    protected static ?string $navigationLabel = 'Footer Section';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(FilamentForm::footerForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('image') ->square(),
                Tables\Columns\TextColumn::make('copy_right')
                    ->searchable(),
                Tables\Columns\TextColumn::make('powered_by')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_default')
                    ->boolean(),

            ])
            ->filters([
                //
            ])
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageFooters::route('/'),
        ];
    }
}
