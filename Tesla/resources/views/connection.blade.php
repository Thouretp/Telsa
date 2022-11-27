@include('header')
    <link rel="stylesheet" href="{{asset('css/connection.css')}}"/>
    <title>Connexion</title>
    <div class="container">
        <form action="{{route('login-user')}}"  method="post" class="form_login">
            @csrf
            {{ csrf_field() }}
            <h1>Connexion</h1>
            <div class="login">
                <h3>Email</h3>
                <input type="email" name="email" placeholder="Entrer votre email" required value="{{ old('email')}} " >
            </div>
            <div class="login">
                <h3>Mot de passe</h3>
                <input type="password" placeholder="Entrer votre mot de passe" required name="password" >
                @if($errors->has('password'))
                    <p>{{ $errors->first('password') }}</p>
                @endif
            </div>
            <div id="blabla">
                <div class="remember">
                    <input type="checkbox">
                    <a>Se souvenir de moi</a>
                </div>
                <div class="password_forget">
                    <a href="" class="link">Mot de passe oublié ?</a>
                </div>
            </div>
            <input type="submit" value="Se connecter" class="button">

            <div class="signup">
                <a>Vous n'avez pas de compte ?</a>
                <a href="/inscription">Créer un compte</a>
            </div>


        </form>
    </div>
    
    <script src="{{asset('js/hamburgeur.js')}}"></script>
@include('footer')