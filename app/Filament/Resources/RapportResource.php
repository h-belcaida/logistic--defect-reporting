<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RapportResource\Pages;
use App\Filament\Resources\RapportResource\RelationManagers;
use App\Models\Rapport;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RapportResource extends Resource
{
    protected static ?string $model = Rapport::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('title'),
                    Select::make('salle_id')
                        ->relationship('salle', 'type'),
                    Select::make('anomalie_id')
                        ->relationship('anomalie', 'type'),
                    SpatieMediaLibraryFileUpload::make('photo')->collection('reports'),
                    Textarea::make('comment')
                    ->rows(3),
                    Toggle::make('est_resolu'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('title'),
                TextColumn::make('created_at')
                    ->dateTime('d-M-Y')->sortable(),
                IconColumn::make('est_resolu')->boolean(),
            SpatieMediaLibraryImageColumn::make('photo')->collection('reports'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListRapports::route('/'),
            'create' => Pages\CreateRapport::route('/create'),
            'edit' => Pages\EditRapport::route('/{record}/edit'),
        ];
    }    
}
