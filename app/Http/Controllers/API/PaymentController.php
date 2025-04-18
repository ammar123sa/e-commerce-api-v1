<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function store(Request $request, Order $order)
    {
        if ($order->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        if ($order->status === 'cancelled') {
            return response()->json(['message' => 'Cannot pay for a cancelled order'], 400);
        }

        if ($order->payment) {
            return response()->json(['message' => 'Payment already exists for this order'], 400);
        }

        $request->validate([
            'payment_method' => 'required|string|in:credit_card,paypal,bank_transfer',
        ]);

        $payment = Payment::create([
            'order_id' => $order->id,
            'amount' => $order->total_price,
            'payment_method' => $request->payment_method,
            'status' => 'completed', // In a real app, you'd process the payment first
        ]);

        // Update order status
        $order->update(['status' => 'processing']);

        return response()->json($payment, 201);
    }

    public function show(Order $order)
    {
        if ($order->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        if (!$order->payment) {
            return response()->json(['message' => 'No payment found for this order'], 404);
        }

        return $order->payment;
    }
}