<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\CarResource\Pages;
use App\Filament\Admin\Resources\CarResource\RelationManagers;
use App\Models\Car;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
    return $form
        ->schema([
            Forms\Components\Select::make('car_brand_id')
                ->relationship('brand', 'name')
                ->searchable()
                ->preload()
                ->required(),

            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('slug')
                ->disabled()
                ->dehydrated(false),

            Forms\Components\Select::make('type')
                ->options([
                    'new' => 'New Car',
                    'used' => 'Used Car',
                ])
                ->required(),

            Forms\Components\TextInput::make('year')
                ->numeric()
                ->required(),

            Forms\Components\TextInput::make('price')
                ->numeric()
                ->required()
                ->prefix('Rp'),

            Forms\Components\TextInput::make('mileage')
                ->numeric(),

            Forms\Components\Select::make('transmission')
                ->options([
                    'Manual' => 'Manual',
                    'Automatic' => 'Automatic',
                ]),

            Forms\Components\TextInput::make('fuel_type'),

            Forms\Components\TextInput::make('color'),

            Forms\Components\FileUpload::make('thumbnail')
                ->image()
                ->directory('cars'),

            Forms\Components\Toggle::make('is_featured')
                ->default(false),

            Forms\Components\Select::make('status')
                ->options([
                    'available' => 'Available',
                    'sold' => 'Sold',
                ])
                ->default('available')
                ->required(),

            Forms\Components\RichEditor::make('description')
                ->columnSpanFull(),
        ]);
    }      
   public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\ImageColumn::make('thumbnail')
                ->square(),

            Tables\Columns\TextColumn::make('brand.name')
                ->label('Brand')
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('type')
                ->badge(),

            Tables\Columns\TextColumn::make('year')
                ->sortable(),

            Tables\Columns\TextColumn::make('price')
                ->money('IDR')
                ->sortable(),

            Tables\Columns\TextColumn::make('mileage')
                ->sortable(),

            Tables\Columns\TextColumn::make('transmission'),

            Tables\Columns\IconColumn::make('is_featured')
                ->boolean(),

            Tables\Columns\TextColumn::make('status')
                ->badge(),

            Tables\Columns\TextColumn::make('created_at')
                ->dateTime('d M Y')
                ->sortable(),
        ])
        ->filters([
            Tables\Filters\SelectFilter::make('type')
                ->options([
                    'new' => 'New Car',
                    'used' => 'Used Car',
                ]),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListCars::route('/'),
            'create' => Pages\CreateCar::route('/create'),
            'edit' => Pages\EditCar::route('/{record}/edit'),
        ];
    }
}
