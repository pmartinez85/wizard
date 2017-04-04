@extends('adminlte::page')

@section('htmlheader_title')
	Change Title here!
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-9 col-md-offset-1">

                <div class="nav-tabs-custom">
                <h3>Matrícula!</h3>

                <wizard>
                    <wizard-step title="Usuari">
                        Step 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, voluptate.
                    </wizard-step>
                    <wizard-step title="Dades Personals">
                        Step 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ipsum laborum numquam recusandae rem!
                    </wizard-step>
                    <wizard-step title="Estudi i Curs">
                        Step 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, nisi?
                    </wizard-step>
                    <wizard-step title="Moduls professionals">
                        Step 4. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, nisi?
                    </wizard-step>
                    <wizard-step title="Unitat Formatives">
                        Step 5. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, nisi?
                    </wizard-step>
                </wizard>
			</div>
		</div>
	</div>
@endsection
