<?php
namespace  App\Enums;
interface OrderStatus {
    const PENDING = 'pending';
    const COMPLETED = 'completed';
    const ONGOING = 'ongoing';
    const CANCELLED = 'cancelled';
    const PARTIAL = 'partial';
}
