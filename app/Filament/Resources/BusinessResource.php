<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BusinessResource\Pages;
use App\Models\Business;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;

class BusinessResource extends Resource
{
    protected static ?string $model = Business::class;

    protected static ?string $navigationLabel = 'Business';
    protected static ?string $navigationGroup = 'Home';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(2)->schema([
                    TextInput::make('meta_title')
                        ->label('Meta Title')
                        ->required()
                        ->maxLength(255)
                        ->helperText('Provide the meta title (maximum 255 characters).'),

                    Textarea::make('meta_description')
                        ->label('Meta Description')
                        ->required()
                        ->maxLength(1000)
                        ->helperText('Provide a brief meta description (maximum 1000 characters).'),

                    TextInput::make('main_title')
                        ->label('Main Title')
                        ->required()
                        ->helperText('Enter the main title for the business. This will be displayed prominently.'),

                    Textarea::make('main_description')
                        ->label('Main Description')
                        ->required()
                        ->helperText('Provide a detailed description of the business.'),

                    TextInput::make('years_of_experience')
                        ->label('Years of Experience')
                        ->numeric()
                        ->required()
                        ->helperText('Enter the number of years of experience your business has.'),

                    TextInput::make('successful_projects')
                        ->label('Successful Projects')
                        ->numeric()
                        ->required()
                        ->helperText('Enter the number of successful projects completed by the business.'),

                    TextInput::make('client_satisfaction_rate')
                        ->label('Client Satisfaction Rate')
                        ->numeric()
                        ->required()
                        ->helperText('Enter the percentage of client satisfaction rate.'),

                    TextInput::make('youtube_link')
                        ->label('YouTube Link')
                        ->url()
                        ->nullable()
                        ->helperText('Provide a link to a YouTube video (optional).'),

                    FileUpload::make('video_bg_image')
                        ->label('Video Background Image')
                        ->disk('public') // Ensure you use the correct disk (public storage)
                        ->image()
                        ->imageEditorViewportWidth(1690)
                        ->imageEditorViewportHeight(952)
                        ->helperText('Upload the image (1690x952 recommended).')
                        ->directory('business')
                        ->nullable(),

                    Toggle::make('active')
                        ->label('Active')
                        ->default(true)
                        ->required()
                        ->helperText('Toggle the status to make the business active or inactive.'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('main_title')->sortable()->limit(15)->searchable(),
            Tables\Columns\TextColumn::make('slug')->sortable()->limit(20)->searchable(),
            Tables\Columns\TextColumn::make('years_of_experience')->limit(10)->sortable(),
            Tables\Columns\TextColumn::make('successful_projects')->limit(10)->sortable(),
            Tables\Columns\TextColumn::make('client_satisfaction_rate')->limit(10)->sortable(),
            Tables\Columns\BooleanColumn::make('active'),
        ])
        ->filters([
            // Add your filters if needed
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

    public static function navigation(): array
    {
        return [
            \Filament\Navigation\NavigationGroup::make()
                ->label('Business')
                ->icon('heroicon-o-collection')
                ->items([
                    static::make()->navigationLabel('Business'),
                ]),
        ];
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
            'index' => Pages\ListBusinesses::route('/'),
            'create' => Pages\CreateBusiness::route('/create'),
            'edit' => Pages\EditBusiness::route('/{record}/edit'),
        ];
    }
}
