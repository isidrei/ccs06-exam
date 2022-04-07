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

   protected function computeAverageGrade($attempt1, $attempt2)
   {
       $average = ($attempt1 + $attempt2) /2;
       return round($average,2);
   }

   protected function getRemarks($grade_remarks)
   {
       if($grade_remarks >= 75)
       {
           $remarks = "PASSED";

       }
       else{
           $remarks= "FAILED";
       }
       return $remarks;
   }
   public function computeGrades(Request $request)
   {
    $student_1=$request->student_1;
    $student_2=$request->student_2;
    $student_3=$request->student_3;
    $student_4=$request->student_4;
    $student_5=$request->student_5;

       $s1_average = $this->computeAverageGrade($request->s1_attempt1, $request->s1_attempt2);
       $s2_average = $this->computeAverageGrade($request->s2_attempt1, $request->s2_attempt2 );
       $s3_average = $this->computeAverageGrade($request->s3_attempt1, $request->s3_attempt2 );
       $s4_average = $this->computeAverageGrade($request->s4_attempt1, $request->s4_attempt2 );
       $s5_average = $this->computeAverageGrade($request->s5_attempt1, $request->s5_attempt2 );

       $s1_remarks = $this->getRemarks($s1_average);
       $s2_remarks = $this->getRemarks($s2_average);
       $s3_remarks = $this->getRemarks($s3_average);
       $s4_remarks = $this->getRemarks($s4_average);
       $s5_remarks = $this->getRemarks($s5_average);



       return view('compute-grades', [
        'student_1' => $student_1,
        'student_2' => $student_2,
        'student_3' => $student_3,
        'student_4' => $student_4,
        'student_5' => $student_5,
           // Student 1 attempts
           's1_attempt1' => $request->s1_attempt1,
           's1_attempt2' => $request->s1_attempt2,
           's1_average' => $s1_average,
            's1_remarks' => $s1_remarks,
           
           
           // Students 2 attempts
           's2_attempt1' => $request->s2_attempt1,
           's2_attempt2' => $request->s2_attempt2,
           's2_average' => $s2_average,
           's2_remarks' => $s2_remarks,
           
           // Students 3 attempts
           's3_attempt1' => $request->s3_attempt1,
           's3_attempt2' => $request->s3_attempt2,
           's3_remarks' => $s3_remarks,
           's3_average' => $s3_average,
           // Students 4 attempts
           's4_attempt1' => $request->s4_attempt1,
           's4_attempt2' => $request->s4_attempt2,
           's4_average' => $s4_average,
           's4_remarks' => $s4_remarks,
           
           // Students 5 attempts
           's5_attempt1' => $request->s4_attempt1,
           's5_attempt2' => $request->s4_attempt2,
           's5_average' => $s5_average,
               's5_remarks' => $s5_remarks,
           
       ]);
   }
}
