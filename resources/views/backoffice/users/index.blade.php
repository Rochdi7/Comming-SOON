@extends('backoffice.layout.mainlayout_admin')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Gestion des Utilisateurs</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('backoffice.dashboard') }}">Tableau de bord</a></li>
                            <li class="breadcrumb-item active">Utilisateurs</li>
                        </ul>
                    </div>
                    <div class="col-auto">
                        <a href="{{ route('backoffice.users.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Ajouter Utilisateur
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Liste des Utilisateurs</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nom</th>
                                            <th>Email</th>
                                            <th>Agence</th>
                                            <th>Statut</th>
                                            <th>Dernière connexion</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->agency->name ?? 'N/A' }}</td>
                                                <td>
                                                    <span
                                                        class="badge bg-{{ $user->status === 'active' ? 'success' : ($user->status === 'inactive' ? 'warning' : 'danger') }}">
                                                        {{ ucfirst($user->status) }}
                                                    </span>
                                                </td>
                                                <td>{{ $user->last_login_at ? $user->last_login_at->format('d/m/Y H:i') : 'Jamais' }}
                                                </td>
                                                <td>
                                                    <a href="{{ route('backoffice.users.edit', $user) }}"
                                                        class="btn btn-sm btn-primary">
                                                        <i class="fas fa-edit"></i> Modifier
                                                    </a>
                                                    <form action="{{ route('backoffice.users.destroy', $user) }}"
                                                        method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Êtes-vous sûr ?')">
                                                            <i class="fas fa-trash"></i> Supprimer
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
