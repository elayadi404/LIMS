<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
{{  Form::open(['url'=>'addProfilleEchantillons','method'=>'post','class'=>"form-horizontal"])}}
<fieldset>

    <!-- Form Name -->
    <legend>Enrégistrement de type de profil échantillon</legend>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="nom">nom :</label>
        <div class="col-md-4">
            <input id="nom" name="nom" type="text" placeholder="" class="form-control input-md">

        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="type">type:</label>
        <div class="col-md-4">
            <input id="type" name="type" type="text" placeholder="" class="form-control input-md">

        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="etat">état :</label>
        <div class="col-md-4">
            <input id="etat" name="etat" type="text" placeholder="" class="form-control input-md">

        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="delai_communication">Délais de communication :</label>
        <div class="col-md-4">
            <input id="delai_communication" name="delai_communication" type="text" placeholder="" class="form-control input-md">

        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="delai_stockage">Délais de stockage </label>
        <div class="col-md-4">
            <input id="delai_stockage" name="delai_stockage" type="text" placeholder="" class="form-control input-md">

        </div>
    </div>

</fieldset>
{{Form::submit()}}
{{ Form::close()  }}

