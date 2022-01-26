@extends('layouts.tamplate')

@section('content')
<!-- Login Section Section Starts Here -->
    <div class="login-section padding-top padding-bottom">
        <div class=" container" style="margin-top:5%">
            <div class="account-wrapper">
                <h3 class="title">Inscription</h3>
                <form class="account-form text-start" action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
						<label>Nom :</label>
                        <input type="text" name="name" required>
                    </div>
                    <div class="form-group">
						<label>Prénom:</label>
                        <input type="text" name="lastname" required>
                    </div>
                    <div class="form-group">
						<label>Adresse email:</label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="form-group">
						<label>Numéro téléphone:</label>
                        <input type="text" name="phone" required>
                    </div>
                    <div class="form-group">
						<label>Mot de passe:</label>
                        <input type="password" name="password" required>
                    </div>
                    <div class="form-group">
						<label>Retapez le mot de passe:</label>
                        <input type="password" name="confirm" required>
                    </div>

                    <div class="form-group">
                        <button class="d-block default-button"><span>S'inscrir</span></button>
                    </div>
                </form>
                <div class="account-bottom">
                    <span class="d-block cate pt-10">Déja un compte? <a href="signup.html"> Connectez-vous ici</a></span>
                </div>
            </div>
        </div>
    </div>
@endsection
