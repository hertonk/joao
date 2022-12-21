<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Participant;

class ParticipantController extends Controller
{
    function inscricao(){
        return view('inscricao.inscricao');
    }

    function store(Request $request){

        //Registration
        $path1 = public_path('tmp/uploads');

        if ( ! file_exists($path1) ) {
            mkdir($path1, 0777, true);
        }

        $file1 = $request->file('registration');

        $fileName1 = time().rand(1,99).'.'.$file1->extension();

        $file1->move($path1, $fileName1);

        //Photo
        $path2 = public_path('tmp/uploads');

        if ( ! file_exists($path2) ) {
            mkdir($path2, 0777, true);
        }

        $file2 = $request->file('photo');

        $fileName2 = time().rand(1,99).'.'.$file2->extension();

        $file2->move($path2, $fileName2);

        Participant::create([
            "name" => $request->name,
            "cpf" => $request->cpf,
            "birthday" => $request->birthday,
            "whatsapp" => $request->whatsapp,
            "emergency" => $request->emergency,
            "address" => $request->address,
            "instagram" => $request->instagram,
            "registration" => $fileName1,
            "photo" => $fileName2,
            "athletic_id" => $request->athletic_id,
            "type" => $request->type,
            "accommodation" => $request->accommodation,
            "status" => "1"
        ]);

        return redirect('/confirmacao');

    }

    function confirmacao(){
        return view('inscricao.confirmacao');
    }

    function aprovar($id){

        $participant = Participant::find($id);

        $participant->status = 2;
        $participant->save();

        return redirect('/detalhe/'.$id);
    }

    function naoaprovar($id){

        $participant = Participant::find($id);

        $participant->status = 3;
        $participant->save();

        return redirect('/detalhe/'.$id);
    }

}
