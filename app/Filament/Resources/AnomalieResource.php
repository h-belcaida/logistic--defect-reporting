<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnomalieResource\Pages;
use App\Filament\Resources\AnomalieResource\RelationManagers;
use App\Models\Anomalie;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AnomalieResource extends Resource
{
    protected static ?string $model = Anomalie::class;

    protected static ?string $navigationIcon = 'heroicon-o-exclamation';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                    Forms\Components\TextInput::make('type')
                    ->required()
                    ->maxLength(255),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type')->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListAnomalies::route('/'),
            'create' => Pages\CreateAnomalie::route('/create'),
            'edit' => Pages\EditAnomalie::route('/{record}/edit'),
        ];
    }    
}
