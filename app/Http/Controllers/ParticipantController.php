<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\Cpf;
use App\Models\Participant;
use DateTime;

class ParticipantController extends Controller
{
    function inscricao(){
        return view('inscricao.inscricao');
    }

    function store(Request $request){

        $validated = $request->validate([
            'name' => ['required', 'min:3'],
            'cpf' => ['required', new Cpf],
            'birthday' => 'required',
            'whatsapp' => 'required',
            'emergency' => 'required',
            'address' => 'required',
            'instagram' => 'required',
            'registration' => 'required',
            'photo' => 'required',
            'athletic_id' => 'required',
            'type' => 'required',
            'accommodation' => 'required',
            'document' => 'required',
        ],[],[
            'name' =>'Nome ',
            'birthday' => 'Data de nascimento',
            'emergency' => 'Telefone de emergência',
            'address' => 'Endereço',
            'registration' => 'matrícula',
            'athletic_id' => 'Atlética',
            'type' => 'Tipo de inscrição',
            'accommodation' => 'Alojamento',
            'photo' => 'Foto',
            'document' => 'Documento',
        ]);

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

        $dataNow = new DateTime(date("Y-m-d"));

        $lote = "1";

        //document
        $path3 = public_path('tmp/uploads');

        if ( ! file_exists($path3) ) {
            mkdir($path3, 0777, true);
        }

        $file3 = $request->file('document');

        $fileName3 = time().rand(1,99).'.'.$file3->extension();

        $file3->move($path3, $fileName3);

        //Lotes

        $inicioprimeirolote = new DateTime("2022-12-22");
        $fimprimeirolote = new DateTime("2023-02-15");

        $iniciosegundolote = new DateTime("2023-02-16");
        $fimseguntolote = new DateTime("2023-03-12");

        $inicioterceirolote = new DateTime("2023-03-13");
        $fimterceirolote = new DateTime("2023-04-02");

        $inicioquartolote = new DateTime("2023-04-03");
        $fimquartolote = new DateTime("2023-04-16");

        //1 - 22/12/2022 a 15/02/2023
        //2 - 16/02/2023 a 12/03/2023
        //3 - 13/03/2023 a 02/04/2023
        //4 - 03/04/2023 a 16/04/2023

        if($dataNow >= $inicioprimeirolote && $dataNow <= $fimprimeirolote){

            $lote = "1";

        } else if($dataNow >= $iniciosegundolote && $dataNow <= $fimseguntolote){

            $lote = "2";

        } else if($dataNow >= $inicioterceirolote && $dataNow <= $fimterceirolote){

            $lote = "3";

        } else if($dataNow >= $inicioquartolote && $dataNow <= $fimquartolote){

            $lote = "4";

        }



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
            "document" => $fileName3,
            "lote" => $lote,
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
