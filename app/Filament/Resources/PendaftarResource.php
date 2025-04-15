<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Pendaftar;
use Filament\Tables\Table;
use PhpParser\Node\Stmt\Label;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use Symfony\Contracts\Service\Attribute\Required;
use App\Filament\Resources\PendaftarResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PendaftarResource\RelationManagers;

class PendaftarResource extends Resource
{
    protected static ?string $model = Pendaftar::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $modelLabel = 'Pendaftar';

    protected static ?string $navigationGroup = 'Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->label('masukkan nama anda')
                    ->required(),

                TextInput::make('email')
                    ->email()
                    ->label('masukkan email dengan benar')
                    ->required(),

                DatePicker::make('tanggal_lahir')
                    ->required(),

                TextInput::make('alamat')
                    ->label('masukkan alamat')
                    ->required()
                    ->maxLength(255),

                Select::make('id_event')
                    ->label('Nama Event')
                    ->relationship('event', 'nama_event')
                    ->searchable()
                    ->preload()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->searchable(),

                TextColumn::make('email')
                    ->searchable(),

                TextColumn::make('tanggal_lahir')
                    ->date(),

                TextColumn::make('alamat')
                    ->words(50)
                    ->sortable(),

                TextColumn::make('event.nama_event')
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListPendaftars::route('/'),
            'create' => Pages\CreatePendaftar::route('/create'),
            'view' => Pages\ViewPendaftar::route('/{record}'),
            'edit' => Pages\EditPendaftar::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
