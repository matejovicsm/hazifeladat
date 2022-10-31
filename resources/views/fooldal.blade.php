@extends('layouts.master')
@section('title',"fooldal")
    
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <div class="bg-dark text-white rounded p-3">
                <form method="POST">
                @csrf
                    <div class="my-3">
                        <label for="vezeteknev">Vezetéknév:</label>
                        <input type="text" id="vezeteknev" name="vezeteknev" class="form-control">
                        @error('vezeteknev')
                            <div class="alert alert-danger">

                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="my-3">
                        <label for="keresztnev">Keresztnév:</label>
                        <input type="text" id="keresztnev" name="keresztnev" class="form-control">
                        @error('keresztnev')
                            <div class="alert alert-danger">

                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="my-3">
                        <label for="szuletesi_ev">Születési év:</label>
                        <input type="year" id="szuletesi_ev" name="szuletesi_ev" class="form-control">
                        @error('szuletesi_ev')
                            <div class="alert alert-danger">

                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="my-3">
                        
                        <button type="submit" class="btn btn-warning rounded-5">Rögzítés</button>
                    </div>

                </form>
            </div>
        </div>

    </div>


</div>










@endsection
    
