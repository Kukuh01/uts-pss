<?php

namespace App\Filament\Widgets;

use App\Models\User;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class DashboardStats extends BaseWidget
{
    protected function getStats(): array
    {
        $userCount = User::count();
        $categoryCount = Category::count();
        $productCount = Product::count();
        $brandCount = Brand::count();

        return [
            Stat::make('Total User', $userCount)
                ->description('Jumlah semua user')
                ->color('success'),

            Stat::make('Jumlah Kategori', $categoryCount)
                ->description('Total kategori')
                ->color('info'),

            Stat::make('Jumlah Brand', $brandCount)
                ->description('Total brand')
                ->color('info'),
            
            Stat::make('Jumlah Product', $categoryCount)
                ->description('Total product')
                ->color('info'),
        ];
    }
}
