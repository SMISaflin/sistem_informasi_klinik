<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\AccountApproved;
use App\Notifications\AccountRejected;

class UserApprovalController extends Controller
{
    public function index()
    {
        $pendingUsers = User::where('is_approved', false)->get();
        return view('admin.user_approval', compact('pendingUsers'));
    }

    public function approve($id)
    {
      $user = User::findOrFail($id);
      $user->is_approved = true;
      $user->save();

// Kirim notifikasi email
    $user->notify(new AccountApproved());

return redirect()->back()->with('success', 'Akun telah disetujui.');
    }
    public function reject($id)
{
   $user = User::findOrFail($id);

// Kirim email sebelum dihapus
$user->notify(new AccountRejected());

// Hapus user
$user->delete();

return redirect()->back()->with('success', 'Akun telah ditolak dan dihapus.');
}
}
