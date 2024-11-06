<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class FilamentForm extends Controller
{
    public static function carouselForm(): array
    {
        return [
            TextInput::make('name')->maxLength(191)->columnSpanFull(),
            SpatieMediaLibraryFileUpload::make('image')->columnSpanFull(),
            Toggle::make('is_enabled')
                ->inline()->default(true)->name('Enabled')
        ];
    }
    public static function welcomeForm(): array
    {
        return [
            TextInput::make('title')
                ->maxLength(191)->columnSpanFull(),
            RichEditor::make('description')
                ->columnSpanFull(),

        ];
    }
    public static function newsSectionForm(): array
    {
        return [
            TextInput::make('title')
                ->maxLength(191)->columnSpanFull(),
            RichEditor::make('description')
                ->columnSpanFull(),



        ];
    }

    public static function newsForm(): array
    {
        return [

            TextInput::make('title')
                ->maxLength(191)->columnSpanFull(),
            RichEditor::make('description')
                ->columnSpanFull(),
                SpatieMediaLibraryFileUpload::make('image')->columnSpanFull(),

        ];
    }
    public static function globalPartnerForm(): array
    {
        return [

            TextInput::make('name')
                ->maxLength(191)->columnSpanFull(),
            RichEditor::make('description')
                ->columnSpanFull(),
           SpatieMediaLibraryFileUpload::make('image')->columnSpanFull(),

        ];
    }

    public static function footerForm(): array
    {
        return [

            TextInput::make('copy_right')
                ->maxLength(191),
            TextInput::make('powered_by')
                ->maxLength(191),
            RichEditor::make('content')
                ->columnSpanFull(),
            SpatieMediaLibraryFileUpload::make('image')->columnSpanFull(),

        ];
    }
    public static function success(String $title = 'Success', String $body = null)
    {
        Notification::make()
            ->title($title)
            ->body($body)
            ->success()
            ->send();
    }
    public static function danger(String $title = 'Success', String $body = null)
    {
        Notification::make()
            ->title($title)
            ->body($body)
            ->danger()
            ->send();
    }
}
