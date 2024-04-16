<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make("name")
                    ->columnSpan(2)
                    ->required()
                    ->maxLength(255),
                Textarea::make("short_description")
                    ->columnSpan(2)
                    ->required()
                    ->rows(4),
                TextInput::make("url")
                    ->url(),
                TextInput::make("github")
                    ->url(),
                FileUpload::make("images")
                    ->columnSpan(2)
                    ->directory("projects")
                    ->image()
                    ->multiple(),

                MarkdownEditor::make("description")
                    ->columnSpan(2)
                    ->required(),

                DatePicker::make("started_at")
                    ->native(false)
                    ->required(),

                DatePicker::make("ended_at")
                    ->native(false),

                DatePicker::make("published_at")
                    ->native(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('short_description')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('url')
                    ->url(fn($record) => $record->url)
                    ->searchable()
                    ->sortable(),
                TextColumn::make('github')
                    ->url(fn($record) => $record->github)
                    ->searchable()
                    ->sortable(),
                TextColumn::make('started_at')
                    ->dateTime("Y-m-d")
                    ->searchable()
                    ->sortable(),
                TextColumn::make('ended_at')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
