<?php

namespace App\Filament\Resources\Transactions\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use App\Models\Pricing;
use App\Models\User;
use Filament\Forms\Components\FileUpload;
use App\Models\Transaction;
use Filament\Schemas\Components\Wizard;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\ToggleButtons;
use Filament\Support\Icons\Heroicon;

class TransactionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Wizard::make([
                    Step::make('Product and Price')
                    ->schema([
                        Grid::make(2)
                        ->schema([
                            Select::make('pricing_id')
                            ->relationship('pricing', 'name')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->live()
                            ->afterStateUpdated(function ($state, callable $set) {
                                $pricing = Pricing::find($state);

                                $price = $pricing->price;
                                $duration = $pricing->duration;

                                $subTotal = $price * $state;
                                $totalPpn = $subTotal *0.12;
                                $totalAmount = $subTotal + $totalPpn;

                                $set('total_tax_amount', $totalPpn);
                                $set('grand_total_amount', $totalAmount);
                                $set('sub_total_amount', $price);
                                $set('duration', $duration);
                            })
                            ->afterStateHydrated(function (callable $set, $state) {
                                $pricingId = $state;
                                if($pricingId) {
                                    $pricing = Pricing::find($pricingId);
                                    $duration = $pricing->duration;
                                    $set('duration', $duration);
                                }
                            }),
                            TextInput::make('duration')
                            ->required()
                            ->numeric()
                            ->readOnly()
                            ->prefix('Months'),
                        ]),
                        Grid::make(3)
                        ->schema([
                            TextInput::make('sub_total_amount')
                            ->required()
                            ->numeric()
                            ->prefix('IDR')
                            ->readOnly(),
                            
                            TextInput::make('total_tax_amount')
                            ->required()
                            ->numeric()
                            ->prefix('IDR')
                            ->readOnly(),
                            
                            TextInput::make('grand_total_amount')
                            ->required()
                            ->numeric()
                            ->prefix('IDR')
                            ->readOnly()
                            ->helperText('Harga sudah termasuk PPN 12%'),
                        ]),
                        Grid::make(2)
                        ->schema([
                            DatePicker::make('started_at')
                            ->required()
                            ->live()
                            ->afterStateUpdated(function ($state, callable $set, callable $get) {
                                $duration = $get('duration');
                                if($state && $duration) {
                                    $endedAt = \Carbon\Carbon::parse($state)->addMonth($duration);
                                    $set('ended_at', $endedAt->format('Y-m-d'));
                                }
                            }),

                            DatePicker::make('ended_at')
                            ->readOnly()
                            ->required(),

                        ])
                    ]),

                    Step::make('Customer Information')
                        ->schema([
                            Select::make('user_id')
                                ->relationship('student', 'email')
                                ->searchable()
                                ->preload()
                                ->live()
                                ->required()
                                ->afterStateUpdated(function ($state, callable $set) {
                                    $user = User::find($state);

                                    $name = $user->name;
                                    $email = $user->email;

                                    $set('name', $name);
                                    $set('email', $email);
                                })
                                ->afterStateHydrated(function (callable $set, $state) {
                                    $userId = $state;

                                    if($userId) {
                                        $user = User::find($userId);
                                        $name = $user->name;
                                        $email = $user->email;
                                        $set('name', $name);
                                        $set('email', $email);
                                    }
                                }),
                            TextInput::make('name')
                            ->required()
                            ->readOnly()
                            ->maxLength(255),
                            TextInput::make('email')
                            ->required()
                            ->readOnly()
                            ->maxLength(255),
                        ]),

                        Step::make('Payment Information')
                            ->schema([
                                ToggleButtons::make('is_paid')
                                    ->label('Apakah sudah membayar?')
                                    ->boolean()
                                    ->grouped()
                                    ->icons([
                                        true => Heroicon::CheckCircle,
                                        false => Heroicon::Clock
                                    ])
                                    ->required(),

                                Select::make('payment_type')
                                    ->options([
                                        'Midtrans' => 'Midtrans',
                                        'Manual' => 'Manual'
                                    ])
                                    ->required(),

                                FileUpload::make('proof')
                                ->image(),
                            ])
                ])
                ->columnSpan('full')
                ->columns(1)
                ->skippable()
            ]);
    }
}
