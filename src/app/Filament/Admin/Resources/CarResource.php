<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\CarResource\Pages;
use App\Models\Car;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    protected static ?string $navigationGroup = 'Vehicle Management';

    protected static ?string $navigationLabel = 'Cars';

    protected static ?string $modelLabel = 'Car';

    protected static ?string $pluralModelLabel = 'Cars';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Vehicle Identity')
                    ->description('Data utama kendaraan yang ditampilkan pada katalog dan halaman detail.')
                    ->schema([
                        Forms\Components\Select::make('car_brand_id')
                            ->label('Brand')
                            ->relationship('brand', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        Forms\Components\TextInput::make('name')
                            ->label('Car Name')
                            ->placeholder('Example: Mercedes Benz AMG GT Black Series')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (?string $state, Forms\Set $set) {
                                if ($state) {
                                    $set('slug', Str::slug($state));
                                }
                            }),

                        Forms\Components\TextInput::make('slug')
                            ->label('Slug')
                            ->disabled()
                            ->dehydrated(false),

                        Forms\Components\Select::make('type')
                            ->label('Car Type')
                            ->options([
                                'new' => 'New Car',
                                'used' => 'Used Car',
                            ])
                            ->required(),

                        Forms\Components\Select::make('status')
                            ->label('Status')
                            ->options([
                                'available' => 'Available',
                                'sold' => 'Sold',
                            ])
                            ->default('available')
                            ->required(),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Price & Specifications')
                    ->description('Input spesifikasi kendaraan seperti contoh: YEAR, KM, ENGINE, COLOR.')
                    ->schema([
                        Forms\Components\TextInput::make('price')
                            ->label('Price')
                            ->numeric()
                            ->prefix('Rp')
                            ->placeholder('9500000000')
                            ->required(),

                        Forms\Components\TextInput::make('year')
                            ->label('Year')
                            ->numeric()
                            ->placeholder('2023')
                            ->required(),

                        Forms\Components\TextInput::make('mileage')
                            ->label('KM')
                            ->numeric()
                            ->placeholder('1492')
                            ->helperText('Isi kilometer kendaraan. Contoh: 1492'),

                        Forms\Components\TextInput::make('fuel_type')
                            ->label('Engine')
                            ->placeholder('Example: 4.0L AMG V8 biturbo')
                            ->helperText('Kolom ini dipakai sebagai Engine pada halaman detail.'),

                        Forms\Components\TextInput::make('color')
                            ->label('Color')
                            ->placeholder('Example: Orange Magma'),


                    ])
                    ->columns(2),

                Forms\Components\Section::make('Media')
                    ->description('Upload gambar mobil untuk ditampilkan pada katalog dan halaman detail.')
                    ->schema([
                        Forms\Components\FileUpload::make('thumbnail')
                            ->label('Thumbnail')
                            ->image()
                            ->directory('cars')
                            ->visibility('public')
                            ->maxSize(5120)
                            ->acceptedFileTypes([
                                'image/jpeg',
                                'image/png',
                                'image/webp',
                            ])
                            ->helperText('Maksimal 5 MB. Format: JPG, PNG, atau WEBP.'),
                    ])
                    ->columns(1),

                Forms\Components\Section::make('Descriptions')
                    ->description('Isi deskripsi dengan format seperti contoh: informasi mobil, performance, acceleration, dan detail lain.')
                    ->schema([
                        Forms\Components\Textarea::make('description')
                            ->label('Description')
                            ->rows(16)
                            ->placeholder(
                                "Mercedes Benz AMG GT Black Series\n\n" .
                                "Year : 2023\n" .
                                "Exterior : Orange Magma\n" .
                                "Interior : Black Alcantara\n" .
                                "Kilometer : 1492\n\n" .
                                "Performance\n" .
                                "Engine : 4.0L AMG V8 biturbo\n" .
                                "Power : 720 HP\n" .
                                "Torque : 800 Nm\n" .
                                "Transmission : 7-speed AMG SPEEDSHIFT DCT dual-clutch rear-mounted transaxle\n" .
                                "Layout : Rear wheel drive\n\n" .
                                "Acceleration\n" .
                                "0-100 Km/h : 3.2 Secs\n" .
                                "Max Speed : 325 Km/h"
                            )
                            ->helperText('Gunakan format baris seperti contoh agar tampil rapi di halaman detail.')
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Display Settings')
                    ->description('Atur apakah mobil tampil pada Featured Collection di halaman utama.')
                    ->schema([
                        Forms\Components\Toggle::make('is_featured')
                            ->label('Featured Car')
                            ->default(false)
                            ->helperText('Aktifkan jika mobil ingin tampil di bagian Featured Collection.'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Image')
                    ->square(),

                Tables\Columns\TextColumn::make('brand.name')
                    ->label('Brand')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('name')
                    ->label('Car Name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('type')
                    ->label('Type')
                    ->badge()
                    ->sortable(),

                Tables\Columns\TextColumn::make('year')
                    ->label('Year')
                    ->sortable(),

                Tables\Columns\TextColumn::make('mileage')
                    ->label('KM')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('fuel_type')
                    ->label('Engine')
                    ->limit(30)
                    ->searchable(),

                Tables\Columns\TextColumn::make('color')
                    ->label('Color')
                    ->searchable(),

                Tables\Columns\TextColumn::make('price')
                    ->label('Price')
                    ->money('IDR')
                    ->sortable(),

                Tables\Columns\IconColumn::make('is_featured')
                    ->label('Featured')
                    ->boolean(),

                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime('d M Y')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->label('Type')
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
                    ->label('Featured'),
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
        return [];
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