<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Models\Student;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make()
->schema([
    Select::make('subject_id')
    ->relationship('subject', 'name subject'),
    
    Select::make('grade_id')
    ->relationship('grade', 'score'),

    Select::make('course_id')
    ->relationship('course', 'class'),
            
    TextInput::make('name'), 
         
    TextInput::make('age'),
    Select::make('gender')
    ->options([
        
        'Male' => 'Male',
        'Female' => 'Female',
   
    ]),
    TextInput::make('address'),
    TextInput::make('gmail'),



])
            
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')-> sortable() ->searchable(),
                TextColumn::make('age')-> sortable() ->searchable(),
                TextColumn::make('gender')-> sortable() ->searchable(),
                TextColumn::make('subject.name subject') -> sortable() ->searchable(),
                TextColumn::make('grade.score') -> sortable() ->searchable(),
                TextColumn::make('course.class') -> sortable() ->searchable(),
               
               
                TextColumn::make('address')-> sortable() ->searchable(),
                TextColumn::make('gmail')-> sortable() ->searchable(),
                

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
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }    
}
