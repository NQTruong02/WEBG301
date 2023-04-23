<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseResource\Pages;
use App\Filament\Resources\CourseResource\RelationManagers;
use App\Models\Course;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CourseResource extends Resource
{
    protected static ?string $model = Course::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
    ->schema([
        TextInput::make('course_id'), 
        Select::make('subject_id')
        ->relationship('subject', 'name subject'),
                
        Select::make('teacher_id')
    ->relationship('teacher', 'name'),
    Select::make('class')
    ->options([
        'GCH1001' => 'GCH1001',
        'GCH1005' => 'GCH1005',
        'GCH1007' => 'GCH1007',
        'GCH1101' => 'GCH1101',
        'GCH1102' => 'GCH1102',
        'GCH1104' => 'GCH1104',
        'GCH1106' => 'GCH1106',


   
    ]),
   
    ])
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('course_id') -> sortable() ->searchable(),
                TextColumn::make('subject.name subject') -> sortable() ->searchable(),
                
                TextColumn::make('teacher.name') -> sortable() ->searchable(),
                TextColumn::make('class') -> sortable() ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime(),
                TextColumn::make('updated_at')
                    ->dateTime(),
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
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'edit' => Pages\EditCourse::route('/{record}/edit'),
        ];
    }    
}
