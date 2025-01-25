<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroResource\Pages;
use App\Models\Hero;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Forms\Components\FileUpload;

class HeroResource extends Resource
{
    protected static ?string $model = Hero::class;
    protected static ?string $navigationGroup = 'Home';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    // Define the form fields for the Hero section
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(2)
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->label('Hero Title')
                            ->helperText('Enter the main title for the hero section.'),

                        Forms\Components\Textarea::make('description')
                            ->required()
                            ->label('Hero Description')
                            ->helperText('Provide a brief description for the hero section.'),
                    ]),

                // Group 2: Call to Action Text and URL Fields
                Forms\Components\Grid::make(2)
                    ->schema([
                        Forms\Components\TextInput::make('cta_text')
                            ->required()
                            ->label('Call to Action Text')
                            ->helperText('Enter the text for the call-to-action button.'),

                        Forms\Components\TextInput::make('cta_url')
                            ->required()
                            ->label('Call to Action URL')
                            ->helperText('Provide the URL for the call-to-action button.'),
                    ]),

                // Group 3: Meta Title and Meta Description Fields
                Forms\Components\Grid::make(2)
                    ->schema([
                        Forms\Components\TextInput::make('meta_title')
                            ->required()
                            ->label('Meta Title')
                            ->helperText('Enter the meta title for SEO purposes.'),

                        Forms\Components\Textarea::make('meta_description')
                            ->required()
                            ->label('Meta Description')
                            ->helperText('Provide a meta description for SEO purposes.'),
                    ]),

                // Group 4: Active Status Toggle
                Forms\Components\Grid::make(1)
                    ->schema([
                        Forms\Components\Toggle::make('active')
                            ->label('Active')
                            ->default(true) // Default value is true (active)
                            ->required()
                            ->helperText('Toggle to set the status as active or inactive.'),
                    ]),

                // Group 5: Hero Image Upload
                Forms\Components\Grid::make(1)
                    ->schema([
                        FileUpload::make('image')
                            ->directory('hero') // Store files in the 'hero' folder
                            ->preserveFilenames()
                            ->image()
                            ->imageEditorViewportWidth(970)
                            ->imageEditorViewportHeight(1080)
                            ->label('Hero Images')
                            ->helperText('Upload the hero image (970x1080 recommended).'),
                    ]),

                // Group 6: User Images Upload (Multiple)
                Forms\Components\Grid::make(1)
                    ->schema([
                        FileUpload::make('users')
                            ->directory('hero/users')
                            ->multiple()
                            ->image()
                            ->imageEditorViewportWidth(60)
                            ->imageEditorViewportHeight(60)
                            ->maxFiles(3)
                            ->preserveFilenames()
                            ->helperText('Upload up to 3 user images (60x60 recommended).'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Hero Image
                ImageColumn::make('image')
                    ->circular(),
                ImageColumn::make('users')
                    ->circular()
                    ->stacked(),
                // Hero Title
                TextColumn::make('title')
                    ->sortable()
                    ->searchable()
                    ->limit(50)  // Limit to 50 characters
                    ->label('Hero Title'),

                // Hero Description
                TextColumn::make('description')
                    ->limit(50)  // Limit to 50 characters
                    ->sortable()
                    ->label('Description'),

                // Active Status Toggle
                BooleanColumn::make('active')
                    ->label('Active')
                    ->sortable(),
            ])
            ->filters([
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()

            ])
            ->bulkActions([
                // Bulk actions like delete multiple entries
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    // Define relations (if applicable)
    public static function getRelations(): array
    {
        return [
            // Add relations here if necessary
        ];
    }

    // Define the pages for managing Hero data
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHeroes::route('/'),
            'create' => Pages\CreateHero::route('/create'),
            'edit' => Pages\EditHero::route('/{record}/edit'),
        ];
    }
}
