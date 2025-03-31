<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\FormsComponent;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use function Laravel\Prompts\form;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;
    protected static?string $label = 'Danh mục sản phẩm';
    //protected static?string $navigationGroup = 'Danh mục sản phẩm';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                ->required()
                ->label('Tên danh mục'),

                TextInput::make('status')
               
                ->label('Trạng thái'),

                RichEditor::make('desciption')
                ->columnSpan('2')
                ->label('Mô tả'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable()->sortable()
                ->label('Tên danh mục'),
                TextColumn::make('status')->sortable()
                ->label('Trạng thái')
               // TextColumn::make('Mô tả')->sortable(),

            ])
            ->filters([
                SelectFilter::make('category_id')
                ->label('Sản Phẩm')
                ->options(Category::all()->pluck('name', 'id')),

                Tables\Filters\Filter::make('created_at')
                ->form([
                    Forms\Components\DateTimePicker::make('created_from')
                    ->label('Tạo từ')
                    ->rules('date'),
                ])
            ])
            
            ->actions([
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
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
