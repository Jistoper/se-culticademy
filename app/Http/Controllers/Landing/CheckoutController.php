<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Cart;
use App\Models\User;
use App\Models\Transaction;
use App\Models\TransactionDetail;
// generate nomor invoice
use Illuminate\Support\Str;

// send notification database
use App\Notifications\NewTransaction;
use Illuminate\Support\Facades\Notification;
use Midtrans\Snap;

class CheckoutController extends Controller
{
    public function store(Request $request) {
        // Dummy logic to generate a random invoice
        $length = 6;
        $random = '';
        for ($i = 0; $i < $length; $i++) {
            $random .= rand(0, 1) ? rand(0, 9) : chr(rand(ord('a'), ord('z')));
        }
        $no_invoice = 'CULTI-'.Str::upper($random);

        // Dummy logic to create a dummy transaction
        $invoice = Transaction::create([
            'invoice'       => $no_invoice,
            'user_id'       => $request->user()->id,
            'name'          => $request->name,
            'grand_total'   => $request->grand_total,
            'status'        => 'success',
        ]);

        // simpan data variabel $invoice.
        $invoice->save();

        // tampung data cart dari user yang sedang login kedalam variabel $carts.
        $carts = Cart::where('user_id', $request->user()->id);

        // lakukan perulangan data $carts yang kita ubah menjadi variabel $cart.
        foreach($carts->get() as $cart){
        // masukan data baru transaction details dengan "transaction_id" sesuai dengan variabel $invoice.
        $invoice->details()->create([
            'course_id' => $cart->course_id,
            'price' => $cart->price
            ]);
        }

        // delete carts
        $carts->delete();

        // Dummy logic to delete the user's carts
        $carts = Cart::where('user_id', $request->user()->id)->delete();

        // Dummy logic to send notifications to admin
        $admin = User::role('admin')->get();
        // Notification::send($admin, new NewTransaction($invoice));
        return view('landing.cart.checkout')->with('invoice', $invoice);
    }
}
