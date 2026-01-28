@extends('backoffice.layout.mainlayout_admin')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Détails de l'Utilisateur</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('backoffice.dashboard') }}">Tableau de bord</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('backoffice.users.index') }}">Utilisateurs</a></li>
                            <li class="breadcrumb-item active">Détails</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Informations de l'Utilisateur</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>Nom:</strong> {{ $user->name }}</p>
                                    <p><strong>Email:</strong> {{ $user->email }}</p>
                                    <p><strong>Téléphone:</strong> {{ $user->phone ?: 'Non spécifié' }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Agence:</strong> {{ $user->agency->name ?? 'Non assignée' }}</p>
                                    <p><strong>Statut:</strong>
                                        @if ($user->status == 'active')
                                            <span class="badge badge-success">Actif</span>
                                        @elseif($user->status == 'inactive')
                                            <span class="badge badge-warning">Inactif</span>
                                        @else
                                            <span class="badge badge-danger">Bloqué</span>
                                        @endif
                                    </p>
                                    <p><strong>Dernière connexion:</strong>
                                        {{ $user->last_login_at ? $user->last_login_at->format('d/m/Y H:i') : 'Jamais' }}
                                    </p>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="{{ route('backoffice.users.edit', $user) }}" class="btn btn-primary">Modifier</a>
                                <a href="{{ route('backoffice.users.index') }}" class="btn btn-secondary">Retour à la
                                    liste</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
