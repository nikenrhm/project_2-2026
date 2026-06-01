<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\SpecialRequestResource\Pages;
use App\Models\SpecialRequest;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SpecialRequestResource extends Resource
{
    protected static ?string $model = SpecialRequest::class;

    protected static ?string $navigationIcon = 'heroicon-o-magnifying-glass';

    protected static ?string $navigationLabel = 'Special Requests';

    protected static ?string $navigationGroup = 'Customer Requests';

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

                Forms\Components\TextInput::make('budget')
                    ->disabled(),

                Forms\Components\Textarea::make('description')
                    ->disabled()
                    ->columnSpanFull(),

                Forms\Components\Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'contacted' => 'Contacted',
                        'completed' => 'Completed',
                        'cancelled' => 'Cancelled',
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

                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),

                Tables\Columns\TextColumn::make('brand')
                    ->searchable(),

                Tables\Columns\TextColumn::make('model')
                    ->searchable(),

                Tables\Columns\TextColumn::make('budget')
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
                        'contacted' => 'Contacted',
                        'completed' => 'Completed',
                        'cancelled' => 'Cancelled',
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
            'index' => Pages\ListSpecialRequests::route('/'),
            'create' => Pages\CreateSpecialRequest::route('/create'),
            'edit' => Pages\EditSpecialRequest::route('/{record}/edit'),
        ];
    }
}