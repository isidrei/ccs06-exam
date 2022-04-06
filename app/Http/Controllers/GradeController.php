<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradeController extends Controller
{
   public function begin () 
   {
       return view ('begin');
   }

   public function enterGrades(Request $request)
   {
    $student_1=$request->name_1;
    $student_2=$request->name_2;
    $student_3=$request->name_3;
    $student_4=$request->name_4;
    $student_5=$request->name_5;

    return view ('enter-grades',[
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
   public function computeGrades(Request $request)
   {
    $student_1=$request->name_1;
    $student_2=$request->name_2;
    $student_3=$request->name_3;
    $student_4=$request->name_4;
    $student_5=$request->name_5;

       $s1_average = $this->computeAverageScore($request->s1_attempt1, $request->s1_attempt2);
       $s2_average = $this->computeAverageScore($request->s2_attempt1, $request->s2_attempt2 );
       $s3_average = $this->computeAverageScore($request->s3_attempt1, $request->s3_attempt2 );
       $s4_average = $this->computeAverageScore($request->s4_attempt1, $request->s4_attempt2 );
       $s5_average = $this->computeAverageScore($request->s5_attempt1, $request->s5_attempt2 );

       return view('compute-grades', [
        'student_1' => $student_1,
        'student_2' => $student_2,
        'student_3' => $student_3,
        'student_4' => $student_4,
        'student_5' => $student_5,
           // Player 1 attempts
           's1_attempt1' => $request->s1_attempt1,
           's1_attempt2' => $request->s1_attempt2,
           's1_average' => $s1_average,
            's1_remarks' => $s1_remarks,
           
           
           // Player 2 attempts
           's2_attempt1' => $request->s2_attempt1,
           's2_attempt2' => $request->s2_attempt2,
           's2_average' => $s2_average,
           's2_remarks' => $s2_remarks,
           
           // Player 3 attempts
           's3_attempt1' => $request->s3_attempt1,
           's3_attempt2' => $request->s3_attempt2,
           's3_remarks' => $s3_remarks,
           's3_average' => $s3_average,
           // Player 4 attempts
           's4_attempt1' => $request->s4_attempt1,
           's4_attempt2' => $request->s4_attempt2,
           's4_average' => $s4_average,
           's4_remarks' => $s4_remarks,
           
           // Player 5 attempts
           's5_attempt1' => $request->s4_attempt1,
           's5_attempt2' => $request->s4_attempt2,
           's5_average' => $s5_average,
           's5_remarks' => $s5_remarks,
           
       ]);
   }
}
