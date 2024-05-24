<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ScheduleResource\Pages;
use App\Filament\Resources\ScheduleResource\RelationManagers;
use App\Models\Schedule;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\TextInputColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Date;

class ScheduleResource extends Resource
{
    protected static ?string $model = Schedule::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_pelatihan'),
                DatePicker::make('tanggal_buka'),
                TextInput::make('link_regis'),
                Select::make('pic_kegiatan')
                    ->options([
                        'Miftahul' => 'Miftahul',
                        'Hidayat' => 'Hidayat',
                        'Surmiati' => 'Surmiati',
                        'Ramadhan' => 'Ramadhan'
                    ]),
                TextInput::make('link_grup'),
                Checkbox::make('show')->inline(false)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_pelatihan')->label('Nama Pelatihan'),
                TextColumn::make('tanggal_buka')->label('Tanggal Registrasi')
                    ->date('d M Y'),
                // TextColumn::make('link_regis'),
                TextColumn::make('pic_kegiatan')->label('PIC'),
                TextColumn::make('link_grup')->label('Link Grup'),
                CheckboxColumn::make('show')->inline(false)
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageSchedules::route('/'),
        ];
    }
}
