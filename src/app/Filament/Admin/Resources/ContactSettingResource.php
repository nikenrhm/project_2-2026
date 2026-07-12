<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ContactSettingResource\Pages;
use App\Models\ContactSetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ContactSettingResource extends Resource
{
    protected static ?string $model = ContactSetting::class;

    protected static ?string $navigationIcon = 'heroicon-o-phone';

    protected static ?string $navigationGroup = 'Content Management';

    protected static ?string $navigationLabel = 'Contact Settings';

    protected static ?string $modelLabel = 'Contact Setting';

    protected static ?string $pluralModelLabel = 'Contact Settings';

    protected static ?string $slug = 'contact-settings';

    protected static ?int $navigationSort = 10;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('WhatsApp')
                    ->schema([
                        Forms\Components\TextInput::make('whatsapp_label')
                            ->label('WhatsApp Display')
                            ->placeholder('0896-1273-3775'),

                        Forms\Components\TextInput::make('whatsapp_number')
                            ->label('WhatsApp Number for Link')
                            ->placeholder('6289612733775')
                            ->helperText('Gunakan format internasional tanpa +. Contoh: 6289612733775.'),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Instagram & Email')
                    ->schema([
                        Forms\Components\TextInput::make('instagram_username')
                            ->label('Instagram Username')
                            ->placeholder('@dreamculture.id'),

                        Forms\Components\TextInput::make('instagram_url')
                            ->label('Instagram URL')
                            ->placeholder('https://instagram.com/dreamculture.id')
                            ->url(),

                        Forms\Components\TextInput::make('email')
                            ->label('Email')
                            ->placeholder('info@dreamculture.com')
                            ->email(),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Address')
                    ->schema([
                        Forms\Components\Textarea::make('address')
                            ->label('Showroom Address')
                            ->rows(4)
                            ->placeholder("Jl. Dream Culture No. 88\nMedan, Sumatera Utara\nIndonesia")
                            ->columnSpanFull(),

                        Forms\Components\TextInput::make('map_url')
                            ->label('Google Maps URL')
                            ->placeholder('https://maps.google.com/...')
                            ->url()
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Status')
                    ->schema([
                        Forms\Components\Toggle::make('is_active')
                            ->label('Active')
                            ->default(true),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('whatsapp_label')
                    ->label('WhatsApp')
                    ->searchable(),

                Tables\Columns\TextColumn::make('instagram_username')
                    ->label('Instagram')
                    ->searchable(),

                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([])
            ->defaultSort('updated_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContactSettings::route('/'),
            'create' => Pages\CreateContactSetting::route('/create'),
            'edit' => Pages\EditContactSetting::route('/{record}/edit'),
        ];
    }
}
