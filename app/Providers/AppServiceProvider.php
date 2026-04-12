<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use App\Models\Machine;
// use App\Models\Breakdown;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
            \Illuminate\Pagination\Paginator::useBootstrap();
            $currentFactoryId = session('current_factory_id');

            if ($currentFactoryId) {
                // শুধু নির্দিষ্ট ফ্যাক্টরির ডেটা দেখাবে
                // Machine::addGlobalScope('current_factory', function ($query) use ($currentFactoryId) {
                //     $query->where('factory_id', $currentFactoryId);
                // });

                // Breakdown::addGlobalScope('current_factory', function ($query) use ($currentFactoryId) {
                //     $query->where('factory_id', $currentFactoryId);
                // });

                // Service, MachineUsage, IdleMachine — সব মডেলের জন্য একইভাবে করুন
            }
            // যদি session খালি থাকে → TEAM GROUP (সব ফ্যাক্টরির ডেটা) দেখাবে, কোনো scope লাগবে না
    }
}
