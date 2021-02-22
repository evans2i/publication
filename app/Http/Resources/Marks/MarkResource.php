<?php


    namespace App\Http\Resources\Marks;

    use Illuminate\Http\Resources\Json\JsonResource;

    class MarkResource extends JsonResource
    {

        /**
         * Transform the resource into an array.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return array
         */
        public function toArray($request)
        {
            return [
                'id' => $this->id,
//                'faculty' => $this->examSchedule->faculty->faculty,
//                'subject'=>$this->examSchedule->subject->title,
//                'semester'=>$this->examSchedule->semester->semester,
//                'exam'=>$this->examSchedule->exam->title,
//                'month'=>$this->examSchedule->month->title,
//                'year'=>$this->examSchedule->year->title,
                'faculty_id' => $this->examSchedule->faculty_id,
                'subject_id'=>$this->examSchedule->subjects_id,
                'semester_id'=>$this->examSchedule->semesters_id,
                'exam_id'=>$this->examSchedule->exams_id,
                'month_id'=>$this->examSchedule->months_id,
                'year_id'=>$this->examSchedule->years_id,
                'student_id' => $this->student_id,
                'obtain_mark_theory'=>$this->obtain_mark_theory,
                'obtain_mark_practical'=>$this->obtain_mark_practical,
                'absent_theory'=>$this->absent_theory,
                'absent_practical'=>$this->absent_practical,
                'status'=>$this->status,
            ];
        }
    }