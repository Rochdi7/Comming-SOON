@extends('backoffice.layout.mainlayout_admin')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Modifier l'Utilisateur</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('backoffice.dashboard') }}">Tableau de bord</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('backoffice.users.index') }}">Utilisateurs</a></li>
                            <li class="breadcrumb-item active">Modifier</li>
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
                            <form action="{{ route('backoffice.users.update', $user) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nom <span class="text-danger">*</span></label>
                                            <input type="text" name="name" class="form-control"
                                                value="{{ old('name', $user->name) }}" required>
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email <span class="text-danger">*</span></label>
                                            <input type="email" name="email" class="form-control"
                                                value="{{ old('email', $user->email) }}" required>
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Mot de passe (laisser vide pour ne pas changer)</label>
                                            <input type="password" name="password" class="form-control">
                                            @error('password')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Téléphone</label>
                                            <input type="text" name="phone" class="form-control"
                                                value="{{ old('phone', $user->phone) }}">
                                            @error('phone')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Agence</label>
                                            <select name="agency_id" class="form-control">
                                                <option value="">Sélectionner une agence</option>
                                                @foreach (\App\Models\Agency::all() as $agency)
                                                    <option value="{{ $agency->id }}"
                                                        {{ old('agency_id', $user->agency_id) == $agency->id ? 'selected' : '' }}>
                                                        {{ $agency->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('agency_id')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Statut <span class="text-danger">*</span></label>
                                            <select name="status" class="form-control" required>
                                                <option value="active"
                                                    {{ old('status', $user->status) == 'active' ? 'selected' : '' }}>Actif
                                                </option>
                                                <option value="inactive"
                                                    {{ old('status', $user->status) == 'inactive' ? 'selected' : '' }}>
                                                    Inactif</option>
                                                <option value="blocked"
                                                    {{ old('status', $user->status) == 'blocked' ? 'selected' : '' }}>
                                                    Bloqué</option>
                                            </select>
                                            @error('status')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">Mettre à jour</button>
                                    <a href="{{ route('backoffice.users.index') }}" class="btn btn-secondary">Annuler</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
