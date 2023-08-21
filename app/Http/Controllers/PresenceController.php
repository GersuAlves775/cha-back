<?php

namespace App\Http\Controllers;

use App\Guess;
use App\Presence;
use Illuminate\Http\Request;

class PresenceController extends Controller
{

    public function confirm(Request $request)
    {
        Presence::query()
            ->where('hash', $request->get('hash'))
            ->update(['confirm' => true]);

        return response()->json(['message' => 'Presença confirmada com sucesso!']);
    }


    public function generate(Request $request)
    {
        $hash = uniqid();
        Presence::query()
            ->create([
                'name' => $request->get('name'),
                'hash' => $hash
            ]);

        return $request->get('name') . " - " .env('FRONT_URL') . "?hash=" . $hash;
    }

    public function vote(Request $request)
    {
        $presence = Presence::query()->where('hash', $request->get('hash'))->first();

        Guess::query()
            ->updateOrCreate([
                'id_presence' => $presence->id_presence
            ], [
                'id_option' => $request->get('option')
            ]);

        return response()->json(['message' => 'Palpite registrado com sucesso!']);
    }
}
