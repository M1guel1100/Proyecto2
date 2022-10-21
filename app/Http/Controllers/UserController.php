<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AlumnoController;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function login(Request $request)
    {
        $enlace = mysqli_connect("localhost", "root", "", "paginacrud");
        session_start();
        $email = $_POST['email'];
        $password = $_POST['password'];
        $q =mysqli_query($enlace, "SELECT COUNT(*) as contar FROM users WHERE email = '$email' and password = '$password'");
        $array = mysqli_fetch_array($q);
        
        if($array['contar']>0){
            return redirect('alumno');
        }
        else{
            echo "<script>
            alert('Usuario no Existente');
                    window.location='/'
                  </script>";
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('alumnos.LoginUser');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.RegisterUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required', 'min:5',
            'email' => ['required','email'],
            'password' => 'required', 'min:8',
        ]);


        User::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
