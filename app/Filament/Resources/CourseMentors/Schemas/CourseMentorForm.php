<?php

namespace App\Filament\Resources\CourseMentors\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use App\Models\User;

class CourseMentorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('course_id')
                ->relationship('course', 'name')
                ->searchable()
                ->preload()
                ->required(),

                Select::make('user_id')
                ->label('Mentor')
                ->options(function () {
                    return User::role('mentor')->pluck('name', 'id');
                })
                ->searchable()
                ->preload()
                ->required(),

                Textarea::make('about')
                ->default(null)
                ->required()
                ->columnSpanFull(),

                Select::make('is_active')
                ->options([
                    true => 'Active',
                    false => 'Banned'
                ])
                    ->required(),
            ]);
    }
}
