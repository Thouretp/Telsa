@include('header')
    <link rel="stylesheet" href="{{asset('css/inscription.css')}}">
    <title>Inscription</title>
    <div class="container">
        <form action="{{route('register-user')}}"  method="post" class="form_signup">
            @csrf
            {{ csrf_field() }}
            <h1>Créer un compte</h1>
            <div class="typeAccount">
                <div class="typeAccountCheckbox">
                    <input type="radio" id="radioPersonnal" name="account" checked>
                    <label for="radioPersonnal">Personnel</label>
                </div>
                <div class="typeAccountCheckbox">    
                    <input type="radio" id="radioBusiness" name="account">
                    <label for="radioBusiness">Business</label>
                </div>
            </div>
            <div class="userInfo">
                <div class="name">
                    <h3>Prénom</h3>
                    <input type="text" placeholder="Entrez votre prénom" required>
                </div>
                <div class="surname">
                    <h3>Nom</h3>
                    <input type="text" placeholder="Entrez votre nom" required>
                </div>
                <div class="email">
                    <h3>Email</h3>
                    <input type="email" name="email" placeholder="Entrer votre email" required value="{{ old('email')}} " >
                </div>
                <div class="confirmEmail">
                    <h3>Confirmer votre adresse e-mail</h3>
                    <input type="text" placeholder="Entrez votre e-mail" required>
                </div>
                <div class="phone">
                    <h3>Numéro de téléphone</h3>
                    <input type="text" placeholder="Entrez votre numéro de téléphone" required>
                </div>
                <div class="password">
                    <h3>Mot de passe</h3>
                    <input type="password" placeholder="Entrer votre mot de passe" required name="password">
                    @if($errors->has('password'))
                        <p>{{ $errors->first('password') }}</p>
                    @endif
                </div>
                <div>
                    <h3>Confirmer mot de passe</h3>
                    <input type="password" placeholder="Entrez votre mot de passe" required>
                </div>
            </div>
            <div class="submitButton">
                <input type="submit" value="Créer un compte" class="button" required>
            </div>
            <div class="signin">
                <a>Vous avez deja un compte ?</a>
                <a href="/connection">Connectez-vous</a>
            </div>
        </form>
    </div>

    
    <script src="{{asset('js/hamburgeur.js')}}"></script>
@include('footer')