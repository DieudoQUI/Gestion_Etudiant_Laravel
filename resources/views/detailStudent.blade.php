@extends('master')
@section('content')
@if ($errors->any())
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

    @if(isset($id))
    <div class="detail__block">
        <div class="detail__block__child__one">
            <div class="student__img">
                <img src="{{ asset($studentsList['image']) }}" alt="image">
            </div>
            <div class="student__informations">
               <div class="student__informations__child">  
                    <span class="title__information">NOM :</span> <span class="content__information">{{$studentsList['firstName']}}</span> 
                </div>
                <div class="student__informations__child">  
                    <span class="title__information">PRENOM :</span> <span class="content__information">{{$studentsList['lastName']}}</span> 
                </div>
                <div class="student__informations__child">  
                    <span class="title__information">DATE DE NAISSANCE :</span> <span class="content__information">{{$studentsList['birthday']}}</span> 
                </div>
                <div class="student__informations__child">  
                    <span class="title__information">HOBBIES :</span> <span class="content__information">{{$studentsList['hobbies']}}</span> 
                </div>
                <div class="student__informations__child">  
                    <span class="title__information">SPECIALITE :</span> <span class="content__information">{{$studentsList['speciality']}}</span> 
                </div>
            </div>
        </div>
        <div class="detail__block__chid">
            <div class="student__informations__child">  
                <p class="content__information"><span class="title__information">BIOGRAPHIE :</span>{{$studentsList['biography']}}</p>
            </div>
        </div>
    </div>
    <div class="next__previous__parent">
        <div class="container">
            <div class="next__previous__parent__content">
             {{--    <a class="previous btn btn-primary me-3"
                    @if($id < count($studentsList)) {href="{{ route ('indexWithId', ['id'=>$studentsList['id']-1])}}" }
                    @elseif($id==count($studentsList)) {href="{{ route ('indexWithId', ['id'=>$studentsList['id']=1])}}"}
                    @endif
                    type="button" @endif>Précédent
                </a> --}}
                <a class="previous btn btn-primary me-3" href="{{ route ('indexWithId', ['id'=>$studentsList['id']+1])}}" type="button">Suivant</a> 
            </div>
        </div>
     </div>
    @else
    

    <section class="  mt-5 text-center">
        <div class="container-sm box-shadow">
            <form method="POST" action="{{ route('studentStore') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <h2 class="lead text-muted">Ajout d'étudiant</h2>
                </div>
                <div class="mb-3">
                    <label for="firstName" class="control-label">Nom</label>
                    <input value="{{ old( "firstName") }}" class="form-group" type="text" name="firstName">
                </div>
                <div class="mb-3">
                    <label for="lastName" class="control-label">Prénom</label>
                    <input value="{{ old( "lastName") }}" class="form-group" type="text" name="lastName">
                </div>
                <div class="mb-3">
                    <label for="birthday" class="control-label">Date de Naissance</label>
                    <input value="{{ old( "birthday") }}" class="form-group" type="date" name="birthday">
                </div>
                <div class="mb-3">
                    <label for="hobbies" class="control-label">Hobbies</label>
                    <input value="{{ old( "hobbies") }}" class="form-group" type="text" name="hobbies">
                </div>
                <div class="mb-3">
                    <label for="speciality" class="control-label">Spécialité</label>
                    <input value="{{ old( "speciality") }}" class="form-group" type="text" name="speciality">
                </div>
                <div class="mb-3">
                    <label for="biography" class="control-label">Biography</label>
                    <input value="{{ old( "biography") }}" class="form-group" type="text" name="biography">
                </div>
                <div class="  form-group mb-3">
                    <label for="image" class="control-label">Image</label>
                    <input value="{{ old( "image") }}" type="file" name="image" id="">
                </div>
                <button class="btn btn-primary" type="submit">Enregistrer</button>
            </form>
        </div>
    </section>
     @endif
    
    
    @endsection
    <style scoped>
        form{
            border-radius: 9px;

        }
       
    </style>
