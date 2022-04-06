<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradeController extends Controller
{
   public function begin () 
   {
       return view ('begin');
   }

   public function enterGrades()
   {
    $student_1=$request->name_1;
    $student_2=$request->name_2;
    $student_3=$request->name_3;
    $student_4=$request->name_4;
    $student_5=$request->name_5;

    return view ('grades',[
        'student_1' => $student_1,
        'student_2' => $student_2,
        'student_3' => $student_3,
        'student_4' => $student_4,
        'student_5' => $student_5
    ]);
   }

   protected function computeAverageGrade($score1,$score2,$score3)
   {
       $average = ($score1 + $score2 + $score3) /3;
       return round($average,2);
   }
   public function computePower(Request $request)
   {
       $player_1 = $request->player_1;
       $player_2 = $request->player_2;
       $player_3 = $request->player_3;

       $p1_average = $this->computeAverageScore($request->p1_attempt1, $request->p1_attempt2, $request->p1_attempt3);
       $p2_average = $this->computeAverageScore($request->p2_attempt1, $request->p2_attempt2, $request->p2_attempt3);
       $p3_average = $this->computeAverageScore($request->p3_attempt1, $request->p3_attempt2, $request->p3_attempt3);

       return view('scores', [
           'player_1' => $player_1,
           'player_2' => $player_2,
           'player_3' => $player_3,
           // Player 1 attempts
           'p1_attempt1' => $request->p1_attempt1,
           'p1_attempt2' => $request->p1_attempt2,
           'p1_attempt3' => $request->p1_attempt3,
           'p1_average' => $p1_average,
           // Player 2 attempts
           'p2_attempt1' => $request->p2_attempt1,
           'p2_attempt2' => $request->p2_attempt2,
           'p2_attempt3' => $request->p2_attempt3,
           'p2_average' => $p2_average,
           // Player 3 attempts
           'p3_attempt1' => $request->p3_attempt1,
           'p3_attempt2' => $request->p3_attempt2,
           'p3_attempt3' => $request->p3_attempt3,
           'p3_average' => $p3_average
       ]);
   }
}
