<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\AdvisoryMember;
use Filament\Resources\Resource;
use App\Http\Controllers\FilamentForm;
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AdvisoryMemberResource\Pages;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use App\Filament\Resources\AdvisoryMemberResource\RelationManagers;

class AdvisoryMemberResource extends Resource
{
    protected static ?string $model = AdvisoryMember::class;

    protected static ?string $navigationIcon = 'jam-write-f';
    protected static ?string $navigationGroup = 'Advisory Management';
    protected static ?int $navigationSort = 14;
    protected static ?string $navigationLabel = 'Advisory Member';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(FilamentForm::advisoryMemberForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('image') ->square(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),

                    Tables\Columns\TextColumn::make('description')
                    ->markdown()->wrap(),

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
            'index' => Pages\ManageAdvisoryMembers::route('/'),
        ];
    }
}
