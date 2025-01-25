<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ImageUpload;
use Filament\Forms\Components\UrlInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\BooleanColumn;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;
    protected static ?string $navigationGroup = 'Home';
    protected static ?string $navigationLabel = 'Projects';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(2)
                    ->schema([
                        TextInput::make('meta_title')
                            ->label('Meta Title')
                            ->required()
                            ->maxLength(255)
                            ->helperText('This is the title that will be used for SEO purposes.'),

                        Textarea::make('meta_description')
                            ->label('Meta Description')
                            ->required()
                            ->maxLength(500)
                            ->helperText('Provide a short description that will be used for SEO purposes.'),

                        TextInput::make('main_title')
                            ->label('Main Title')
                            ->required()
                            ->maxLength(255)
                            ->helperText('The title displayed at the top of the project page.'),

                        Toggle::make('active')
                            ->label('Active')
                            ->default(true)
                            ->helperText('Toggle to mark the project as active or inactive.'),

                        TextInput::make('title')
                            ->label('Title')
                            ->required()
                            ->maxLength(255)
                            ->helperText('Provide the main title of the project.'),

                        Textarea::make('description')
                            ->label('Description')
                            ->required()
                            ->maxLength(1000)
                            ->helperText('A brief description of the project. You can add details like features, goals, etc.'),

                        FileUpload::make('image')
                            ->label('Image')
                            ->image()
                            ->disk('public')
                            ->directory('projects')
                            ->nullable()
                            ->imageEditorViewportWidth(1032)
                            ->imageEditorViewportHeight(780)
                            ->helperText('Upload the hero image (1032X780 recommended).'),

                        Textarea::make('portfolio_link')
                            ->label('Portfolio Link')
                            ->nullable()
                            ->helperText('Provide a link to the project’s portfolio if applicable.'),

                        RichEditor::make('content')
                            ->label('Content')
                            ->required()
                            ->maxLength(5000)
                            ->helperText('Add detailed content or documentation for the project. This field can include text, images, and other rich media.'),
                    ])
                    ->columns(2), // Set the grid to 2 columns
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Title')->limit(15),
                TextColumn::make('slug')->label('Slug')->limit(15),
                TextColumn::make('main_title')->label('Main Title')->limit(15),
                BooleanColumn::make('active')->label('Active'),
                ImageColumn::make('image')->label('Image')->circular()->disk('public'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
