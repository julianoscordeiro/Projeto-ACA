<?php

namespace App\Http\Controllers;

use Auth;

use App\Question;

use Illuminate\Http\Request;

use DB;

class QuestionController  extends Controller
{


    /* Inserção no banco de dados */
    public function create(Request $request)
    {

        $question = Question::create([
            'assunto' => $request->assunto,
            'enunciado' => $request->enunciado,
            'alternativaA' => $request->alternativaA,
            'alternativaB' => $request->alternativaB,
            'alternativaC' => $request->alternativaC,
            'alternativaD' => $request->alternativaD,
            'alternativaE' => $request->alternativaE,
            'resposta' => $request->resposta,
            'tipoQuestao' => true,
            'user_id' => Auth::id()
        ]);




        //Veirica se tem uma imagem
        $temimagem = $request->imagem;

        if ($temimagem != null) {
            //Salva na pasta storage/app/images/questions
            $path = $request->imagem->storeAs('/questions', $question->id . "." . $request->imagem->extension());
            //Salva o caminho da imagem no banco de dados
            $question->imagem = $path;
            $question->save();
        }



        return redirect()->route('questoes');
    }

    public function edit($id)
    {
        $share = Share::find($id);

        return view('shares.edit', compact('share'));
    }

    //Editar questões

    public function updateQuestion(Request $request, $id)
    {



        $share = Question::find($id);
        $share->assunto = $request->get('assunto') ?? $share->assunto;
        $share->enunciado = $request->get('enunciado') ?? $share->enunciado;
        $share->alternativaA = $request->get('alternativaA') ?? $share->alternativaA;
        $share->alternativaB = $request->get('alternativaB') ?? $share->alternativaB;
        $share->alternativaC = $request->get('alternativaC') ?? $share->alternativaC;
        $share->alternativaD = $request->get('alternativaD') ?? $share->alternativaD;
        $share->alternativaE = $request->get('alternativaE') ?? $share->alternativaE;
        $share->resposta = $request->get('resposta') ?? $share->resposta;
        $share->alternativaD = $request->get('alternativaD') ?? $share->alternativaD;

        //Veirica se tem uma imagem
        $imagemexiste = $request->imagem;

        if ($imagemexiste != null) {
            //Salva na pasta storage/app/images/questions
            $caminho = $request->imagem->storeAs('/questions', $share->id . "." . $request->imagem->extension());
            //Salva o caminho da imagem no banco de dados
            $share->imagem = $caminho;
            $share->save();
        }

        $share->save();

        return redirect()->route('questoes');
    }

    public function deleteQuestion($id)
    {

        //Deleta questão
        $deleteQuestion = DB::table('questions')->where('id', '=', "$id")->delete();
        return redirect()->route('questoes');
    }

    public function search(Request $request){
        $search = $request->get('search');
        $userid = Auth::id(); 
        $question = DB::table('questions')->where('assunto','like', '%'.$search.'%')->paginate(100);
        return view('home.questions',['questions' => $question],compact('question'));
    }
}
