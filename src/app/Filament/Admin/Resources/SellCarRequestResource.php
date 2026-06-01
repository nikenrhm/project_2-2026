<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\SellCarRequestResource\Pages;
use App\Models\SellCarRequest;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SellCarRequestResource extends Resource
{
    protected static ?string $model = SellCarRequest::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    protected static ?string $navigationLabel = 'Sell Car Requests';

    protected static ?string $navigationGroup = 'Customer Requests';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('full_name')
                    ->disabled(),

                Forms\Components\TextInput::make('email')
                    ->disabled(),

                Forms\Components\TextInput::make('phone')
                    ->disabled(),

                Forms\Components\TextInput::make('brand')
                    ->disabled(),

                Forms\Components\TextInput::make('model')
                    ->disabled(),

                Forms\Components\TextInput::make('year')
                    ->disabled(),

                Forms\Components\TextInput::make('expected_price')
                    ->disabled(),

                Forms\Components\Textarea::make('description')
                    ->disabled()
                    ->columnSpanFull(),

                Forms\Components\Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'reviewed' => 'Reviewed',
                        'approved' => 'Approved',
                        'rejected' => 'Rejected',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('brand')
                    ->searchable(),

                Tables\Columns\TextColumn::make('model')
                    ->searchable(),

                Tables\Columns\TextColumn::make('year')
                    ->sortable(),

                Tables\Columns\TextColumn::make('expected_price')
                    ->money('IDR')
                    ->sortable(),

                Tables\Columns\TextColumn::make('status')
                    ->badge(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'reviewed' => 'Reviewed',
                        'approved' => 'Approved',
                        'rejected' => 'Rejected',
                    ]),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSellCarRequests::route('/'),
            'create' => Pages\CreateSellCarRequest::route('/create'),
            'edit' => Pages\EditSellCarRequest::route('/{record}/edit'),
        ];
    }
}