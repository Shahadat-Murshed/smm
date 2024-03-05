<?php

namespace App\Console\Commands;

use App\Models\AdvOrder;
use App\Models\AdvOrderDrip;
use App\Services\DripOrderService;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;

class DripOrders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'orders:drip';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(DripOrderService $dripOrderService)
    {
        /**
         * Check today's date and get all where api_order_id is null
         * Then call to that providers api with all the data
         * if it fails don't update anything just log it
         **/
        $dripOrderService->makeApiCalls();
        return 0;
    }
}
