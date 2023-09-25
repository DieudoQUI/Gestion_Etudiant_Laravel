
    @extends('master')
    @section('title',"studentsList")
    @section ('content')
   <div class="container">
        <div class="btn__parent">
            <a class="btn btn-primary" href="{{ route ('addStudentForm')}}">  Ajouter un étudiant</a>
        </div>
   </div>
   @if (session("message"))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Message success</strong> <br> {{session("message")}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <section class="">
        <div class="container">
            <h2 class="lead text-muted">Listes des étudiants de l'école229</h2>
            <table class="table table-hover table-condensed">
                <thead>
                    <th scope="col">IMAGE</th>
                    <th scope="col">NOM</th>
                    <th scope="col">PRENOM</th>
                    <th scope="col">DATE</th>
                    <th scope="col">HOBBIES</th>
                    <th scope="col">SPECIALITE</th>
                    <th scope="col">ACTIONS</th>
                </thead>
                <tbody>
                    @if(isset($studentsList))
                        @foreach ($studentsList as $item)
                            <tr>
                                <td style="text-align: center"><div style=" text-align: center; width: 30px; height:30px;"><img style="width: 100%; height:100%; border-radius:50%; object-fit:cover" src="{{ $item['image'] }}" alt="image"></div></td>
                                <td>{{ $item['firstName'] }}</td>
                                <td>{{ $item['lastName'] }}</td>
                                <td>{{ $item['birthday'] }}</td>
                                <td>{{ $item['hobbies'] }}</td>
                                <td>{{ $item['speciality'] }}</td>
                                <td><a class="btn btn-primary me-3" href="{{ route ('indexWithId', ['id'=>$item['id']])}}">  voir</a><button class="btn btn-primary">editer</button> <button class="btn btn-primary">supprimer</button></td>
                            </tr>  
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </section>
</section>
@endsection
<style>
  
</style>
    

