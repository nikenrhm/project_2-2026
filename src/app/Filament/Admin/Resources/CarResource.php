<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\CarResource\Pages;
use App\Models\Car;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    protected static ?string $navigationLabel = 'Cars';

    protected static ?string $modelLabel = 'Car';

    protected static ?string $pluralModelLabel = 'Cars';

    protected static ?string $navigationGroup = 'Inventory';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Car Information')
                    ->description('Main vehicle information displayed on the public website.')
                    ->schema([
                        Forms\Components\Select::make('car_brand_id')
                            ->label('Brand')
                            ->relationship('brand', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        Forms\Components\TextInput::make('name')
                            ->label('Car Name')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (Set $set, ?string $state): void {
                                if (!$state) {
                                    return;
                                }

                                $set('slug', Str::slug($state));
                            }),

                        Forms\Components\TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->helperText('Slug digunakan untuk URL detail mobil. Contoh: ferrari-sf90-spider'),

                        Forms\Components\Select::make('type')
                            ->label('Car Type')
                            ->options([
                                'new' => 'New Car',
                                'used' => 'Used Car',
                            ])
                            ->native(false)
                            ->required(),

                        Forms\Components\TextInput::make('year')
                            ->label('Year')
                            ->numeric()
                            ->minValue(1900)
                            ->maxValue((int) date('Y') + 1)
                            ->required(),

                        Forms\Components\TextInput::make('price')
                            ->label('Price')
                            ->numeric()
                            ->prefix('Rp')
                            ->required(),

                        Forms\Components\TextInput::make('mileage')
                            ->label('Mileage')
                            ->numeric()
                            ->suffix('KM')
                            ->helperText('Kosongkan atau isi 0 untuk mobil baru.'),

                        Forms\Components\Select::make('transmission')
                            ->label('Transmission')
                            ->options([
                                'Manual' => 'Manual',
                                'Automatic' => 'Automatic',
                                'CVT' => 'CVT',
                            ])
                            ->native(false),

                        Forms\Components\TextInput::make('fuel_type')
                            ->label('Fuel Type')
                            ->maxLength(255)
                            ->placeholder('Petrol, Hybrid, Electric'),

                        Forms\Components\TextInput::make('color')
                            ->label('Color')
                            ->maxLength(255)
                            ->placeholder('Red, White, Black, Ruby Star Neo'),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Media')
                    ->description('Upload gambar mobil untuk ditampilkan di website.')
                    ->schema([
                        Forms\Components\FileUpload::make('thumbnail')
                            ->label('Thumbnail')
                            ->image()
                            ->disk('public')
                            ->directory('cars')
                            ->visibility('public')
                            ->acceptedFileTypes([
                                'image/jpeg',
                                'image/png',
                                'image/webp',
                            ])
                            ->maxSize(5120)
                            ->imagePreviewHeight('180')
                            ->downloadable()
                            ->openable()
                            ->helperText('Maksimal 5 MB. Format: JPG, PNG, atau WEBP.'),
                    ]),

                Forms\Components\Section::make('Status & Display')
                    ->description('Atur status mobil dan apakah mobil tampil di Featured Fleet.')
                    ->schema([
                        Forms\Components\Toggle::make('is_featured')
                            ->label('Featured Car')
                            ->helperText('Aktifkan jika mobil ingin ditampilkan di bagian Featured Fleet.')
                            ->default(false),

                        Forms\Components\Select::make('status')
                            ->label('Status')
                            ->options([
                                'available' => 'Available',
                                'sold' => 'Sold',
                            ])
                            ->native(false)
                            ->default('available')
                            ->required(),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Description')
                    ->schema([
                        Forms\Components\RichEditor::make('description')
                            ->label('Description')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Image')
                    ->disk('public')
                    ->square()
                    ->size(64),

                Tables\Columns\TextColumn::make('brand.name')
                    ->label('Brand')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('name')
                    ->label('Car Name')
                    ->searchable()
                    ->sortable()
                    ->limit(35),

                Tables\Columns\TextColumn::make('type')
                    ->label('Type')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'new' => 'success',
                        'used' => 'warning',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'new' => 'New Car',
                        'used' => 'Used Car',
                        default => ucfirst($state),
                    }),

                Tables\Columns\TextColumn::make('year')
                    ->label('Year')
                    ->sortable(),

                Tables\Columns\TextColumn::make('price')
                    ->label('Price')
                    ->money('IDR')
                    ->sortable(),

                Tables\Columns\TextColumn::make('mileage')
                    ->label('Mileage')
                    ->suffix(' KM')
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('transmission')
                    ->label('Transmission')
                    ->toggleable(),

                Tables\Columns\TextColumn::make('fuel_type')
                    ->label('Fuel')
                    ->toggleable(),

                Tables\Columns\TextColumn::make('color')
                    ->label('Color')
                    ->toggleable(),

                Tables\Columns\IconColumn::make('is_featured')
                    ->label('Featured')
                    ->boolean()
                    ->sortable(),

                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'available' => 'success',
                        'sold' => 'danger',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'available' => 'Available',
                        'sold' => 'Sold',
                        default => ucfirst($state),
                    }),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->label('Car Type')
                    ->options([
                        'new' => 'New Car',
                        'used' => 'Used Car',
                    ]),

                Tables\Filters\SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        'available' => 'Available',
                        'sold' => 'Sold',
                    ]),

                Tables\Filters\TernaryFilter::make('is_featured')
                    ->label('Featured Cars'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
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