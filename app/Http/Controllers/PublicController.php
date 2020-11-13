<?php

namespace App\Http\Controllers;

use App\Agendamento;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;

class PublicController extends BaseController
{
   public function getSchedules($id){      
        $data = Agendamento::select('agendamentos.id',
         'motivo.motivo',
         'pessoas.nome as usuario',
         'professor.nome as professor',
         'cursos.nome as curso',
         'disciplinas.nome as disciplina',
         DB::raw('TIME_FORMAT(horainicio, "%H:%i") as horainicio'),
         DB::raw('TIME_FORMAT(horafim, "%H:%i") as horafim'), 
         DB::raw('DATE_FORMAT(agendamentos.data, "%Y-%m-%d") as data'),
         DB::raw('CONCAT(data, "T", horainicio) as eventStart'),
         DB::raw('CONCAT(data, "T", horafim) as eventEnd')
         )->join('cursos', 'cursos.id', '=', 'agendamentos.curso')
         ->join('disciplinas', 'disciplinas.id', '=', 'agendamentos.disciplina')
         ->join('pessoas as professor', 'professor.id', '=', 'agendamentos.professorresponsavel')
         ->join('pessoas', 'pessoas.id', '=', 'agendamentos.user')
         ->join('motivo_utilizacaos as motivo', 'motivo.id', '=', 'agendamentos.motivoutilizacao')
         ->join('users', 'users.pessoa_id', '=', 'pessoas.id')->where('users.id', $id)->get();    
        return $this->sendResponse($data);
   }

}