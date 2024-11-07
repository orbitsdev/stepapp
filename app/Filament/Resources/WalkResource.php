<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Walk;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Http\Controllers\FilamentForm;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\WalkResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\WalkResource\RelationManagers;

class WalkResource extends Resource
{
    protected static ?string $model = Walk::class;

    protected static ?string $navigationIcon = 'jam-write-f';
    protected static ?string $navigationGroup = 'Program Management';
    protected static ?int $navigationSort = 8;
    protected static ?string $navigationLabel = 'Walk Section';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(FilamentForm::walkForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                ->searchable(),
            Tables\Columns\TextColumn::make('content')
                ->markdown()->wrap(),
                ToggleColumn::make('is_default')
                ->label('Currently in Use')
                ->onIcon('heroicon-m-check')
                ->offIcon('heroicon-m-x-mark')
                ->onColor('success')
                ->updateStateUsing(function ($record, $state) {
                    $hasDefault = Walk::where('is_default', true)->exists();

                    if ($state) {
                        if ($hasDefault && !$record->is_default) {

                            FilamentForm::danger(
                                title: 'Cannot Set as Default',
                                body: 'You can only set one default at a time.'
                            );

                            return false;
                        }


                        Walk::where('is_default', true)->update(['is_default' => false]);
                        $record->update(['is_default' => true]);


                        FilamentForm::success(
                            title: 'Default Set',
                            body: 'This record has been set as the default successfully.'
                        );

                        return true;
                    } else {

                        $record->update(['is_default' => false]);


                        FilamentForm::success(
                            title: 'Default Removed',
                            body: 'This record has been removed as the default.'
                        );

                        return true;
                    }
                })
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWalks::route('/'),
            'create' => Pages\CreateWalk::route('/create'),
            'edit' => Pages\EditWalk::route('/{record}/edit'),
        ];
    }
}
