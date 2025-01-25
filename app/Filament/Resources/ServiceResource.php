<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;
    protected static ?string $navigationGroup = 'Home';
    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $navigationLabel = 'Services';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(2) // Create a 2-column grid
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Service Title')
                            ->required()
                            ->helperText('Enter the title of the service. This will be displayed publicly.'),

                        Forms\Components\TextInput::make('icon')
                            ->label('Icon Class')
                            ->required()
                            ->helperText('Specify the icon class for this service (e.g., font-awesome class).'),

                        Forms\Components\TextArea::make('description')
                            ->label('Description')
                            ->required()
                            ->helperText('Provide a brief description of the service.'),

                        Forms\Components\FileUpload::make('image')
                            ->label('Service Image')
                            ->image()
                            ->disk('public')
                            ->directory('service')
                            ->nullable()
                            ->imageEditorViewportWidth(1690)
                            ->imageEditorViewportHeight(952)
                            ->helperText('Upload the image (1690X952 recommended).'),

                        Forms\Components\TextInput::make('main_title')
                            ->label('Main Title')
                            ->helperText('The main title for the service (optional).'),

                        Forms\Components\TextArea::make('content')
                            ->label('Content')
                            ->helperText('Add more detailed content for this service (optional).'),

                        Forms\Components\TextInput::make('meta_title')
                            ->label('Meta Title')
                            ->helperText('Specify the meta title for SEO purposes (optional).'),

                        Forms\Components\TextArea::make('meta_description')
                            ->label('Meta Description')
                            ->helperText('Provide a short description for SEO purposes (optional).'),

                        Forms\Components\Toggle::make('active')
                            ->label('Active')
                            ->default(true)
                            ->helperText('Set whether this service is active or not.'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->circular(),

                Tables\Columns\TextColumn::make('title')
                    ->label('Service Title')
                    ->searchable(),

                Tables\Columns\TextColumn::make('slug')
                    ->label('Service Slug')
                    ->searchable(),

                Tables\Columns\BooleanColumn::make('active')
                    ->label('Active'),

            ])
            ->filters([
                Tables\Filters\Filter::make('active')
                    ->label('Active')
                    ->query(fn($query) => $query->where('active', true)),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
