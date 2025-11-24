<?php

namespace App\Filament\Resources\Transactions\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Notifications\Notification;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Filament\Actions\Action;
use Filament\Tables\Columns\ImageColumn;
use App\Models\Transaction;


class TransactionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('student.photo')
                ->circular(),
                TextColumn::make('student.name')
                    ->searchable(),
                TextColumn::make('booking_trx_id')
                    ->label('Trx Id')
                    ->searchable(),
                TextColumn::make('pricing.name')
                    ->searchable(),
                TextColumn::make('started_at')
                    ->date()
                    ->sortable(),
                IconColumn::make('is_paid')
                    ->boolean()
                    ->trueColor('success')
                    ->falseColor('danger')
                    ->label('Terverifikasi'),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                EditAction::make(),
                ViewAction::make(),

                Action::make('approve')
                    ->label('Approve')
                    ->action(function (Transaction $record) {
                        $record->is_paid = true;
                        $record->save();

                        Notification::make()
                            ->title('Order Approved')
                            ->body('The Order has been approved.')
                            ->success()
                            ->send();
                    })
                    ->color('success')
                    ->requiresConfirmation()
                    ->visible(fn (Transaction $record) => !$record->is_paid),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
