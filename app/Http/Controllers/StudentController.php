<?php
namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::orderBy('ID', 'DESC')->get();
        return view('students.index',compact(['students']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $uid = substr(md5(time()), 0, 24);
        $uid=strtoupper($uid);

        $input = $request->all();
        $input['uid'] = $uid;

         $student = Student::create($input);
        return redirect(route('students.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $student = Student::where('learner_number', $id)->first();

        return view('students.show', compact(['student']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
    {
        $student = Student::where('id', $id)->first();
        return view('students.edit', compact(['student']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student->update($request->all());
        return redirect(route('students.index'));

      //  $student = Student::where('id', $student->id)->first();
    //    return view('students.show', compact(['student']));
        
        return redirect(route('students.index'));
    }
    public function detail($id)
    {
        $student = Student::where('uid', $id)->first();

        return view('students.show', compact(['student']));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
