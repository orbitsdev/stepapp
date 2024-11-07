<?php

namespace App\Http\Controllers;

use App\Models\ModuleType;
use Illuminate\Http\Request;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Awcodes\FilamentTableRepeater\Components\TableRepeater;
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
            Textarea::make('description')
                ->columnSpanFull()->rows(5),

        ];
    }
    public static function newsSectionForm(): array
    {
        return [
            TextInput::make('title')->maxLength(191)->columnSpanFull(),
            Textarea::make('description')
                ->columnSpanFull()->rows(5),



        ];
    }

    public static function newsForm(): array
    {
        return [

            TextInput::make('title')->maxLength(191)->columnSpanFull()->required(),
            Textarea::make('description')
                ->columnSpanFull()->rows(5),
            SpatieMediaLibraryFileUpload::make('image')->columnSpanFull(),

        ];
    }
    public static function globalPartnerForm(): array
    {
        return [

            TextInput::make('name')->maxLength(191)->columnSpanFull(),
            Textarea::make('description')
                ->columnSpanFull(),
            SpatieMediaLibraryFileUpload::make('image')->columnSpanFull(),

        ];
    }

    public static function footerForm(): array
    {
        return [

            TextInput::make('title')
                ->maxLength(191)->columnSpanFull(),
            Textarea::make('content')
                ->columnSpanFull(),
            SpatieMediaLibraryFileUpload::make('image')->columnSpanFull(),

        ];
    }
    public static function moveForm(): array
    {
        return [

            TextInput::make('title')->maxLength(191)->columnSpanFull()->required(),
            Textarea::make('content')
                ->columnSpanFull()->rows(5),
            // SpatieMediaLibraryFileUpload::make('image')->columnSpanFull(),

        ];
    }


    public static function walkForm(): array
    {
        return [

            Tabs::make('Manage Walk Section Content')
                ->tabs([
                    Tabs\Tab::make('Walk')
                        ->schema([
                            TextInput::make('title')->maxLength(191)->columnSpanFull()->required(),
                            Textarea::make('content')->columnSpanFull()->rows(5),
                        ]),
                    Tabs\Tab::make('Actvities')
                        ->schema([
                            ...FilamentForm::walkActivityForm()
                        ]),

                ])->columnSpanFull(),

        ];
    }

    public static function walkActivityForm(): array
    {
        return [
            TableRepeater::make('walk_activity')
                ->relationship('walkActivities')
                ->schema([
                    TextInput::make('title')->columnSpanFull()->required(),
                ])
                ->addActionLabel('Add activity')
                ->columnSpanFull()
                ->withoutHeader()
                ->defaultItems(0)
                ->collapsible()
                ->collapsed(),

        ];
    }


    public static function jogForm(): array
    {
        return [


            Tabs::make('Manage Job Section Content')
                ->tabs([
                    Tabs\Tab::make('Jog')
                        ->schema([
                            TextInput::make('title')
                                ->maxLength(191)->columnSpanFull()->required(),
                            Textarea::make('content')
                                ->columnSpanFull()->rows(5)->required(),
                            Textarea::make('note')->required()
                                ->columnSpanFull()->rows(5),
                            TextInput::make('final')->required()
                                ->maxLength(191)->columnSpanFull(),
                        ]),



                ])->columnSpanFull(),

            // SpatieMediaLibraryFileUpload::make('image')->columnSpanFull(),

        ];
    }

    public static function moduleForm(): array
    {
        return [
            Tabs::make('Manage Module Section Content')
                ->tabs([
                    Tabs\Tab::make('Module')
                        ->schema([
                            TextInput::make('title')
                                ->maxLength(191)->columnSpanFull()->required(),

                            Select::make('type')
                                ->options(ModuleType::all()->pluck('title', 'title'))
                                ->preload()
                                ->required()
                                ->searchable(),
                            Textarea::make('description')
                                ->columnSpanFull()->rows(5)->required(),

                            // Tabs\Tab::make('units')
                            //     ->schema([
                            //         TableRepeater::make('module_units')
                            //             ->relationship('units')
                            //             ->schema([
                            //              ...FilamentForm::unitForm()
                            //             ])
                            //             ->addActionLabel('Add Units')
                            //             ->columnSpanFull()
                            //             ->withoutHeader()
                            //             ->defaultItems(0)
                            //             ->collapsible()
                            //             ->collapsed(),

                            //     ]),
                            // Tabs\Tab::make('outputs')
                            //     ->schema([
                            //         TableRepeater::make('module_outputs')
                            //             ->relationship('outputs')
                            //             ->schema([
                            //              ...FilamentForm::unitForm()
                            //             ])
                            //             ->addActionLabel('Add Units')
                            //             ->columnSpanFull()
                            //             ->withoutHeader()
                            //             ->defaultItems(0)
                            //             ->collapsible()
                            //             ->collapsed(),
                            //     ]),
                        ]),

                        Tabs\Tab::make('Units')
                        ->schema([
                            TableRepeater::make('module_units')
                                        ->relationship('units')
                                        ->schema([
                                         ...FilamentForm::unitForm()
                                        ])
                                        ->addActionLabel('Add Units')
                                        ->columnSpanFull()
                                        ->withoutHeader()
                                        ->defaultItems(0)
                                        ->collapsible()
                                        ->collapsed(),
                        ]) ->columnSpanFull(),
                        Tabs\Tab::make('Outputs')
                        ->schema([
                            TableRepeater::make('module_outputs')
                            ->relationship('outputs')
                            ->schema([
                             ...FilamentForm::unitForm()
                            ])
                            ->addActionLabel('Add Output')
                            ->columnSpanFull()
                            ->withoutHeader()
                            ->defaultItems(0)
                            ->collapsible()
                            ->collapsed(),

                        ]),

                ])->columnSpanFull(),


        ];
    }
    public static function unitForm(): array
    {
        return [
            TextInput::make('title')
                ->maxLength(191)->columnSpanFull()->required(),


            // Textarea::make('description')
            //     ->columnSpanFull()->rows(2),
        ];
    }
    public static function outputForm(): array
    {
        return [
            TextInput::make('title')
                ->maxLength(191)->columnSpanFull()->required(),
            // Textarea::make('description')
            //     ->columnSpanFull()->rows(2),
        ];
    }



    public static function runForm(): array
    {
        return [

            Tabs::make('Manage Run Section Content')
                ->tabs([
                    Tabs\Tab::make('Run')
                        ->schema([
                            TextInput::make('title')->maxLength(191)->columnSpanFull()->required(),
                            Textarea::make('content')->columnSpanFull()->rows(5),
                        ]),
                    Tabs\Tab::make('Actvities')
                        ->schema([
                            ...FilamentForm::runActivityForm()
                        ]),

                ])->columnSpanFull(),

        ];
    }


    public static function runActivityForm(): array
    {
        return [
            TableRepeater::make('run_activity')
                ->relationship('runActivities')
                ->schema([
                    TextInput::make('title')->columnSpanFull()->required(),
                ])
                ->addActionLabel('Add activity')
                ->columnSpanFull()
                ->withoutHeader()
                ->defaultItems(0)
                ->collapsible()
                ->collapsed(),

        ];
    }


    public static function serviceForm(): array
    {
        return [

            TextInput::make('title')->maxLength(191)->columnSpanFull()->required(),
            Textarea::make('description')->columnSpanFull()->rows(5),

        ];
    }


    public static function advisoryBoardForm(): array
    {
        return [
            TextInput::make('target')->maxLength(191)->columnSpanFull()->required(),
            TextInput::make('title')->maxLength(191)->columnSpanFull()->required(),
            Textarea::make('content')->columnSpanFull()->rows(5),

        ];
    }
    public static function advisoryMemberForm(): array
    {
        return [
            SpatieMediaLibraryFileUpload::make('image')->columnSpanFull(),
            TextInput::make('name')->maxLength(191)->columnSpanFull(),
            TextInput::make('title')->maxLength(191)->columnSpanFull(),
            Textarea::make('description')->columnSpanFull()->rows(5),


        ];
    }
    public static function teamMemberForm(): array
    {
        return [
            SpatieMediaLibraryFileUpload::make('image')->columnSpanFull()->square(),
            TextInput::make('name')->maxLength(191)->columnSpanFull(),
            TextInput::make('title')->maxLength(191)->columnSpanFull(),
            Textarea::make('description')->columnSpanFull()->rows(5),


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
