<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LeaderResource\Pages;
use App\Filament\Resources\LeaderResource\RelationManagers;
use App\Filament\Roles;
use App\Models\Leader;
use Filament\Resources\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;

class LeaderResource extends Resource
{
    public static $icon = 'heroicon-o-collection';
    public static $model = Leader::class;

    public static function form(Form $form)
    {
        return $form
            ->schema([
                Components\TextInput::make('name')->autofocus()->required(),
                Components\TextInput::make('position')->autofocus()->required(),
                Components\Textarea::make('about')->autofocus()->required(),
                Components\FileUpload::make("image")->required()
            ]);
    }

    public static function table(Table $table)
    {
        return $table
            ->columns([

                Columns\Text::make('id'),
                Columns\Text::make('name')->primary(),
                Columns\Text::make('position'),
                Columns\Text::make('about'),
                Columns\Text::make('image')
            ])
            ->filters([
                //
            ]);
    }

    public static function relations()
    {
        return [
            //
        ];
    }

    public static function routes()
    {
        return [
            Pages\ListLeaders::routeTo('/', 'index'),
            Pages\CreateLeader::routeTo('/create', 'create'),
            Pages\EditLeader::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
