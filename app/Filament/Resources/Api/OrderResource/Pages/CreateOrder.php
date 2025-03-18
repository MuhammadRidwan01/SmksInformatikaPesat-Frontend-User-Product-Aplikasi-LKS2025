<?php

namespace App\Filament\Resources\API\OrderResource\Pages;

use App\Filament\Resources\API\OrderResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOrder extends CreateRecord
{
    protected static string $resource = OrderResource::class;
}
