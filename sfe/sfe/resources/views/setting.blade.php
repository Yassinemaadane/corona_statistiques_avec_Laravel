@extends('layouts.app')

@section('content')
    
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
        </div>
        </div>
        </div>

    
    <div class="container-fluid mt--7">
       @unless (Auth::check())
    You are not signed in.
@endunless
        <div class="row">
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">{{ __('Gestion des données') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
         @if($message != '')           
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
    <span class="alert-text"><strong>Success!</strong> {{ $message }}</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
                        <form method="post" action="{{ route('region.store') }}" autocomplete="off">
                            @csrf
                            @method('post')

                            <h6 class="heading-small text-muted mb-4">{{ __('Ajouter une region') }}</h6>
                            

                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Nom') }}</label>
                                    <input type="text" name="nom" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" " required autofocus>

                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Sauvgarder') }}</button>
                                </div>
                            </div>
                        </form>
                        <hr class="my-4" />
                        <form method="post" action="{{ route('ville.store')  }}" autocomplete="off">
                            @csrf
                            @method('post')

                            <h6 class="heading-small text-muted mb-4">{{ __('Ajouter une ville') }}</h6>
                             <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Nom') }}</label>
                                    <input type="text" name="nom" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" " required autofocus>


                                </div>

<label for="exampleFormControlSelect1">choisir la region</label>
    <select class="form-control" id="exampleFormControlSelect1" name="region">
      @foreach ($regions as $region)
        <option value="{{ $region->id }}"> {{ $region->nom }}</option>
      @endforeach
    </select>


                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Sauvgarder') }}</button>
                                </div>
                            </div>

                        </form>




 <div class="card-body">
                        <form method="post" action="{{ route('cas.store') }}" autocomplete="off">
                            @csrf
                            @method('post')

                            <h6 class="heading-small text-muted mb-4">{{ __('Ajouter une cas') }}</h6>
                            

                           
                                 <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('date') }}</label>
                                    <input type="date" name="date" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}"  required autofocus>

                                </div>


 <div class="form-group">
    <label for="exampleFormControlSelect1">choisir la ville</label>
    <select class="form-control" id="exampleFormControlSelect1" name="ville">
      @foreach ($villes as $ville)
        <option value="{{ $ville->id }}"> {{ $ville->nom }}</option>
      @endforeach
    </select>



                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Nombre de cas testé') }}</label>
                                    <input type="text" name="nombre_teste" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" required autofocus>

                            </div>


                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Nombre de cas confirmé') }}</label>
                                    <input type="text" name="nombre_confirme" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" required autofocus>

                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Nombre de cas gueris') }}</label>
                                    <input type="text" name="nombre_gueris" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" required autofocus>

                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Nombre de cas decés') }}</label>
                                    <input type="text" name="nombre_deces" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" required autofocus>

                            </div>


                                <!-- <div class="form-check">

                                                                
                                  <input class="form-check-input" type="radio" name="type" id="exampleRadios1" value="teste" checked>
                                  <label class="form-check-label" for="exampleRadios1">
                                   testé
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="type" id="exampleRadios2" value="confirme">
                                  <label class="form-check-label" for="exampleRadios2">
                                    confirmé
                                  </label>
                                </div>

                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="type" id="exampleRadios2" value="gueris">
                                  <label class="form-check-label" for="exampleRadios2">
                                    gueris
                                  </label>
                                </div>


                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="type" id="exampleRadios2" value="deces">
                                  <label class="form-check-label" for="exampleRadios2">
                                    decés
                                  </label>
                                </div> -->



                                </div>

                              



                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Sauvgarder') }}</button>
                                </div>
                            </div>
                        </form>
<hr class="my-4" />

                        <form method="post" action="{{ route('mesure.store') }}" autocomplete="off">
                            @csrf
                            @method('post')

                            <h6 class="heading-small text-muted mb-4">{{ __('Ajouter une conseil') }}</h6>
                            

                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('contenu') }}</label>
                                    <textarea type="text" name="contenu" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" " required autofocus></textarea>

                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Sauvgarder') }}</button>
                                </div>
                            </div>
                        </form>

                    </div>




                </div>
            </div>
        </div>


<div class="form-group">
    <label for="exampleFormControlSelect1">choisir la ville</label>
    <select class="form-control" id="exampleFormControlSelect1" name="ville">
      @foreach ($villes as $ville)
        <option value="{{ $ville->id }}"> {{ $ville->nom }}</option>
      @endforeach
    </select>


        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush