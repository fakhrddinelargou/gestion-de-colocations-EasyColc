<?php

namespace App\Http\Controllers;
use App\Mail\InvitationMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Invitation;
use App\Models\Colocation;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class InvitationController extends Controller
{
    public function store(Request $request, Colocation $colocation)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $token = Str::uuid();

        Invitation::create([
            'colocation_id' => $colocation->id,
            'email' => $request->email,
            'token' => $token,
            'expires_at' => now()->addDays(2)
        ]);

             $link = route('invitation.show' , $token);
        Mail::to($request->email)->send(new InvitationMail($link));

        return back()->with('success', 'Invitation envoyée.');
    }

    public function show($token){
        $invitation = Invitation::where('token', $token)
                ->where('status', 'pending')
                ->firstOrFail();

        return view('invitation.show_invitation' , compact('invitation'));
    }

public function accept(Request $request , $token)
{
    $invitation = Invitation::where('token', $token)
                    ->where('status', 'pending')
                    ->firstOrFail();

    if ($invitation->expires_at && now()->gt($invitation->expires_at)) {
        $invitation->update(['status' => 'expired']);
        abort(403, 'Invitation expirée');
    }

    if ($invitation->email !== auth()->user()->email) {
        abort(403, 'Cette invitation ne vous appartient pas');
    }

    $alreadyMember = Member::where('user_id', auth()->id())
                        ->whereNull('left_at')
                        ->exists();

    if ($alreadyMember) {
        return back()->with('error', 'Vous êtes déjà dans une colocation.');
    }

   
     Member::create([
        'colocation_id' => $invitation->colocation_id,
        'user_id' => auth()->id(),
        'role' => 'member',
        'joined_at' => now(),
    ]);

    $invitation->update([
        'status' => 'accepted'
    ]);

   
    return redirect()->route('colocations.show', $invitation->colocation_id);
}


}